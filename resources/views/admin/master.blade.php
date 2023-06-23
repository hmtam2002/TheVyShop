<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="admin_assets/images/logo.png" rel="shortcut icon" type="image/x-icon" />
    <title>Administrator - TheVyShop</title>
    {{-- Css all  --}}
    @include('admin.blade_template.layout.css')
</head>

<body class="sidebar-mini hold-transition text-sm @yield('class-body') ">

    @yield('content')

    @include('admin.blade_template.layout.js')
</body>

</html>
