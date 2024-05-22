<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $watch = [
            [
                "id" => 1,
                "name" => "Nobar UCL",
                "date" => "2024-06-02",
                "competition" => "Champions league",
                "home" => "Real madrid",
                "away" => "Borrusia Dortmund",
                "seat" => 50,
                "status" => "free",
                "location" => "Gedung serbaguna, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club.jpg"
            ],
            [
                "id" => 2,
                "name" => "Nobar Final Liga 1",
                "date" => "2024-05-31",
                "competition" => "Liga 1",
                "home" => "Persib",
                "away" => "Madura",
                "seat" => 100,
                "status" => "free",
                "location" => "GOR Asko, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club2.jpg"
            ],
            [
                "id" => 3,
                "name" => "Nobar Timnas Indonesia",
                "date" => "2024-06-06",
                "competition" => "World Cup Qualifier",
                "home" => "Indonesia",
                "away" => "Irak",
                "seat" => 1000,
                "status" => "free",
                "location" => "Istora senayan, Jakarta",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club3.jpg"
            ]
        ];
        return view("admin.watch_management", [
            'watch' => $watch
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
        $name = request()->post('name');
        $competition = request()->post('competiton');
        $home = request()->post('home');
        $away = request()->post('away');
        $location = request()->post('location');
        $maps = request()->post('maps');

        @dd([
            $name,
            $competition,
            $home,
            $away,
            $location,
            $maps
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $watch = [
            [
                "id" => 1,
                "name" => "Nobar UCL",
                "date" => "2024-06-02",
                "competition" => "Champions league",
                "home" => "Real madrid",
                "away" => "Borrusia Dortmund",
                "seat" => 50,
                "status" => "free",
                "location" => "Gedung serbaguna, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club.jpg"
            ],
            [
                "id" => 2,
                "name" => "Nobar Final Liga 1",
                "date" => "2024-05-31",
                "competition" => "Liga 1",
                "home" => "Persib",
                "away" => "Madura",
                "seat" => 100,
                "status" => "free",
                "location" => "GOR Asko, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club2.jpg"
            ],
            [
                "id" => 3,
                "name" => "Nobar Timnas Indonesia",
                "date" => "2024-06-06",
                "competition" => "World Cup Qualifier",
                "home" => "Indonesia",
                "away" => "Irak",
                "seat" => 1000,
                "status" => "free",
                "location" => "Istora senayan, Jakarta",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club3.jpg"
            ]
        ];

        $result = [];

        foreach($watch as $match){
            if($match["id"] == $id){
                $result = $match;
            }
        }
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $watch = [
            [
                "id" => 1,
                "name" => "Nobar UCL",
                "date" => "2024-06-02",
                "competition" => "Champions league",
                "home" => "Real madrid",
                "away" => "Borrusia Dortmund",
                "seat" => 50,
                "status" => "free",
                "location" => "Gedung serbaguna, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club.jpg"
            ],
            [
                "id" => 2,
                "name" => "Nobar Final Liga 1",
                "date" => "2024-05-31",
                "competition" => "Liga 1",
                "home" => "Persib",
                "away" => "Madura",
                "seat" => 100,
                "status" => "free",
                "location" => "GOR Asko, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club2.jpg"
            ],
            [
                "id" => 3,
                "name" => "Nobar Timnas Indonesia",
                "date" => "2024-06-06",
                "competition" => "World Cup Qualifier",
                "home" => "Indonesia",
                "away" => "Irak",
                "seat" => 1000,
                "status" => "free",
                "location" => "Istora senayan, Jakarta",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club3.jpg"
            ]
        ];

        $result = [];

        foreach($watch as $match){
            if($match["id"] == $id){
                $result = $match;
            }
        }

        return view('admin.edit_watch', [
            'match' => $result
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $watch = [
            [
                "id" => 1,
                "name" => "Nobar UCL",
                "date" => "2024-06-02",
                "competition" => "Champions league",
                "home" => "Real madrid",
                "away" => "Borrusia Dortmund",
                "seat" => 50,
                "status" => "free",
                "location" => "Gedung serbaguna, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club.jpg"
            ],
            [
                "id" => 2,
                "name" => "Nobar Final Liga 1",
                "date" => "2024-05-31",
                "competition" => "Liga 1",
                "home" => "Persib",
                "away" => "Madura",
                "seat" => 100,
                "status" => "free",
                "location" => "GOR Asko, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club2.jpg"
            ],
            [
                "id" => 3,
                "name" => "Nobar Timnas Indonesia",
                "date" => "2024-06-06",
                "competition" => "World Cup Qualifier",
                "home" => "Indonesia",
                "away" => "Irak",
                "seat" => 1000,
                "status" => "free",
                "location" => "Istora senayan, Jakarta",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club3.jpg"
            ]
        ];

        foreach($watch as $key => $match){
            if($match["id"] == $id){
                $watch[$key]["name"] =  request()->post('name');
                $watch[$key]["competition"] =  request()->post('competition');
                $watch[$key]["home"] =  request()->post('home');
                $watch[$key]["away"] =  request()->post('away');
                $watch[$key]["seat"] =  request()->post('seat');
                $watch[$key]["status"] =  request()->post('status');
                $watch[$key]["location"] =  request()->post('location');
            }
        }

        return $watch;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $watch = [
            [
                "id" => 1,
                "name" => "Nobar UCL",
                "date" => "2024-06-02",
                "competition" => "Champions league",
                "home" => "Real madrid",
                "away" => "Borrusia Dortmund",
                "seat" => 50,
                "status" => "free",
                "location" => "Gedung serbaguna, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club3.jpg"
            ],
            [
                "id" => 2,
                "name" => "Nobar Final Liga 1",
                "date" => "2024-05-31",
                "competition" => "Liga 1",
                "home" => "Persib",
                "away" => "Madura",
                "seat" => 100,
                "status" => "free",
                "location" => "GOR Asko, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club2.jpg"
            ],
            [
                "id" => 3,
                "name" => "Nobar Timnas Indonesia",
                "date" => "2024-06-06",
                "competition" => "World Cup Qualifier",
                "home" => "Indonesia",
                "away" => "Irak",
                "seat" => 1000,
                "status" => "free",
                "location" => "Istora senayan, Jakarta",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club3.jpg"
            ]
        ];

        foreach($watch as $key => $match){
            if($match["id"] == $id){
                array_splice($watch, $key, 1);
            }
        }

        return "Postingan sudah di hapus !";

    }

    public function mypost()
    {
        $watch = [
            [
                "id" => 1,
                "name" => "Nobar UCL",
                "date" => "2024-06-02",
                "competition" => "Champions league",
                "home" => "Real madrid",
                "away" => "Borrusia Dortmund",
                "seat" => 50,
                "status" => "free",
                "location" => "Gedung serbaguna, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club.jpg"
            ]
        ];

        return view('user.posts', [
            'mypost' => $watch
        ]);
    }

    public function mypostdelete(string $id){

        $watch = [
            [
                "id" => 1,
                "name" => "Nobar UCL",
                "date" => "2024-06-02",
                "competition" => "Champions league",
                "home" => "Real madrid",
                "away" => "Borrusia Dortmund",
                "seat" => 50,
                "status" => "free",
                "location" => "Gedung serbaguna, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club.jpg"
            ]
        ];

        foreach($watch as $key => $match){
            if($match["id"] == $id){
                array_splice($watch, $key, 1);
            }
        }

        return "Postingan sudah di hapus !";
        
    }

    public function posts()
    {
        $watch = [
            [
                "id" => 1,
                "name" => "Nobar UCL",
                "date" => "2024-06-02",
                "competition" => "Champions league",
                "home" => "Real madrid",
                "away" => "Borrusia Dortmund",
                "seat" => 50,
                "status" => "free",
                "location" => "Gedung serbaguna, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club.jpg"
            ],
            [
                "id" => 2,
                "name" => "Nobar Final Liga 1",
                "date" => "2024-05-31",
                "competition" => "Liga 1",
                "home" => "Persib",
                "away" => "Madura",
                "seat" => 100,
                "status" => "free",
                "location" => "GOR Asko, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club2.jpg"
            ],
            [
                "id" => 3,
                "name" => "Nobar Timnas Indonesia",
                "date" => "2024-06-06",
                "competition" => "World Cup Qualifier",
                "home" => "Indonesia",
                "away" => "Irak",
                "seat" => 1000,
                "status" => "free",
                "location" => "Istora senayan, Jakarta",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club3.jpg"
            ]
        ];
        return view("user.home", [
            'watch' => $watch
        ]);
    }

    public function landing()
    {
        $watch = [
            [
                "id" => 1,
                "name" => "Nobar UCL",
                "date" => "2024-06-02",
                "competition" => "Champions league",
                "home" => "Real madrid",
                "away" => "Borrusia Dortmund",
                "seat" => 50,
                "status" => "free",
                "location" => "Gedung serbaguna, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club.jpg"
            ],
            [
                "id" => 2,
                "name" => "Nobar Final Liga 1",
                "date" => "2024-05-31",
                "competition" => "Liga 1",
                "home" => "Persib",
                "away" => "Madura",
                "seat" => 100,
                "status" => "free",
                "location" => "GOR Asko, Sukabumi",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club2.jpg"
            ],
            [
                "id" => 3,
                "name" => "Nobar Timnas Indonesia",
                "date" => "2024-06-06",
                "competition" => "World Cup Qualifier",
                "home" => "Indonesia",
                "away" => "Irak",
                "seat" => 1000,
                "status" => "free",
                "location" => "Istora senayan, Jakarta",
                "maps" => "https://gmaps.com",
                "image" => "assets/images/club3.jpg"
            ]
        ];
        return view("landingpage.landingpage", [
            'watch' => $watch
        ]);
    }

}
