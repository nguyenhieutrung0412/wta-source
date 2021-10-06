<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class WeWouldDashbordController extends Controller
{
    public function getWeWould(){
        $all_we_would = DB::table('we_would')->select('we_would.*');
        $all_we_would = $all_we_would->orderBy("we_would.id","DESC");
        $all_we_would = $all_we_would->paginate(15);
        return View('backend.layouts.we-would.AllWe-Would')->with('all_we_would',$all_we_would);
    }
    public function getAddWeWould(){
        return View('backend.layouts.we-would.addWe-Would');
    }
    public function getSaveWeWould(Request $request){
        $data = array();
        $data['title'] = $request->title;
        $data['content'] = $request->content;
       
        $get_image = $request->file('image');
        if ($get_image) {
            $get_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            
            $get_image->move('backend/images/we-would/', $new_image);
            $data['image'] = $new_image;

            DB::table('we_would')->insert($data);
          
            return Redirect::route('admin.we-would')->with([ "message" => "Thêm we would thành công!"]);;
        }
        $data['image'] = '';
         DB::table('we_would')->insert($data);
        return Redirect::route('admin.we-would')->with('message','Thêm we would thành công');
    }
    public function getEditWeWould($id)
    {
        
        $id = substr($id,9);
        $we_would = DB::table('we_would')->where('id',$id)->get();
       
        return View('backend.layouts.we-would.editWe-Would')->with('we_would',$we_would);
    }
    public function getUpdateWeWould($id, Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['content'] = $request->content;
       
        $get_image = $request->file('image');
        if ($get_image) {
            $get_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('backend/images/we-would/', $new_image);
            $data['image'] = $new_image;
            DB::table('we_would')->where('id',$id)->update($data);
          
            return Redirect::route('admin.we-would')->with([ "message" => "Cập nhập we would thành công!"]);;
        }
        DB::table('we_would')->where('id',$id)->update($data);
        return Redirect::route('admin.we-would')->with('message','Cập nhập we would thành công');
    }
    public function deleteWeWould($id)
    {
        $id = substr($id,9);
        DB::table('we_would')->where('id',$id)->delete();
        return Redirect::route('admin.we-would')->with('message','Xóa we would thành công');
    }
}
