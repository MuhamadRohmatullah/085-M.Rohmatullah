@props([
    'text'    
])
<div class="row mx-1 mt-1">
        <div class="col-10">
            <h4>{{$text}}</h4>
        </div>
        <div class="col">
            <div class="row text-end">
                <div class="col">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle bg-sg" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                            <img src="{{ asset('assets/images/filter.png') }}" alt="" style="width : 20px;">filter
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/free">Free</a></li>
                          <li><a class="dropdown-item" href="/pay">Pay</a></li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
   </div>