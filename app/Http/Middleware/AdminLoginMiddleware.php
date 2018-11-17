<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;//Thư viện hỗ trợ đăng nhập
use Closure;
use App\User;
use App\NhomTaiKhoan;
use App\Nhom;
class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $user=Auth::user();
            if($user->nhomtaikhoan->nhom->name == 'Admin')
                return $next($request);
             else
                 return redirect('admin/dangnhap')->with('thongbao','Bạn không phải là Admin nên không có quyền truy cập trang này');
        }
        else return redirect('admin/dangnhap')->with('thongbao','Bạn chưa đăng nhập nên không được phép truy cập');

    }
}
