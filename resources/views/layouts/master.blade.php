<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Test laravel</title>
</head>
<body>
  @include('parties/nav')

  <main>
    <div class="m-3">
    @yield('main')
    </div>
  </main>
@include('parties/footer')
</body>
</html>