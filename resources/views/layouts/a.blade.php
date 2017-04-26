<html>
<head>
    <title>App Name - @yield('title')</title>

</head>
<body>
@section('sidebar')
    This is the master sidebar1111111.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>