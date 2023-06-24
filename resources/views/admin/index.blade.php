@extends('admin.master')
@section('class-body', '')
@section('content')
    {{-- loader --}}
    {{-- @include('admin.blade_template.layout.loader') --}}
    {{-- header --}}
    <div class="wrapper">

        @include('admin.blade_template.layout.header')
        {{-- menu --}}
        @include('admin.blade_template.layout.menu')


        {{-- nội dung --}}
        <div class="content-wrapper">
            {{-- <section class="content">
            <div class="container-fluid">
                <div class="alert my-alert alert-warning alert-dismissible text-sm bg-gradient-warning mt-3 mb-0">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="icon fas fa-exclamation-triangle"></i> có đứa đăng nhập
                </div>
            </div>
        </section> --}}
            <section class="content mb-3">
                <div class="container-fluid">
                    <h5 class="pt-3 pb-2">Dashboard</h5>
                    <div class="row mb-2 text-sm">
                        <div class="col-12 col-sm-6 col-md-3">
                            <a class="my-info-box info-box" href="index.php?com=setting&act=update" title="Cấu hình website">
                                <span class="my-info-box-icon info-box-icon bg-primary"><i class="fas fa-cogs"></i></span>
                                <div class="info-box-content text-dark">
                                    <span class="info-box-text text-capitalize">Cấu hình website</span>
                                    <span class="info-box-number">View more</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <a class="my-info-box info-box" href="index.php?com=user&act=info_admin" title="Tài khoản">
                                <span class="my-info-box-icon info-box-icon bg-danger"><i
                                        class="fas fa-user-cog"></i></span>
                                <div class="info-box-content text-dark">
                                    <span class="info-box-text text-capitalize">Tài khoản</span>
                                    <span class="info-box-number">View more</span>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <a class="my-info-box info-box" href="index.php?com=user&act=info_admin&changepass=1"
                                title="Đổi mật khẩu">
                                <span class="my-info-box-icon info-box-icon bg-success"><i class="fas fa-key"></i></span>
                                <div class="info-box-content text-dark">
                                    <span class="info-box-text text-capitalize">Đổi mật khẩu</span>
                                    <span class="info-box-number">View more</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <a class="my-info-box info-box" href="index.php?com=contact&act=man" title="Thư liên hệ">
                                <span class="my-info-box-icon info-box-icon bg-info"><i
                                        class="fas fa-address-book"></i></span>
                                <div class="info-box-content text-dark">
                                    <span class="info-box-text text-capitalize">Thư liên hệ</span>
                                    <span class="info-box-number">View more</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content pb-4">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Thống kê truy cập tháng 2/2023</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-filter-charts row align-items-center mb-1" action="index.php" method="get"
                                name="form-thongke" accept-charset="utf-8">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control select2" name="month" id="month">
                                            <option value="">Chọn tháng</option>
                                            <?php for ($i = 1; $i <= 12; $i++) { ?>
                                            <?php
                                            if (isset($_GET['year'])) {
                                                $selected = $i == $_GET['month'] ? 'selected' : '';
                                            } else {
                                                $selected = $i == date('m') ? 'selected' : '';
                                            }
                                            ?>
                                            <option value="<?= $i ?>" <?= $selected ?>>Tháng <?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control select2" name="year" id="year">
                                            <option value="">Chọn năm</option>
                                            <?php for ($i = 2000; $i <= date('Y') + 20; $i++) { ?>
                                            <?php
                                            if (isset($_GET['year'])) {
                                                $selected = $i == $_GET['year'] ? 'selected' : '';
                                            } else {
                                                $selected = $i == date('Y') ? 'selected' : '';
                                            }
                                            ?>
                                            <option value="<?= $i ?>" <?= $selected ?>>Năm <?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><button type="submit" class="btn btn-success">Thống Kê</button>
                                    </div>
                                </div>
                            </form>
                            <div id="apexMixedChart"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- menu --}}
        @include('admin.blade_template.layout.footer')
    </div>

@endsection
