<nav class="navbar navbar-expand-sm py-0 shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/ball.png') }}" alt="" style="width : 100px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      {{ $slot }}
    </div>
  </div>
</nav>