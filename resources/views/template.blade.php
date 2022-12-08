<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="@yield('icon')" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container flex item-center">
@yield("content")
</div>
</body>
</html>