@extends('admin.master')
@section('class-body', 'login-page')

@section('content')
    @include('admin.blade_template.layout.loader')
    @include('admin.blade_template.user.login')

    <!-- Js Config -->
    <script type="text/javascript">
        var PHP_VERSION = parseFloat('7.4.28'.replaceAll('.', ','));
        var CONFIG_BASE = 'http://localhost/mau/';
        var TOKEN = 'f7ff7c6c3679e6f17df8c346294649ac';
        var ADMIN = 'admin';
        var ASSET = 'http://localhost/mau/';
        var LINK_FILTER = '';
        var ID = 0;
        var COM = 'user';
        var ACT = 'login';
        var TYPE = '';
        var HASH = '2wWV5xIOR4';
        var ACTIVE_GALLERY = false;
        var BASE64_QUERY_STRING = 'Y29tPXVzZXImYWN0PWxvZ2lu';
        var LOGIN_PAGE = true;
        var MAX_DATE = '2023/06/29';
        var CHARTS = {};
        var ADD_OR_EDIT_PERMISSIONS = false;
        var IMPORT_IMAGE_EXCELL = false;
        var ORDER_ADVANCED_SEARCH = false;
        var ORDER_MIN_TOTAL = 1;
        var ORDER_MAX_TOTAL = 1;
        var ORDER_PRICE_FROM = 1;
        var ORDER_PRICE_TO = 1;
    </script>
@endsection
