<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
    @notifyCss
    <title>Brand</title>
</head>

<body class="bg-white">
    <div>@yield('layout')</div>
    @notifyJs
</body>
</html>