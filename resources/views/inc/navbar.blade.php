<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{ config('app.name', 'Neo-blog')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  href="/posts">Blog</a>
          </li>
        </ul>
        <ul class="nav navbar-navbar-right">
          <li class="nav-item">
            <a href="{{ route('auth.logout') }}" class="nav-link active">Logout</a>

          </li>
        </ul>
      </div>
    </div>
  </nav>