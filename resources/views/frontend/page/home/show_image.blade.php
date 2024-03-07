@extends('welcome')
@section('content')
<section id="con_show_image_student">
    <div class="container container_menu">
        <div class="row box_show_image">
            <div class="col-md-6 box_image">
                <img src="images/prevew1.png" alt="">
            </div>
            <div class="col-md-6 box_image_media">
                <p class="box_name">Nguyễn Quang Linh</p>
                <div class="box_contact">
                    <p><i class="fa-solid fa-calendar-days"></i> &nbsp; 08/03/2023</p>
                    <p><i class="fa-solid fa-phone-volume"></i> &nbsp; 093388373</p>
                </div>
                <div class="box_method_media">
                    <a href="#">Thích &nbsp;<i class="fa-solid fa-thumbs-up"></i></a>
                    <a href="#">Chia sẻ &nbsp;<i class="fa-solid fa-share"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection