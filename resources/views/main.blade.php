<!DOCTYPE html>
<html lang="en">
<head>
    @include('parts.head')
</head>
<body>

<!-- header -->
    @include('parts.header')
    <!-- content -->
     @yield('content')
<!-- hot_product -->
    @include('parts.hotproduct')
 <!-- footer -->
@include('parts.footer')
</body>
</html>