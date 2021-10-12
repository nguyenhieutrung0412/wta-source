<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

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
        $data['title'] = $request->title;
        $data['content'] = $request->content;
       
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file_name = Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
            $file_name_2 = "press".Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
            //$file_name_3 = "teacher".Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
            //resize file befor to upload large
                if ($file->getClientOriginalExtension() != "svg") {
                    // $image_resize = Image::make($file->getRealPath());
                    // $thumb_size = json_decode($settings["THUMB_SIZE_TEACHERS"]);
                    // $image_resize->fit($thumb_size->width, $thumb_size->height);
                    // $image_resize->save('public/upload/images/teachers/thumb/' . $file_name);

                    $image_resize_2 = Image::make($file->getRealPath());
                    $image_resize_2->fit(1100, 600);
                    $image_resize_2->save('backend/images/news/' . $file_name_2);
                }   
            // close upload image
            $file->move("backend/images/news/", $file_name);
            //save database
            $data['image'] = $file_name_2;
            DB::table('news')->insert($data);
            return Redirect::route('admin.news')->with('message','Thêm tin tức thành công');
    
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
        $data['title'] = $request->title;
        $data['content'] = $request->content;
       
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file_name = Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
            $file_name_2 = "press".Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
            //$file_name_3 = "teacher".Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
            //resize file befor to upload large
                if ($file->getClientOriginalExtension() != "svg") {
                    // $image_resize = Image::make($file->getRealPath());
                    // $thumb_size = json_decode($settings["THUMB_SIZE_TEACHERS"]);
                    // $image_resize->fit($thumb_size->width, $thumb_size->height);
                    // $image_resize->save('public/upload/images/teachers/thumb/' . $file_name);

                    $image_resize_2 = Image::make($file->getRealPath());
                    $image_resize_2->fit(1100, 600);
                    $image_resize_2->save('backend/images/news/' . $file_name_2);
                }   
            // close upload image
            $file->move("backend/images/news/", $file_name);
            //save database
            $data['image'] = $file_name_2;
            DB::table('news')->insert($data);
            return Redirect::route('admin.news')->with('message','Cập nhập tin tức thành công');
    
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
