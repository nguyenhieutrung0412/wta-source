<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminDashbordController extends Controller
{
    public function getAdmins()
    {
        $all_admins = DB::table('admin')->select('admin.*');
        $all_admins = $all_admins->orderBy("admin.id", "DESC");
        $all_admins = $all_admins->paginate(15);
        return View('backend.layouts.Admins.AllAdmin')->with('admin', $all_admins);
    }
    public function getAddAdmins()
    {
        return View('backend.layouts.Admins.addAdmin');
    }
    public function getSaveAdmins(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            're-password' => 'required|same:password',
        ],
            [
                "email.required" => "Vui lòng nhập email",
    
                "password.required" => "Vui lòng nhập mật khẩu",
                "re-password.same" => "Mật khẩu không khớp",
            ]  
        );
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $checkemail = DB::table('admin')->where('email', $request->email)->get();
        if(!empty($checkemail))
        {
            
            return Redirect::route('admin.admins.add')->with('message', 'Email đã tồn tại');
        }
        
        DB::table('admin')->insert($data);
        return Redirect::route('admin.admins')->with('message', 'Thêm admin thành công');
    }
    public function getEditAdmins($id)
    {

        $id = substr($id, 9);
        $admin = DB::table('admin')->where('id', $id)->get();

        return View('backend.layouts.Admins.editAdmin')->with('admin', $admin);
    }
    public function getUpdateAdmins($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            're-password' => 'required|same:password',
        ],
            [
                "email.required" => "Vui lòng nhập email",
    
                "password.required" => "Vui lòng nhập mật khẩu",
                "re-password.same" => "Mật khẩu không khớp",
            ]  
        );
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        
       
        DB::table('admin')->where('id', $id)->update($data);
        return Redirect::route('admin.admins')->with('message', 'Cập nhập admin thành công');
    }
    public function deleteAdmin($id)
    {
        $id = substr($id, 9);
        DB::table('admin')->where('id', $id)->delete();
        return Redirect::route('admin.admins')->with('message', 'Xóa admin thành công');
    }
}
