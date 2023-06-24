@extends('admin.master')
@section('class-body', '')
@section('content')
    {{-- loader --}}
    {{-- @include('admin.blade_template.layout.loader') --}}
    {{-- header --}}
    @include('admin.blade_template.layout.menu')

    {{-- menu --}}
    @include('admin.blade_template.layout.header')
    @include('admin.blade_template.layout.footer')

@endsection
