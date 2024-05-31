@include('user.post_form')  
<div class="container-fluid">
    <div class="row">
        @foreach($mypost as $match)
        @include('user.post_edit')
         <div class="col-12 col-lg-4 px-2 py-1">
             <a href="{{ route('watch.show', ['watch' => $match['watch_id']]) }}" style="text-decoration : none; color : black;">
                <a href="{{ route('watch.show', ['watch' => $match['watch_id']]) }}" style="text-decoration : none; color : black;">
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
                    >

                    <div class="row">
                        <div class="col-3">
                            <a href="#exampleModal2" style="text-decoration : none; color : black;" data-toggle="modal">
                                <x-buttons class="btn btn-warning ms-1" image="assets/images/update.png"/>
                            </a>
                        </div>
                        <div class="col-3">
                            <form action="{{ route('delete', ['id' => $match['watch_id']]) }}" method="post">
                            @csrf 
                            @method("DELETE")
                                <x-buttons class="btn btn-danger" image="assets/images/delete.png"/>
                            </form>
                        </div>
                    </div>

                </x-card>
             </a>
         </div>
        @endforeach
     </div>
 </div>