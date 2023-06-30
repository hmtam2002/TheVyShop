<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.head')
    @include('layout.css')
</head>

<body>
    @include('layout.seo')
    @include('layout.header')
    @include('layout.menu')
 
    <?php if(\Request::getRequestUri() == '/web/public/homepage') { ?>
        @include('layout.slide')
    <?php } else { ?>
        @include('layout.breadcrumb')
    <?php } ?>

    <div class="<?= (\Request::getRequestUri() == '/web/public/homepage') ? 'wrap-home' : 'wrap-content padding-top-bottom' ?>">
    @yield('content')
    </div>

    @include('layout.footer')
    @include('layout.modal')
    @include('layout.js')
    @if ($deviceType == 'mobile')
        @include('layout.phone')
    @endif
    
    
</body>

</html>