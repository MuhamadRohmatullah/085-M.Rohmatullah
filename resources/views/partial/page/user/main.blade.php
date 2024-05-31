<div class="container-fluid">
 @include('user.post_form')  
   <div class="row">
    @foreach($watch as $match)
        <div class="col-12 col-lg-4 px-2 py-1">
            <a href="{{ route('detail', ['id' => $match['watch_id']]) }}" style="text-decoration : none; color : black;">
                <x-card 
                name="{{$match['watch_name']}}"
                competition="{{$match['competition']}}" 
                home="{{$match['home_team']}}"
                away="{{$match['away_team']}}"
                date="{{$match['date']}}"
                status="{{$match['free_paid']}}"
                price="{{$match['price']}}"
                image="{{$match['image']}}"
                location="{{$match['addres']}}"
                seat="{{$match['seat']}}"
                {{-- userid="{{$match["user_id"]}}" --}}
                {{-- watchid="{{$match["watch_id"]}}" --}}
                />
            </a>
        </div>
        @endforeach
    </div>
</div>