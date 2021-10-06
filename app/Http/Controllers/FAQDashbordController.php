<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FAQDashbordController extends Controller
{
    public function getFaqs()
    {
        $all_faqs = DB::table('faqs')->select('faqs.*');
        $all_faqs = $all_faqs->orderBy("faqs.id", "DESC");
        $all_faqs = $all_faqs->paginate(15);
        return View('backend.layouts.Faqs.AllFaqs')->with('all_faqs', $all_faqs);
    }
    public function getAddFaqs()
    {
        return View('backend.layouts.Faqs.addFaqs');
    }
    public function getSaveFaqs(Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['content'] = $request->content;

        
        DB::table('faqs')->insert($data);
        return Redirect::route('admin.faq')->with('message', 'Thêm FAQ thành công');
    }
    public function getEditFaqs($id)
    {

        $id = substr($id, 9);
        $faq = DB::table('faqs')->where('id', $id)->get();

        return View('backend.layouts.Faqs.editFaqs')->with('faq', $faq);
    }
    public function getUpdateFaqs($id, Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['content'] = $request->content;

       
        DB::table('faqs')->where('id', $id)->update($data);
        return Redirect::route('admin.faq')->with('message', 'Cập nhập FAQ thành công');
    }
    public function deleteFaq($id)
    {
        $id = substr($id, 9);
        DB::table('faqs')->where('id', $id)->delete();
        return Redirect::route('admin.faq')->with('message', 'Xóa FAQ thành công');
    }
}
