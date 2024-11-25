<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.parts.head')
</head>
<body>
<section class="admin">
    <div class="row-grid">
        <div class="admin-slidebar">
            @include('admin.parts.sidebar')
        </div>
        <div class="admin-content">
            <div class="admin-content-top">
            @include('admin.parts.header')
            </div>
            <div class="admin-content-main">
                    <!-- Nội dung -->
                     @yield('content')
            </div>
        </div>
    </div>
</section>
<footer>
    @include('admin.parts.footer')
</footer>
</body>
</html>