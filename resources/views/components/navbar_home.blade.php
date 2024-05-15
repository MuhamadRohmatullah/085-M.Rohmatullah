<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logob.png') }}" alt="" style="width : 100px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link me-4 fs-5" id="home" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" id="mypost" href="/mypost">My Post</a>
        </li>
      </ul>
      <span class="navbar-text">
       <a href="/myprofile" style="text-decoration : none;"><img src="{{ asset('assets/images/user.png') }}" alt="" style="width : 50px"></a>
      </span>
    </div>
  </div>
</nav>