<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>@yield('judul') | @yield('judul_sub')</title>
</head>

<body>
    <div id="db-wrapper">
        <!-- navbar vertical -->
        @include('layouts.navbar-vertical')
        <!-- Page content -->
        <div id="page-content">
            @include('layouts.header')
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    @include('layouts.scripts')


</body>

</html>
