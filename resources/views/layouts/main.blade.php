<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="view-transition" content="same-origin" />
  @vite(['resources/css/app.css', 'resource/css/style.css', 'resources/js/app.js'])
  <title>{{ $title }}</title>
</head>

<body>
  {{-- Component of Navbar --}}
  <x-navbar/>

  <main>
    @yield('container')
  </main>

  {{-- Component of Footer --}}
  <x-footer/>

  <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>

</body>
</html>
