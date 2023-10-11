<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('hello') }}">Hello Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
      
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('hello') }}">Regards</a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link" href="{{ route('hello-b') }}">Threatening Regards</a>
          </li>
      
        </ul>
      </div>
    </div>
</nav>