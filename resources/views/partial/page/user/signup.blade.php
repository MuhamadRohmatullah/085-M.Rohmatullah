@extends("partial.layouts.app")

@section("title", "Login")

@section("content")

<section class="form-02-main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="_lk_de">
            <form action="{{ route('login') }}" method="POST">
              @csrf
            <div class="form-03-main">
              <div class="logo">
                <img src="{{asset('assets/images/login/user.png')}}">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
              </div>
              
              <div class="text-center">
                @if(session()->get("error"))
                  <p style="color : red;">{{session()->get("error")}}</p>
                @endif
              </div>
              
              <div class="form-group">
                <button class="_btn_04">
                  Login
                </button>
              </div>

              <div class="form-group nm_lk"><p>dont have account ? <a href="/registration" style="text-decoration : none; font-weight : bold">Register here</a></p></div>

          </div>
        </form>
        </div>
      </div>
    </div>
</section>

@endsection