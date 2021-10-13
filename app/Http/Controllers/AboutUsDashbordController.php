<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class AboutUsDashbordController extends Controller
{
    public function getUpdateAboutUs($id)
    {
        
       
        $about_us = DB::table('about_us')->where('id',$id)->get();
       
        return View('backend.layouts.About-Us.editAboutUsHome')->with('about',$about_us);
    }
    public function postUpdateAboutUs($id, Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['content_2'] = $request->content_2;
        $data['content_3'] = $request->content_3;
        $data['link_video'] = $request->link_video;
       
        
        DB::table('about_us')->where('id',$id)->update($data);
        return Redirect::to('/about-us/edit/'.$id)->with('message','Cập nhập about us home thành công');
    }
}
