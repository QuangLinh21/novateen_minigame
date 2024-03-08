@extends('welcome')
@section('content')
<section id="con_show_image_student">
    <div class="container container_menu">
        <div class="row box_show_image">
            <div class="col-md-6 box_image">
                <img src="{{asset($student->image_template)}}" alt="">
            </div>
            <div class="col-md-6 box_image_media">
                <p class="box_name">{{$student->stu_name}}</p>
                <div class="box_contact">
                    <p><i class="fa-solid fa-calendar-days"></i> &nbsp; {{$student->stu_birthday}}</p>
                    <p><i class="fa-solid fa-phone-volume"></i> &nbsp; {{$student->stu_phone}}</p>
                </div>
                <div class="box_method_media">
                    <div class="fb-like" data-href="{{$meta_seo['url']}}" data-width="" data-layout="" data-action="" data-size="" data-share="false"></div>
                </div>
            </div>
        </div>
            <div class="fb-comments" data-href="{{$meta_seo['url']}}" data-width="" data-numposts="20"></div>
    </div>
</section>
@endsection