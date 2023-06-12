<!DOCTYPE html>
<html class="no-js" lang="vi">
<head>
    @include('user.layouts.head')
</head>
<body class="template-index belle template-index-belle">
    <div class="pageWrapper">
    {{-- @include('user.layouts.loader.loader') --}}
    @include('user.layouts.header.master')

    @yield('main-content')
    @include('user.layouts.footer')
    </div>
</body>
</html>