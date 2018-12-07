
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <div style="width:100%;height:200px;background-color:green">header</div>
    @section("main")
    @show
    <div style="width:100%;height:200px;background-color:blue">footer</div>
</body>
</html>