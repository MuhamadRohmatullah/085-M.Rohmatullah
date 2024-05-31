@props([
    'report',
    'name'    
])

<div class="card mx-1 my-1" style="width: auto;">
            <div style="width : 50px; height : 100px;"></div>
                <div class="card-body">
                    <p>{{ $report }}</p>
                    <div class="row">
                        <div class="col">
                            <h3><img src="{{ asset('assets/images/event.png') }}" alt="" style="width : 30px">{{ $name }}</h3> 
                        </div>
                        <div class="col">
                            <div class="row">
                                {{$slot}}
                            </div>
                        </div>
                    </div>
            </div>
        </div>