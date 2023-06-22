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

<body class="sidebar-mini hold-transition text-sm ">
    {{-- Loader --}}
    {{-- @include('admin.blade_template.layout.loader') --}}

    {{-- thử thôi --}}
    {{-- <div class="wrapper">
        <!-- Header -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item nav-item-hello d-sm-inline-block">
                    <a class="nav-link"><span class="text-split">Xin chào, admin!</span></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications -->
                <li class="nav-item d-sm-inline-block">
                    <a href="../" target="_blank" class="nav-link"><i class="fas fa-reply"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu-info" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-cogs"></i></a>
                    <ul aria-labelledby="dropdownSubMenu-info"
                        class="dropdown-menu dropdown-menu-right border-0 shadow">
                        <li>
                            <a href="index.php?com=lang&act=man" class="dropdown-item">
                                <i class="fas fa-language"></i>
                                <span>Quản lý ngôn ngữ</span>
                            </a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a href="index.php?com=user&act=info_admin" class="dropdown-item">
                                <i class="fas fa-user-cog"></i>
                                <span>Thông tin admin</span>
                            </a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a href="index.php?com=user&act=info_admin&changepass=1" class="dropdown-item">
                                <i class="fas fa-key"></i>
                                <span>Đổi mật khẩu</span>
                            </a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a href="index.php?com=cache&act=delete" class="dropdown-item">
                                <i class="far fa-trash-alt"></i>
                                <span>Xóa bộ nhớ tạm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-bell"></i>
                        <span class="badge badge-danger">1</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow">
                        <span class="dropdown-item dropdown-header p-0">Thông báo</span>
                        <div class="dropdown-divider"></div>
                        <a href="index.php?com=contact&act=man" class="dropdown-item"><i
                                class="fas fa-envelope mr-2"></i><span class="badge badge-danger mr-1">0</span> Liên
                            hệ</a>
                        <div class="dropdown-divider"></div>
                        <a href="index.php?com=order&act=man" class="dropdown-item"><i
                                class="fas fa-shopping-bag mr-2"></i><span class="badge badge-danger mr-1">1</span> Đơn
                            hàng</a>
                        <div class="dropdown-divider"></div>
                        <a href="index.php?com=product&act=man&type=san-pham&comment_status=new"
                            class="dropdown-item"><i class="fas fa-comments mr-2"></i><span
                                class="badge badge-danger mr-1">0</span> Bình luận - Sản Phẩm</a>
                        <div class="dropdown-divider"></div>
                        <a href="index.php?com=news&act=man&type=tin-tuc&comment_status=new" class="dropdown-item"><i
                                class="fas fa-comments mr-2"></i><span class="badge badge-danger mr-1">0</span> Bình
                            luận - Tin tức</a>
                        <div class="dropdown-divider"></div>
                        <a href="index.php?com=newsletter&act=man&type=dangkynhantin" class="dropdown-item"><i
                                class="fas fa-mail-bulk mr-2"></i><span class="badge badge-danger mr-1">0</span> Đăng ký
                            nhận tin</a>
                    </div>
                </li>
                <li class="nav-item d-sm-inline-block">
                    <a href="index.php?com=user&act=logout" class="nav-link"><i
                            class="fas fa-sign-out-alt mr-1"></i>Đăng xuất</a>
                </li>
            </ul>
        </nav><!-- Main Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm">
            <!-- Logo -->
            <a class="brand-link" href="index.php">
                <img class="brand-image" src="assets/images/nina.png" alt="Nina">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <nav class="mt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent text-sm" data-widget="treeview"
                        role="menu" data-accordion="false">
                        <!-- Bảng điều khiển -->
                        <li class="nav-item active">
                            <a class="nav-link active" href="index.php" title="Bảng điều khiển">
                                <i class="nav-icon text-sm fas fa-tachometer-alt"></i>
                                <p>Bảng điều khiển</p>
                            </a>
                        </li>

                        <!-- Group -->
                        <li class="nav-item has-treeview menu-group">
                            <a class="nav-link" href="#" title="Quản lý Group Sản Phẩm">
                                <i class="nav-icon text-sm fas fa-layer-group"></i>
                                <p>
                                    Group Sản Phẩm <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview  ">
                                    <a class="nav-link " href="#" title="Quản lý Sản Phẩm">
                                        <i class="nav-icon text-sm fas fa-boxes"></i>
                                        <p>
                                            Quản lý Sản Phẩm <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=product&act=man_list&type=san-pham"
                                                title="Danh mục cấp 1"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục cấp 1</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=product&act=man_cat&type=san-pham"
                                                title="Danh mục cấp 2"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục cấp 2</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=product&act=man_item&type=san-pham"
                                                title="Danh mục cấp 3"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục cấp 3</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=product&act=man_sub&type=san-pham"
                                                title="Danh mục cấp 4"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục cấp 4</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=product&act=man_brand&type=san-pham"
                                                title="Danh mục hãng"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục hãng</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=product&act=man_color&type=san-pham"
                                                title="Danh mục màu sắc"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục màu sắc</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=product&act=man_size&type=san-pham"
                                                title="Danh mục kích thước"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục kích thước</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=product&act=man&type=san-pham" title="Sản Phẩm"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Sản Phẩm</p>
                                            </a></li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="index.php?com=import&act=man&type=san-pham"
                                                title="Import"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Import</p>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="index.php?com=export&act=man&type=san-pham"
                                                title="Export"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Export</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>




                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=tags&act=man&type=san-pham"
                                        title="Tags sản phẩm"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Tags sản phẩm</p>
                                    </a>
                                </li>




                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=photo_static&type=watermark"
                                        title="Watermark"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Watermark</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-group">
                            <a class="nav-link" href="#" title="Quản lý Group Tin Tức">
                                <i class="nav-icon text-sm fas fa-layer-group"></i>
                                <p>
                                    Group Tin Tức <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">


                                <li class="nav-item has-treeview  ">
                                    <a class="nav-link " href="#" title="Quản lý Tin tức">
                                        <i class="nav-icon text-sm fas fa-book"></i>
                                        <p>
                                            Quản lý Tin tức <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=news&act=man_list&type=tin-tuc"
                                                title="Danh mục cấp 1"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục cấp 1</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=news&act=man_cat&type=tin-tuc"
                                                title="Danh mục cấp 2"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục cấp 2</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=news&act=man_item&type=tin-tuc"
                                                title="Danh mục cấp 3"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục cấp 3</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=news&act=man_sub&type=tin-tuc"
                                                title="Danh mục cấp 4"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Danh mục cấp 4</p>
                                            </a></li>
                                        <li class="nav-item "><a class="nav-link "
                                                href="index.php?com=news&act=man&type=tin-tuc" title="Tin tức"><i
                                                    class="nav-icon text-sm far fa-caret-square-right"></i>
                                                <p>Tin tức</p>
                                            </a></li>
                                    </ul>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=news&act=man&type=tuyen-dung"
                                        title="Tuyển dụng"><i class="nav-icon text-sm fas fa-book"></i>
                                        <p>Tuyển dụng</p>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=tags&act=man&type=tin-tuc"
                                        title="Tags tin tức"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Tags tin tức</p>
                                    </a>
                                </li>




                                <li class="nav-item ">
                                    <a class="nav-link "
                                        href="index.php?com=photo&act=photo_static&type=watermark-news"
                                        title="Watermark tin tức"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Watermark tin tức</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Sản phẩm -->
                        <li class="nav-item has-treeview  ">
                            <a class="nav-link " href="#" title="Quản lý Thư viện ảnh">
                                <i class="nav-icon text-sm fas fa-boxes"></i>
                                <p>
                                    Quản lý Thư viện ảnh <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item "><a class="nav-link "
                                        href="index.php?com=product&act=man&type=thu-vien-anh" title="Thư viện ảnh"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Thư viện ảnh</p>
                                    </a></li>
                            </ul>
                        </li>

                        <!-- Bài viết (Có cấp) -->

                        <!-- Bài viết (Không cấp) -->
                        <li class="nav-item has-treeview  ">
                            <a class="nav-link " href="#" title="Quản lý bài viết">
                                <i class="nav-icon text-sm far fa-newspaper"></i>
                                <p>
                                    Quản lý bài viết
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=news&act=man&type=chinh-sach"
                                        title="Chính sách"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Chính sách</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=news&act=man&type=hinh-thuc-thanh-toan"
                                        title="Hình thức thanh toán"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Hình thức thanh toán</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Cart -->
                        <li class="nav-item  ">
                            <a class="nav-link " href="index.php?com=order&act=man" title="Quản lý đơn hàng">
                                <i class="nav-icon text-sm fas fa-shopping-bag"></i>
                                <p>Quản lý đơn hàng</p>
                            </a>
                        </li>

                        <!-- Tags -->
                        <li class="nav-item has-treeview  ">
                            <a class="nav-link " href="#" title="Quản lý tags">
                                <i class="nav-icon text-sm fas fa-tags"></i>
                                <p>
                                    Quản lý tags
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=tags&act=man&type=dich-vu"
                                        title="Tags dịch vụ"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Tags dịch vụ</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=tags&act=man&type=tuyen-dung"
                                        title="Tags tuyển dụng"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Tags tuyển dụng</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Newsletter -->
                        <li class="nav-item has-treeview  ">
                            <a class="nav-link " href="#" title="Quản lý nhận tin">
                                <i class="nav-icon text-sm fas fa-envelope"></i>
                                <p>
                                    Quản lý nhận tin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=newsletter&act=man&type=dangkynhantin"
                                        title="Đăng ký nhận tin"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Đăng ký nhận tin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Static -->
                        <li class="nav-item has-treeview  ">
                            <a class="nav-link " href="#" title="Quản lý trang tĩnh">
                                <i class="nav-icon text-sm fas fa-bookmark"></i>
                                <p>
                                    Quản lý trang tĩnh
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=static&act=update&type=gioi-thieu"
                                        title="Giới thiệu"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Giới thiệu</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=static&act=update&type=slogan"
                                        title="Slogan"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Slogan</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=static&act=update&type=copyright"
                                        title="Copyright"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Copyright</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=static&act=update&type=lienhe"
                                        title="Liên hệ"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Liên hệ</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=static&act=update&type=footer"
                                        title="Footer"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Footer</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Gallery -->
                        <li class="nav-item has-treeview  ">
                            <a class="nav-link " href="#" title="Quản lý hình ảnh - video">
                                <i class="nav-icon text-sm fas fa-photo-video"></i>
                                <p>
                                    Quản lý hình ảnh - video
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=photo_static&type=background"
                                        title="Background"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Background</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link "
                                        href="index.php?com=photo&act=photo_static&type=banner-seo-home"
                                        title="Banner SEO Home"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Banner SEO Home</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=photo_static&type=banner"
                                        title="Banner"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Banner</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=photo_static&type=logo"
                                        title="Logo"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Logo</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=photo_static&type=favicon"
                                        title="Favicon"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Favicon</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=photo_static&type=video"
                                        title="Video"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Video</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=photo_static&type=popup"
                                        title="Popup"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Popup</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=man_photo&type=slide"
                                        title="Slideshow"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Slideshow</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=man_photo&type=social"
                                        title="Social"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Social</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=man_photo&type=video"
                                        title="Video"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Video</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=photo&act=man_photo&type=doitac"
                                        title="Đối tác"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Đối tác</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Địa điểm -->
                        <li class="nav-item has-treeview  ">
                            <a class="nav-link " href="#" title="Quản lý địa điểm">
                                <i class="nav-icon text-sm fas fa-building"></i>
                                <p>
                                    Quản lý địa điểm
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=places&act=man_city"
                                        title="Tỉnh thành"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Tỉnh thành</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=places&act=man_district"
                                        title="Quận huyện"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Quận huyện</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=places&act=man_ward"
                                        title="Phường xã"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Phường xã</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- User -->
                        <li class="nav-item has-treeview  ">
                            <a class="nav-link " href="#" title="Quản lý user">
                                <i class="nav-icon text-sm fas fa-users"></i>
                                <p>
                                    Quản lý user
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a class="nav-link "
                                        href="index.php?com=user&act=permission_group" title="Nhóm quyền"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Nhóm quyền</p>
                                    </a></li>
                                <li class="nav-item"><a class="nav-link " href="index.php?com=user&act=info_admin"
                                        title="Thông tin admin"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Thông tin admin</p>
                                    </a></li>
                                <li class="nav-item"><a class="nav-link " href="index.php?com=user&act=man_admin"
                                        title="Tài khoản admin"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Tài khoản admin</p>
                                    </a></li>
                                <li class="nav-item"><a class="nav-link " href="index.php?com=user&act=man_member"
                                        title="Tài khoản khách"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Tài khoản khách</p>
                                    </a></li>
                            </ul>
                        </li>

                        <!-- Onesignal -->
                        <li class="nav-item  ">
                            <a class="nav-link " href="index.php?com=pushOnesignal&act=man"
                                title="Quản lý thông báo đẩy">
                                <i class="nav-icon text-sm fas fa-bell"></i>
                                <p>Quản lý thông báo đẩy</p>
                            </a>
                        </li>

                        <!-- SEO page -->
                        <li class="nav-item has-treeview  ">
                            <a class="nav-link " href="#" title="Quản lý SEO page">
                                <i class="nav-icon text-sm fas fa-share-alt"></i>
                                <p>
                                    Quản lý SEO page
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=seopage&act=update&type=san-pham"
                                        title="Sản phẩm"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Sản phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=seopage&act=update&type=tin-tuc"
                                        title="Tin tức"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Tin tức</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=seopage&act=update&type=tuyen-dung"
                                        title="Tuyển dụng"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Tuyển dụng</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=seopage&act=update&type=thu-vien-anh"
                                        title="Thư viện ảnh"><i
                                            class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Thư viện ảnh</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=seopage&act=update&type=video"
                                        title="Video"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Video</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="index.php?com=seopage&act=update&type=lien-he"
                                        title="Liên hệ"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                        <p>Liên hệ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Thiết lập thông tin -->
                        <li class="nav-item  ">
                            <a class="nav-link " href="index.php?com=setting&act=update" title="Thiết lập thông tin">
                                <i class="nav-icon text-sm fas fa-cogs"></i>
                                <p>Thiết lập thông tin</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content mb-3">
                <div class="container-fluid">
                    <h5 class="pt-3 pb-2">Dashboard</h5>
                    <div class="row mb-2 text-sm">
                        <div class="col-12 col-sm-6 col-md-3">
                            <a class="my-info-box info-box" href="index.php?com=setting&act=update"
                                title="Cấu hình website">
                                <span class="my-info-box-icon info-box-icon bg-primary"><i
                                        class="fas fa-cogs"></i></span>
                                <div class="info-box-content text-dark">
                                    <span class="info-box-text text-capitalize">Cấu hình website</span>
                                    <span class="info-box-number">View more</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <a class="my-info-box info-box" href="index.php?com=user&act=info_admin"
                                title="Tài khoản">
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
                                <span class="my-info-box-icon info-box-icon bg-success"><i
                                        class="fas fa-key"></i></span>
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
                            <h5 class="mb-0">Thống kê truy cập tháng 06/2023</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-filter-charts row align-items-center mb-1" action="index.php"
                                method="get" name="form-thongke" accept-charset="utf-8">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control select2" name="month" id="month">
                                            <option value="">Chọn tháng</option>
                                            <option value="1">Tháng 1</option>
                                            <option value="2">Tháng 2</option>
                                            <option value="3">Tháng 3</option>
                                            <option value="4">Tháng 4</option>
                                            <option value="5">Tháng 5</option>
                                            <option value="6" selected>Tháng 6</option>
                                            <option value="7">Tháng 7</option>
                                            <option value="8">Tháng 8</option>
                                            <option value="9">Tháng 9</option>
                                            <option value="10">Tháng 10</option>
                                            <option value="11">Tháng 11</option>
                                            <option value="12">Tháng 12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control select2" name="year" id="year">
                                            <option value="">Chọn năm</option>
                                            <option value="2000">Năm 2000</option>
                                            <option value="2001">Năm 2001</option>
                                            <option value="2002">Năm 2002</option>
                                            <option value="2003">Năm 2003</option>
                                            <option value="2004">Năm 2004</option>
                                            <option value="2005">Năm 2005</option>
                                            <option value="2006">Năm 2006</option>
                                            <option value="2007">Năm 2007</option>
                                            <option value="2008">Năm 2008</option>
                                            <option value="2009">Năm 2009</option>
                                            <option value="2010">Năm 2010</option>
                                            <option value="2011">Năm 2011</option>
                                            <option value="2012">Năm 2012</option>
                                            <option value="2013">Năm 2013</option>
                                            <option value="2014">Năm 2014</option>
                                            <option value="2015">Năm 2015</option>
                                            <option value="2016">Năm 2016</option>
                                            <option value="2017">Năm 2017</option>
                                            <option value="2018">Năm 2018</option>
                                            <option value="2019">Năm 2019</option>
                                            <option value="2020">Năm 2020</option>
                                            <option value="2021">Năm 2021</option>
                                            <option value="2022">Năm 2022</option>
                                            <option value="2023" selected>Năm 2023</option>
                                            <option value="2024">Năm 2024</option>
                                            <option value="2025">Năm 2025</option>
                                            <option value="2026">Năm 2026</option>
                                            <option value="2027">Năm 2027</option>
                                            <option value="2028">Năm 2028</option>
                                            <option value="2029">Năm 2029</option>
                                            <option value="2030">Năm 2030</option>
                                            <option value="2031">Năm 2031</option>
                                            <option value="2032">Năm 2032</option>
                                            <option value="2033">Năm 2033</option>
                                            <option value="2034">Năm 2034</option>
                                            <option value="2035">Năm 2035</option>
                                            <option value="2036">Năm 2036</option>
                                            <option value="2037">Năm 2037</option>
                                            <option value="2038">Năm 2038</option>
                                            <option value="2039">Năm 2039</option>
                                            <option value="2040">Năm 2040</option>
                                            <option value="2041">Năm 2041</option>
                                            <option value="2042">Năm 2042</option>
                                            <option value="2043">Năm 2043</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><button type="submit" class="btn btn-success">Thống
                                            Kê</button></div>
                                </div>
                            </form>
                            <div id="apexMixedChart"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Main Footer -->
        <footer class="main-footer text-center text-sm">
            <p class="mb-1">CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ NINA</p>
            <p class="mb-1">Địa chỉ: Lầu 3, Tòa nhà SaigonTel, Lô 46, CVPM Quang Trung, P. Tân Chánh Hiệp, Q. 12, TP
                HCM</p>
            <p class="mb-1">Tel: 028.37154879 - Fax: 028.37154878</p>
            <p class="mb-0">Email: nina@nina.vn</p>
        </footer>
    </div> --}}

    <div class="wrapper">

        {{-- header --}}
        @include('admin.blade_template.layout.menu')

        {{-- menu --}}
        @include('admin.blade_template.layout.header')
    </div>

    {{-- login --}}
    {{-- @include('admin.blade_template.user.login') --}}
    {{-- Js all --}}
    @include('admin.blade_template.layout.js')
</body>

</html>
