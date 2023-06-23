@extends('user.master')
@section('main-content')
    <div id="page-content">
        @include('user.index.slider')
        @include('user.index.collection-tab-slider')
        @include('user.index.collection-box-slider')
        @include('user.index.logo-slider')
        @include('user.index.future-product')
        @include('user.index.lastest-blog')
        @include('user.index.store-future')
    </div>
@endsection
