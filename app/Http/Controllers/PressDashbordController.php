<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PressDashbordController extends Controller
{
    public function getPress(){
        $all_press = DB::table('press')->select('press.*');
        $all_press = $all_press->orderBy("press.id","DESC");
        $all_press = $all_press->paginate(15);
        return View('backend.layouts.Press.AllPress')->with('all_press',$all_press);
    }
    public function getAddPress(){
        return View('backend.layouts.Press.addPress');
    }
    public function getSavePress(Request $request){
        $data = array();
        $data['content'] = $request->content;
       
        $get_image = $request->file('image');
        if ($get_image) {
            $get_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('backend/images/press/', $new_image);
            $data['image'] = $new_image;
            DB::table('press')->insert($data);
          
            return Redirect::route('admin.press')->with([ "message" => "Thêm báo chí thành công!"]);;
        }
        $data['image'] = '';
         DB::table('press')->insert($data);
        return Redirect::route('admin.press')->with('message','Thêm báo chí thành công');
    }
    public function getEditPress($id)
    {
        
        $id = substr($id,9);
        $press = DB::table('press')->where('id',$id)->get();
       
        return View('backend.layouts.Press.editPress')->with('press',$press);
    }
    public function getUpdatePress($id, Request $request)
    {
        $data = array();
        $data['content'] = $request->content;
       
        $get_image = $request->file('image');
        if ($get_image) {
            $get_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('backend/images/press/', $new_image);
            $data['image'] = $new_image;
            DB::table('press')->where('id',$id)->update($data);
          
            return Redirect::route('admin.press')->with([ "message" => "Cập nhập báo chí thành công!"]);;
        }
        DB::table('press')->where('id',$id)->update($data);
        return Redirect::route('admin.press')->with('message','Cập nhập báo chí thành công');
    }
    public function deletePress($id)
    {
        $id = substr($id,9);
        DB::table('press')->where('id',$id)->delete();
        return Redirect::route('admin.press')->with('message','Xóa báo chí thành công');
    }
}
