<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @include('admin.include.head')
</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

@include('admin.include.header')

@include('admin.include.sidebar')

@yield('content')

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('admin.include.footer')

</body>
</html>
