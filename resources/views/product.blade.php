@extends('user.master')
@section('main-content')
    <div id="page-content">
        <div id="MainContent" class="main-content" role="main">
            @include('user.product.breadcrumb')
            <div id="ProductSection-product-template" class="product-template__container prstyle2 container">
                @include('user.product.product')
            </div>
        </div>
    </div>
@endsection
