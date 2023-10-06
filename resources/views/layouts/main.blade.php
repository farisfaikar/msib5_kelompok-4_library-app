<!DOCTYPE html>

<script>
  function initTheme() {
    if (localStorage.getItem("theme") === "night") {
      document.documentElement.setAttribute("data-theme", "night");
    } else {
      document.documentElement.setAttribute("data-theme", "light");
    }
  }
  initTheme();
</script>

<html lang="en" data-theme="night">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="icon" href="{{ asset('img/readiverse-logo-blue.png') }}">
  <title>{{ $title }}</title>
</head>

<body class="flex min-h-screen flex-col bg-base-200">
  <header>
    @include('components.navbar')
  </header>

  <main>
    @yield('container')
  </main>

  <footer class="mt-auto">
    @include('components.footer')
  </footer>
</body>

</html>
