<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Models\Game;
use App\Models\Status;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\File;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $watch = DB::table('watches')
        ->select('watches.id as watch_id', 'watches.name as watch_name','watches.*', 'statuses.*','games.*','locations.*')
        ->join('statuses', 'watches.status_id', '=', 'statuses.id')
        ->join('games', 'watches.match_id', '=', 'games.id')
        ->join('locations', 'watches.location_id', '=', 'locations.id')
        ->get();

        

        $watchs = collect(json_decode($watch, true));
    
        return view("admin.dashboard", [
            'watch' => $watchs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $game= new Game();
        $watch = new Watch();
        $status = new Status();
        $location = new Location();


        $gambar = request()->file("gambar"); // file gambar
        $extenstion = $gambar->extension(); // png, jpg, webp
        $filename = uniqid() . "." . $extenstion;
        $gambar->move("upload/posts", $filename);

        $uriGambar = "upload/posts/" . $filename;

        $game->date = request()->post('date');
        $game->kickoff = request()->post('match_date');
        $game->competition = request()->post('competition');
        $game->home_team = request()->post('home');
        $game->away_team = request()->post('away');

        $game->save();

        $status->free_paid = request()->post('free_paid');
        $status->price =  request()->post('price');
        $status->person =  request()->post('person');

        $status->save();

        $gambarLok = request()->file("gambarLok"); // file gambar
        $extenstion = $gambarLok->extension(); // png, jpg, webp
        $filename = uniqid() . "." . $extenstion;
        $gambarLok->move("upload/posts", $filename);

        $uriPict = "upload/Location/" . $filename;

       $location->name = request()->post('location_name');
       $location->addres = request()->post('addres');
       $location->photo = $uriPict;
       $location->location_link = request()->post('location_link');
       $location->save();

        $games = Game::latest()->first();
        $statuses = Status::latest()->first();
        $locations = Location::latest()->first();

        $watch->name = request()->post('name');
        $watch->date = "2024-04-14";
        $watch->seat = request()->post('seat');
        $watch->image = $uriGambar;
        $watch->time_open = request()->post('time_open');
        $watch->like=2;
        $watch->user_id = auth()->id();
        $watch->status_id= $statuses['id'];
        $watch->match_id= $games['id'];
        $watch->location_id= $locations['id'];

        $watch->save();

        return redirect()->route('watch.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $watch = Watch::query()->where("id", "=", $id)->first();
        $game = Game::query()->where("id", "=", $watch->match_id)->first();
        $status = Status::query()->where("id", "=", $watch->status_id)->first();
        $location = Location::query()->where("id", "=", $watch->location_id)->first();

        return view("partial.page.user.detail", [
            "watch" => $watch,
            "game" => $game,
            "status" => $status,
            "location" => $location
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $watch = Watch::find($id);
        $game = Game::query()->where("id", "=", $watch->match_id)->first();
        $status = Status::query()->where("id", "=", $watch->status_id)->first();
        $location = Location::query()->where("id", "=", $watch->location_id)->first();

        return view('admin.edit_watch', [
            'watch' => $watch,
            'game' => $game,
            'status' => $status,
            'location' => $location
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $watch = Watch::find($id);
        $game = Game::query()->where("id", "=", $watch->match_id)->first();
        $status = Status::query()->where("id", "=", $watch->status_id)->first();
        $location = Location::query()->where("id", "=", $watch->location_id)->first();

        $watchs = $request->only(["name","date","seat"]);

        $watch->update($watchs);

        return redirect()->route('watch.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $watch = Watch::find($id);
        $game = Game::query()->where("id", "=", $watch->match_id)->first();
        $status = Status::query()->where("id", "=", $watch->status_id)->first();
        $location = Location::query()->where("id", "=", $watch->location_id)->first();

        $watch->delete();
        $game->delete();
        $status->delete();
        $location->delete();

        return redirect()->route('watch.index');

    }

    public function detail(string $id)
    {
       
        $watch = Watch::query()->where("id", "=", $id)->first();
        $game = Game::query()->where("id", "=", $watch->match_id)->first();
        $status = Status::query()->where("id", "=", $watch->status_id)->first();
        $location = Location::query()->where("id", "=", $watch->location_id)->first();

        return view("partial.page.user.detail", [
            "watch" => $watch,
            "game" => $game,
            "status" => $status,
            "location" => $location
        ]);

    }

    public function mypost()
    {

        $watch = DB::table('watches')
        ->select('watches.id as watch_id', 'watches.name as watch_name','watches.*', 'statuses.*','games.*','locations.*')
        ->join('statuses', 'watches.status_id', '=', 'statuses.id')
        ->join('games', 'watches.match_id', '=', 'games.id')
        ->join('locations', 'watches.location_id', '=', 'locations.id')->orderBy('watches.created_at', 'desc')
        ->get();


        $watchs = collect(json_decode($watch, true));


        $watchr = $watchs->where('user_id', auth()->id());

 

        return view('user.mypost', [
            'mypost' => $watchr
        ]);
    }

    public function mypoststore(Request $request){
        $game= new Game();
        $watch = new Watch();
        $status = new Status();
        $location = new Location();


        $gambar = request()->file("gambar"); // file gambar
        $extenstion = $gambar->extension(); // png, jpg, webp
        $filename = uniqid() . "." . $extenstion;
        $gambar->move("upload/posts", $filename);

        $uriGambar = "upload/posts/" . $filename;

        $game->date = request()->post('date');
        $game->kickoff = request()->post('match_date');
        $game->competition = request()->post('competition');
        $game->home_team = request()->post('home');
        $game->away_team = request()->post('away');

        $game->save();

        $status->free_paid = request()->post('free_paid');
        $status->price =  request()->post('price');
        $status->person =  request()->post('person');

        $status->save();

        $gambarLok = request()->file("gambarLok"); // file gambar
        $extenstion = $gambarLok->extension(); // png, jpg, webp
        $filename = uniqid() . "." . $extenstion;
        $gambarLok->move("upload/posts", $filename);

        $uriPict = "upload/Location/" . $filename;

       $location->name = request()->post('location_name');
       $location->addres = request()->post('addres');
       $location->photo = $uriPict;
       $location->location_link = request()->post('location_link');
       $location->save();

        $games = Game::latest()->first();
        $statuses = Status::latest()->first();
        $locations = Location::latest()->first();

        $watch->name = request()->post('name');
        $watch->date = "2024-04-14";
        $watch->seat = request()->post('seat');
        $watch->image = $uriGambar;
        $watch->time_open = request()->post('time_open');
        $watch->like=2;
        $watch->user_id = auth()->id();
        $watch->status_id= $statuses['id'];
        $watch->match_id= $games['id'];
        $watch->location_id= $locations['id'];

        $watch->save();
    }

    public function mypostupdate(Request $request, string $id)
    {
        
        $watch = Watch::find($id);
        $game = Game::query()->where("id", "=", $watch->match_id)->first();
        $status = Status::query()->where("id", "=", $watch->status_id)->first();
        $location = Location::query()->where("id", "=", $watch->location_id)->first();

        $watchs = $request->only(["name","date","seat"]);

        $watch->update($watchs);

    }

    public function mypostdelete(string $id){

        $watch = Watch::find($id);

        $game = Game::query()->where("id", "=", $watch->match_id)->first();
        $status = Status::query()->where("id", "=", $watch->status_id)->first();
        $location = Location::query()->where("id", "=", $watch->location_id)->first();

        $watch->delete();
        $game->delete();
        $status->delete();
        $location->delete();

        return "Postingan sudah di hapus !";
        
    }

    public function posts()
    {
        $watch = DB::table('watches')
        ->select('watches.id as watch_id', 'watches.name as watch_name','watches.*', 'statuses.*','games.*','locations.*')
        ->join('statuses', 'watches.status_id', '=', 'statuses.id')
        ->join('games', 'watches.match_id', '=', 'games.id')
        ->join('locations', 'watches.location_id', '=', 'locations.id')->orderBy('watches.created_at', 'desc')
        ->get();


        $watchs = collect(json_decode($watch, true));

        return view("user.beranda", [
            'watch' => $watchs
        ]);
    }

    public function landing()
    {
        $watch = DB::table('watches')
        ->select('watches.id as watch_id', 'watches.name as watch_name','watches.*', 'statuses.*','games.*','locations.*')
        ->join('statuses', 'watches.status_id', '=', 'statuses.id')
        ->join('games', 'watches.match_id', '=', 'games.id')
        ->join('locations', 'watches.location_id', '=', 'locations.id')->orderBy('watches.created_at', 'desc')
        ->get();


        $watchs = collect(json_decode($watch, true));

        return view("landingpage.pagelanding", [
            'watch' => $watchs
        ]);
    }
   
    public function filter()
    {
        $watch = DB::table('watches')
        ->select('watches.id as watch_id', 'watches.name as watch_name','watches.*', 'statuses.*','games.*','locations.*')
        ->join('statuses', 'watches.status_id', '=', 'statuses.id')
        ->join('games', 'watches.match_id', '=', 'games.id')
        ->join('locations', 'watches.location_id', '=', 'locations.id')
        ->where('statuses.free_paid', 'free')
        ->get();

        $watchs = collect(json_decode($watch, true));

        return view('user.beranda', [
            'watch' => $watchs
        ]);
    }

    public function pay()
    {
        $watch = DB::table('watches')
        ->select('watches.id as watch_id', 'watches.name as watch_name','watches.*', 'statuses.*','games.*','locations.*')
        ->join('statuses', 'watches.status_id', '=', 'statuses.id')
        ->join('games', 'watches.match_id', '=', 'games.id')
        ->join('locations', 'watches.location_id', '=', 'locations.id')
        ->where('statuses.free_paid', 'pay')
        ->get();

        $watchs = collect(json_decode($watch, true));

        return view('user.beranda', [
            'watch' => $watchs
        ]);
    }

}
