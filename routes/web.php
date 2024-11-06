<?php

use App\Http\Controllers\BangLuongController;
use App\Http\Controllers\ChiTietHoaDonController;
use App\Http\Controllers\ChiTietLuongController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhieuNhapController;
use App\Http\Controllers\PhieuThuController;
use App\Http\Controllers\ThuocController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/BangLuong', BangLuongController::class . '@index')->name('bangluong.index');
Route::get('/BangLuong/Create', BangLuongController::class . '@create')->name('bangluong.create');
Route::post('/BangLuong/Create', BangLuongController::class . '@store')->name('bangluong.store');
Route::get('/BangLuong/Edit/{MaBangLuong}', BangLuongController::class . '@edit')->name('bangluong.edit');
Route::put('/BangLuong/Edit/{MaBangLuong}', BangLuongController::class . '@update')->name('bangluong.update');
Route::get('/BangLuong/{MaBangLuong}', BangLuongController::class . '@destroy')->name('bangluong.delete');

Route::get('/ChiTietHoaDon', ChiTietHoaDonController::class . '@index')->name('cthoadon.index');
Route::get('/ChiTietHoaDon/Create', ChiTietHoaDonController::class . '@create')->name('cthoadon.create');
Route::post('/ChiTietHoaDon/Create', ChiTietHoaDonController::class . '@store')->name('cthoadon.store');
Route::get('/ChiTietHoaDon/Edit/{MaHoaDon}', ChiTietHoaDonController::class . '@edit')->name('cthoadon.edit');
Route::put('/ChiTietHoaDon/Edit/{MaHoaDon}', ChiTietHoaDonController::class . '@update')->name('cthoadon.update');
Route::get('/ChiTietHoaDon/{MaHoaDon}', ChiTietHoaDonController::class . '@destroy')->name('cthoadon.delete');

Route::get('/ChiTietLuong', ChiTietLuongController::class . '@index')->name('ctluong.index');
Route::get('/ChiTietLuong/Create', ChiTietLuongController::class . '@create')->name('ctluong.create');
Route::post('/ChiTietLuong/Create', ChiTietLuongController::class . '@store')->name('ctluong.store');
Route::get('/ChiTietLuong/Edit/{MaChiTiet}', ChiTietLuongController::class . '@edit')->name('ctluong.edit');
Route::put('/ChiTietLuong/Edit/{MaChiTiet}', ChiTietLuongController::class . '@update')->name('ctluong.update');
Route::get('/ChiTietLuong/{MaChiTiet}', ChiTietLuongController::class . '@destroy')->name('ctluong.delete');

Route::get('/HoaDon', HoaDonController::class . '@index')->name('hoadon.index');
Route::get('/HoaDon/Create', HoaDonController::class . '@create')->name('hoadon.create');
Route::post('/HoaDon/Create', HoaDonController::class . '@store')->name('hoadon.store');
Route::get('/HoaDon/Edit/{MaHoaDon}', HoaDonController::class . '@edit')->name('hoadon.edit');
Route::put('/HoaDon/Edit/{MaHoaDon}', HoaDonController::class . '@update')->name('hoadon.update');
Route::get('/HoaDon/{MaHoaDon}', HoaDonController::class . '@destroy')->name('hoadon.delete');

Route::get('/KhachHang', KhachHangController::class . '@index')->name('khachhang.index');
Route::get('/KhachHang/Create', KhachHangController::class . '@create')->name('khachhang.create');
Route::post('KhachHang/Create', KhachHangController::class . '@store')->name('khachhang.store');
Route::get('/KhachHang/Edit/{MaKhachHang}', KhachHangController::class . '@edit')->name('khachhang.edit');
Route::put('/KhachHang/Edit/{MaKhachHang}', KhachHangController::class . '@update')->name('khachhang.update');
Route::get('/KhachHang/{MaKhachHang}', KhachHangController::class . '@destroy')->name('khachhang.delete');

Route::get('/NhaCungCap', NhaCungCapController::class . '@index')->name('ncc.index');
Route::get('/NhaCungCap/Create', NhaCungCapController::class . '@create')->name('ncc.create');
Route::post('NhaCungCap/Create', NhaCungCapController::class . '@store')->name('ncc.store');
Route::get('/NhaCungCap/Edit/{MaNhaCungCap}', NhaCungCapController::class . '@edit')->name('ncc.edit');
Route::put('/NhaCungCap/Edit/{MaNhaCungCap}', NhaCungCapController::class . '@update')->name('ncc.update');
Route::get('/NhaCungCap/{MaNhaCungCap}', NhaCungCapController::class . '@destroy')->name('ncc.delete');

Route::get('/NhanVien', NhanVienController::class . '@index')->name('nhanvien.index');
Route::get('/NhanVien/Create', NhanVienController::class . '@create')->name('nhanvien.create');
Route::post('NhanVien/Create', NhanVienController::class . '@store')->name('nhanvien.store');
Route::get('/NhanVien/Edit/{MaNhanVien}', NhanVienController::class . '@edit')->name('nhanvien.edit');
Route::put('/NhanVien/Edit/{MaNhanVien}', NhanVienController::class . '@update')->name('nhanvien.update');
Route::get('/NhanVien/{MaNhanVien}', NhanVienController::class . '@destroy')->name('nhanvien.delete');

Route::get('/PhieuThu', PhieuThuController::class . '@index')->name('phieuthu.index');
Route::get('/PhieuThu/Create', PhieuThuController::class . '@create')->name('phieuthu.create');
Route::post('/PhieuThu/Create', PhieuThuController::class . '@store')->name('phieuthu.store');
Route::get('/PhieuThu/Edit/{MaPhieuThu}', PhieuThuController::class . '@edit')->name('phieuthu.edit');
Route::put('/PhieuThu/Edit/{MaPhieuThu}', PhieuThuController::class . '@update')->name('phieuthu.update');
Route::get('/PhieuThu/{MaPhieuThu}', PhieuThuController::class . '@destroy')->name('phieuthu.delete');

Route::get('/PhieuNhap', PhieuNhapController::class . '@index')->name('phieunhap.index');
Route::get('/PhieuNhap/Create', PhieuNhapController::class . '@create')->name('phieunhap.create');
Route::post('/PhieuNhap/Create', PhieuNhapController::class . '@store')->name('phieunhap.store');
Route::get('/PhieuNhap/Edit/{MaPhieuNhap}', PhieuNhapController::class . '@edit')->name('phieunhap.edit');
Route::put('/PhieuNhap/Edit/{MaPhieuNhap}', PhieuNhapController::class . '@update')->name('phieunhap.update');
Route::get('/PhieuNhap/{MaPhieuNhap}', PhieuNhapController::class . '@destroy')->name('phieunhap.delete');

Route::get('/Thuoc', ThuocController::class . '@index')->name('thuoc.index');
Route::get('/Thuoc/Create', ThuocController::class . '@create')->name('thuoc.create');
Route::post('/Thuoc/Create', ThuocController::class . '@store')->name('thuoc.store');
Route::get('/Thuoc/Edit/{MaThuoc}', ThuocController::class . '@edit')->name('thuoc.edit');
Route::put('/Thuoc/Edit/{MaThuoc}', ThuocController::class . '@update')->name('thuoc.update');
Route::get('/Thuoc/{MaThuoc}', ThuocController::class . '@destroy')->name('thuoc.delete');

