<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DashbordAdminController extends Controller
{
    public function getIndexAdmin(){
        return View('backend.layouts.index');
    }
    public function logout(){
        Auth::logout();
        return Redirect::route('login');
    }
    public function login(){
       
        return View('auth.login');
    }
    public function authenticate(Request $request)
    {
       
        $auth = array(
            'email' => $request->email,
            'password' => $request->password,

        );
        $password = $request->password;
        
        if (Auth::attempt($auth)) {
            // Authentication passed...
            Auth::logoutOtherDevices($password);
            return redirect()->intended('/');
        }
        else {
            return redirect()->route("login")->with(["type" => "danger", "flash_message" => "Email hoặc mật khẩu không đúng"]);
        }
    }
    public function getNews(){
        $all_news = DB::table('news')->select('news.*');
        $all_news = $all_news->orderBy("news.id","DESC");
        $all_news = $all_news->paginate(15);
        return View('backend.layouts.News.AllNews')->with('all_news',$all_news);
    }
    public function getAddNews(){
        return View('backend.layouts.News.addNews');
    }
    public function getSaveNews(Request $request){
        $data = array();
        $data['content'] = $request->content;
       
        $get_image = $request->file('image');
        if ($get_image) {
            $get_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('backend/images/news/', $new_image);
            $data['image'] = $new_image;
            DB::table('news')->insert($data);
          
            return Redirect::route('admin.news')->with([ "message" => "Thêm tin tức thành công!"]);;
        }
        $data['image'] = '';
         DB::table('news')->insert($data);
        return Redirect::route('admin.news')->with('message','Thêm tin tức thành công');
    }
    public function getEditNews($id)
    {
        
        $id = substr($id,9);
        $news = DB::table('news')->where('id',$id)->get();
       
        return View('backend.layouts.News.editNews')->with('news',$news);
    }
    public function getUpdateNews($id, Request $request)
    {
        $data = array();
        $data['content'] = $request->content;
       
        $get_image = $request->file('image');
        if ($get_image) {
            $get_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('backend/images/news/', $new_image);
            $data['image'] = $new_image;
            DB::table('news')->where('id',$id)->update($data);
          
            return Redirect::route('admin.news')->with([ "message" => "Cập nhập tin tức thành công!"]);;
        }
        DB::table('news')->where('id',$id)->update($data);
        return Redirect::route('admin.news')->with('message','Cập nhập tin tức thành công');
    }
    public function deleteNew($id)
    {
        $id = substr($id,9);
        DB::table('news')->where('id',$id)->delete();
        return Redirect::route('admin.news')->with('message','Xóa tin tức thành công');
    }
}
