<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function student_store(Request $request){
    //     $info_student = new StudentModel();
    //    $info_student['stu_name'] = $request->stu_name;
    //    $info_student['stu_birthday'] = $request->stu_birthday;
    //    $info_student['stu_description'] = $request->stu_description;
    //    $info_student['stu_phone'] = $request->stu_phone;
    //    $info_student['stu_photo'] = $request->stu_photo;
    //    if ($request->hasFile('stu_photo')) {
    //        $file = $request->file('stu_photo');
    //        //dặt tên cho file img1
    //        $filename = time() . '_' . $file->getClientOriginalName();
    //        //định nghĩa dẫn ssex upload lên
    //        $path_upload = 'uploads/avatar/';
    //        $request->file('stu_photo')->move($path_upload, $filename);
    //        $info_student->stu_photo = $path_upload . $filename;
    //    }
    //    $info_student->save();
    //    $type_template= $request->template;
    //    $student_id = $info_student->id;
    //    $student = StudentModel::where('stu_id',$student_id )->first();

    //    return view('frontend.page.home.show_image',compact('student'));
    // }
    public function student_store(Request $request){
        $info_student = new StudentModel();
        $imageUrl = '';
       $info_student['stu_name'] = $request->stu_name;
       $info_student['stu_birthday'] = $request->stu_birthday;
       $info_student['stu_description'] = $request->stu_description;
       $info_student['stu_phone'] = $request->stu_phone;
       $info_student['stu_photo'] = $request->stu_photo;
       if ($request->hasFile('stu_photo')) {
           $file = $request->file('stu_photo');
           //dặt tên cho file img1
           $filename = time() . '_' . $file->getClientOriginalName();
           //định nghĩa dẫn ssex upload lên
           $path_upload = 'uploads/avatar/';
           $request->file('stu_photo')->move($path_upload, $filename);
           $info_student->stu_photo = $path_upload . $filename;
       }
       $info_student['image_template'] = 'null';
       $info_student['stu_status'] = 0;
       $info_student->save();
       $type_template= $request->template;
       $student_id = $info_student->id;
       $student = StudentModel::where('stu_id',$student_id )->first();
    //    dd($info_student,$student_id);
       return view('frontend.page.home.preview_images',compact('student','type_template'));
    }
    public function update_info(Request $request){
          $stuId = $request->input('stuId');
        if ($request->has('image')) {
            $imageData = $request->input('image');
            $imageName = time() . '.jpg';
            $storagePath = public_path('images');
            if (!file_exists($storagePath)) {
                mkdir($storagePath, 0755, true);
            }
            file_put_contents($storagePath . '/' . $imageName, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData)));
            $imageUrl = url('images/' . $imageName);

            $data=array();
            $data['image_template']=$imageUrl;
            $data['stu_status']=1;
            StudentModel::where('stu_id',$stuId)->update($data);
            // $student = StudentModel::where('stu_id',$stuId )->first();
            return response()->json($imageUrl);
        }
        return response()->json(['error' => 'No image data provided.'], 400);
        
    }
    // public function update_info(Request $request){
    //     if ($request->has('image')) {
    //         $imageData = $request->input('image');
    //         $imageName = time() . '.jpg';
    //         $storagePath = public_path('images');
    //         if (!file_exists($storagePath)) {
    //             mkdir($storagePath, 0755, true);
    //         }
    //         file_put_contents($storagePath . '/' . $imageName, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData)));
    //         $imageUrl = url('images/' . $imageName);
    //         return response()->json($imageUrl);
    //     }

    //     // Nếu không có dữ liệu ảnh, trả về thông báo lỗi
    //     return response()->json(['error' => 'No image data provided.'], 400);

        
    // }
}
