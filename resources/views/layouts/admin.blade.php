<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - INAP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 @include('styles.styles')
</head>
<body>
      <main id="main" class="main">
        @include('partials.header')
         @include('partials.sidebar')
        <main class="py-4">
            @yield('content')
        </main>
    </main>
    @include('styles.js')
</body>
</html>
