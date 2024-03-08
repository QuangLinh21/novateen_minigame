<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class ListImagesController extends Controller
{
    function getCurrentPageURL() {
        $pageURL = 'http';
        if (!empty($_SERVER['HTTPS'])) {if($_SERVER['HTTPS'] == 'on'){$pageURL .= "s";}}
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "443") {
          $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
          $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        return $pageURL;
      }
    public function list_images(Request $request){
        $key = $request->search;
        $meta_seo = [
            'title' => 'Hợp tác cùng Novaedu',
            'keywords' => 'Novaedu, Giáo dục, Hợp tác',
            'description' => 'Hợp tác cùng Novaedu - Hợp tác cùng Novaedu',
            'url' => $this->getCurrentPageURL(),
            'img' => 'https://novaedu.vn/uploads/anh-mac-dinh.jpg'
        ];
        $data = StudentModel::where('stu_status',1)->where('stu_name', 'like', '%' . $key . '%')->orderBy('stu_id', 'desc')->paginate(20)->appends(['search' => $key]);;
        return view('frontend.page.home.list_images',compact('data','meta_seo'));
    }
    public function detail_images($stu_id){
        $student = StudentModel::where('stu_id',$stu_id)->first();
        $student_image = $student->image_template;
        $meta_seo = [
            'title' => 'Hợp tác cùng Novaedu',
            'keywords' => 'Novaedu, Giáo dục, Hợp tác',
            'description' => 'Hợp tác cùng Novaedu - Hợp tác cùng Novaedu',
            'url' => $this->getCurrentPageURL(),
            'img' => $student_image
        ];
        return view('frontend.page.home.show_image',compact('student','meta_seo'));
    }
}
