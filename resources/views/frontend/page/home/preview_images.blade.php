@extends('welcome')
@section('content')
    <style>
        #htmlContent,
        .box_htmlContent {
            position: relative;
        }
    </style>
    <section id="con_show_image_student">
        <div class="container container_menu">
            <div class="row box_show_image">
                <div class="col-md-6 box_image" id="htmlContent">
                    <?php if($type_template == 1) {
                ?>
                    <div class="box_htmlContent">
                        <div class="preview_avatar_tem1">
                            <img src="{{asset($student->stu_photo) }}" class="preview_avatar_1 student_photo"
                                alt="">
                        </div>
                        <img src="{{ asset('frontend/images/preview1.png') }}" class="avatar_tem" alt="">
                        <p class="student_name preview_name_1">{{ $student->stu_name }}</p>
                        <p class="student_description preview_description_1">{{ $student->stu_description }}</p>
                        <p class="student_birthday preview_birthday_1">{{ $student->stu_birthday }}</p>
                    </div>
                    <?php } if($type_template == 2) {?>
                    <div class="box_htmlContent">
                        <div class="preview_avatar_tem2">
                            {{-- <img src="{{asset('frontend/images/shyn.jpg')}}" class="st_avatar_2 student_photo" alt=""> --}}
                            <img src="{{asset($student->stu_photo) }}" class="preview_avatar_2 student_photo" alt="">
                        </div>
                        <img src="{{ asset('frontend/images/preview2.png') }}" class="avatar_tem" alt="">
                        <p class="student_name preview_name_2">{{ $student->stu_name }}</p>
                            <p class="student_description preview_description_2">{{ $student->stu_description }}</p>
                        <p class="student_birthday preview_birthday_2">{{ $student->stu_birthday }}</p>
                    </div>
                    <?php }if($type_template == 3) {?>
                        <div class="box_htmlContent">
                            <div class="preview_avatar_tem2">
                                {{-- <img src="{{asset('frontend/images/shyn.jpg')}}" class="st_avatar_2 student_photo" alt=""> --}}
                                <img src="{{asset($student->stu_photo) }}" class="preview_avatar_2 student_photo" alt="">
                            </div>
                            <img src="{{ asset('frontend/images/preview3.png') }}" class="avatar_tem" alt="">
                            <p class="student_name preview_name_3">{{ $student->stu_name }}</p>
                                <p class="student_description preview_description_2">{{ $student->stu_description }}</p>
                            <p class="student_birthday preview_birthday_3">{{ $student->stu_birthday }}</p>
                        </div>
                        <?php }if($type_template == 4) {?>
                            <div class="box_htmlContent">
                                <div class="preview_avatar_tem2">
                                    {{-- <img src="{{asset('frontend/images/shyn.jpg')}}" class="st_avatar_2 student_photo" alt=""> --}}
                                    <img src="{{asset($student->stu_photo) }}" class="preview_avatar_2 student_photo" alt="">
                                </div>
                                <img src="{{ asset('frontend/images/preview3.png') }}" class="avatar_tem" alt="">
                                <p class="student_name preview_name_3">{{ $student->stu_name }}</p>
                                    <p class="student_description preview_description_2">{{ $student->stu_description }}</p>
                                <p class="student_birthday preview_birthday_3">{{ $student->stu_birthday }}</p>
                            </div>
                            <?php }?>
                    
                </div>
                <div class="col-md-6 box_image_media">
                    <p class="box_name">{{ $student->stu_name }}</p>
                    <div class="box_contact">
                        <p><i class="fa-solid fa-calendar-days"></i> &nbsp; {{ $student->stu_birthday }}</p>
                        <p><i class="fa-solid fa-phone-volume"></i> &nbsp; {{ $student->stu_phone }}</p>
                        <input type="hidden" name="stu_id" id="stu_id" value=" {{ $student->stu_id }}">
                    </div>
                    <div class="box_method_media">
                        <a id="download" class="btn btn-info">Download</a>
                        <a id="share" class="btn btn-success">share to facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
    // Sự kiện khi click nút chia sẻ
    $("#share").on('click', function() {
        var element = $("#htmlContent");
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var stuId = $("#stu_id").val();

        // Thiết lập kích thước của canvas để đạt được độ phân giải cao
        var width = element.outerWidth(); // Lấy chiều rộng của phần tử HTML
        var height = element.outerHeight(); // Lấy chiều cao của phần tử HTML
        var scale = 2; // Scale factor, có thể thay đổi tùy theo nhu cầu

        // Chuyển đổi nội dung HTML thành hình ảnh với độ phân giải cao
        html2canvas(element[0], {
            width: width * scale, // Thiết lập chiều rộng canvas
            height: height * scale, // Thiết lập chiều cao canvas
            scale: scale, // Thiết lập tỉ lệ scale
            onrendered: function(canvas) {
                // Chuyển đổi hình ảnh từ canvas thành định dạng base64 PNG
                var imageData = canvas.toDataURL("image/png");

                // Gửi hình ảnh lên máy chủ
                $.ajax({
                    url: '{{ url('update_info') }}', // Sử dụng route helper để xác định URL
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Gửi CSRF token trong header
                    },
                    data: {
                        image: imageData,
                        stuId: stuId
                    },
                    success: function(response) {
                        var imageUrl = response;
                        // Chia sẻ ảnh lên Facebook bằng cách mở cửa sổ chia sẻ
                        var shareUrl =
                            'https://www.facebook.com/sharer/sharer.php?u=' +
                            imageUrl;
                        var shareWindow = window.open(shareUrl, '_blank');

                        // Kiểm tra khi cửa sổ chia sẻ đã đóng
                        $(window).on('beforeunload', function() {
                            // Hiển thị hình ảnh sau khi chia sẻ thành công
                            if (!shareWindow.closed) {
                                $('#sharedImage').attr('src', imageUrl);
                                $('#sharedImageContainer').show();
                            }
                        });
                    }
                });
            }
        });
    });
});
    </script>
@endsection
