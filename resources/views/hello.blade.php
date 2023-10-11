<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  @include ('partials.head')
</head>


<body>
<header>
  @include ('partials.nav')
</header>

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