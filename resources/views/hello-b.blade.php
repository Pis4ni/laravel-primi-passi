<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  @include ('partials.head')
</head>



<body>
    <nav>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('hello') }}">Hello Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href=" {{ route('hello') }} ">Regards</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href=" {{ route('hello-b') }} ">Threatening Regards</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
    </nav>
    <main>
        <div class="wrapper">
            <div class="container">
                <div class="text-center vh-100 d-flex flex-column align-items-center justify-content-center">
                    <h1>
                        {{ $regards[$rand] }}
                    </h1>
                    <h2>
                        {{ $ascii[$rand] }}
                    </h2>
                </div>
            </div>
        </div>

    </main>
</body>

</html>