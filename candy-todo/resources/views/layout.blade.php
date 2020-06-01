<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  @yield('styles')
</head>

<body>
  <header>
    <nav class="my-navbar">
      <a class="my-navbar-brand">todoAPPPPP</a>
    </nav>
  </header>
  <main>
    @yield('content')
  </main>
  @yield('scripts')
</body>

</html>