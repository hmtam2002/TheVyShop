<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    @include('user.layouts.head.head')
</head>

<body class="template-index belle template-index-belle">
    <div class="pageWrapper">
        {{-- hiệu ứng load web --}}
        @include('user.layouts.loader.loader')
        {{-- header --}}
        @include('user.layouts.header.master')
        {{-- menu mobile --}}
        @include('user.layouts.mobile.menu')
        {{-- nội dung chính --}}
        @yield('main-content')
        {{-- footer --}}
        @include('user.layouts.footer.footer')
        {{-- js, các thành phần cuối của template --}}
        @include('user.layouts.end.end')
    </div>
</body>

</html>
