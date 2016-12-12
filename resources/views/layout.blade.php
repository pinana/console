<!DOCTYPE html>
<html lang="en">
<html>
<body>

@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    <div class="row marketing">
        <div class="col-lg-5 nodos">
    @yield('content')
            </div>
        </div>
    <h2> @yield('content2')</h2>
    <h3> @yield('content3')</h3>
</div>
</body>
</html>
