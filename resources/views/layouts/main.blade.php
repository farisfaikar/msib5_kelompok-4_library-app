<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>{{ $title }}</title>
</head>

<body class="dark:bg-gray-900 dark:text-white">
  <header>
    @include('components.navbar')
  </header>

  <main>
    @yield('container')
  </main>

  <footer>
    @include('components.footer')
  </footer>
</body>

</html>
