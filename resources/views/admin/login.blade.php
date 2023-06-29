@extends('admin.master')
@section('class-body', 'login-page')

@section('content')
    @include('admin.blade_template.layout.loader')
    @include('admin.blade_template.user.login')
@endsection
