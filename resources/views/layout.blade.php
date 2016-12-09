<!DOCTYPE html>
<html lang="en">
<html>
<body>

@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    <h1> @yield('content')</h1>
    <h2> @yield('content2')</h2>
    <h3> @yield('content2')</h3>
</div>
</body>
</html>
