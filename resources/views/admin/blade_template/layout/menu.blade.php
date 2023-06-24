<aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm">
    <!-- Logo -->
    <a style="margin-top: 15px" class="brand-link" href="index.php">
        <img style="width: 150px;margin: 20px 0;" class="brand-image" src="admin_assets/images/logo-admin.png"
            alt="TheVyShop">
    </a>
    <div class="sidebar">
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent text-sm" data-widget="treeview"
                role="menu" data-accordion="false">


                {{-- bảng điều khiển --}}
                @include('admin.blade_template.layout.menu.bangdieukhien')
                {{-- group sản phẩm --}}
                @include('admin.blade_template.layout.menu.group_sanpham')
                {{-- group tin tức  --}}
                @include('admin.blade_template.layout.menu.group_tintuc')
                {{-- quản lý thư viện ảnh --}}
                @include('admin.blade_template.layout.menu.thuvienanh')
                {{-- quản lý bài viết --}}
                @include('admin.blade_template.layout.menu.quanlybaiviet')
                {{-- quản lý đơn hàng --}}
                @include('admin.blade_template.layout.menu.quanlydonhang')
                {{-- quản lý tag --}}
                @include('admin.blade_template.layout.menu.quanlytag')
                {{-- quản lý nhận tin --}}
                @include('admin.blade_template.layout.menu.quanlynhantin')
                {{-- quản lý trang tĩnh --}}
                @include('admin.blade_template.layout.menu.quanlytrangtinh')
                {{-- quản lý hình ảnh, video --}}
                @include('admin.blade_template.layout.menu.hinhanh_video')
                {{-- quản lý địa điểm --}}
                @include('admin.blade_template.layout.menu.quanlydiadiem')
                {{-- quản lý user --}}
                @include('admin.blade_template.layout.menu.quanlyuser')
                {{-- quản lý SEO page --}}
                @include('admin.blade_template.layout.menu.seo')
                {{-- thiết lập thông tin --}}
                @include('admin.blade_template.layout.menu.thietlapthongtin')
            </ul>
        </nav>
    </div>
</aside>
