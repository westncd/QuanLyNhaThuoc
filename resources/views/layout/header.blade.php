<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Logo hoặc tên trang web -->
        <a class="navbar-brand" href="{{ route('home') }}" style="font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            Issues Management
        </a>


        <!-- Nút toggle để hiển thị menu trên màn hình nhỏ -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Các mục điều hướng -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('bangluong.index') ? 'active' : '' }}" href="{{ route('bangluong.index') }}">Bảng Lương</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('hoadon.index') ? 'active' : '' }}" href="{{ route('hoadon.index') }}">Hóa Đơn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('khachhang.index') ? 'active' : '' }}" href="{{ route('khachhang.index') }}">Khách Hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('ncc.index') ? 'active' : '' }}" href="{{ route('ncc.index') }}">Nhà Cung Cấp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('nhanvien.index') ? 'active' : '' }}" href="{{ route('nhanvien.index') }}">Nhân Viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('phieuthu.index') ? 'active' : '' }}" href="{{ route('phieuthu.index') }}">Phiếu Thu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('phieunhap.index') ? 'active' : '' }}" href="{{ route('phieunhap.index') }}">Phiếu Nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('thuoc.index') ? 'active' : '' }}" href="{{ route('thuoc.index') }}">Thuốc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('cthoadon.index') ? 'active' : '' }}" href="{{ route('cthoadon.index') }}">Chi tiết hóa đơn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('ctluong.index') ? 'active' : '' }}" href="{{ route('ctluong.index') }}">Chi tiết lương</a>
                </li>
            </ul>
        </div>
    </div>
</nav>