<section id="container_form">
    <form  action="student_store" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-5">
                <div class="box_caption_form d-flex justify-content-end align-items-center">
                    <div class="d-flex align-items-center ">
                        <img src="{{asset('frontend/images/file-user-fill.svg')}}" alt="">
                        <p class="m-0">THÔNG TIN HỌC SINH</p>
                    </div>
                </div>
                <div class="container_review">
                    <div class="complate_template" >
                        {{-- <h5 class="title_preview"><i>Preview</i></h5> --}}
                        <div id="complate_template1" class="box_preview_main hidden">
                            <div class="box_avatar_tem1">
                                <img src="" class="st_avatar_1 student_photo" alt="">
                            </div>
                            <img src="{{asset('frontend/images/preview1.png')}}" class="avatar_tem" alt="">
                            <p class="student_name st_name_1"></p>
                            <p class="student_description st_description_1"></p>
                            <p class="student_birthday st_birthday_1"></p>

                        </div>
                        <div id="complate_template2" class="box_preview_main  hidden">
                            <div class="box_avatar_tem2">
                                {{-- <img src="{{asset('frontend/images/shyn.jpg')}}" class="st_avatar_2 student_photo" alt=""> --}}
                                <img src="" class="st_avatar_2 student_photo" alt="">
                            </div>
                            <img src="{{asset('frontend/images/preview2.png')}}" class="avatar_tem" alt="">
                            <p class="student_name st_name_2"></p>
                            <p class="student_description st_description_2"></p>
                            <p class="student_birthday st_birthday_2"></p>
                            
                        </div>
                        <div id="complate_template3" class="box_preview_main  ">
                            <div class="box_avatar_tem3">
                                {{-- <img src="{{asset('frontend/images/shyn.jpg')}}" class="st_avatar_3 student_photo" alt=""> --}}
                                <img src="" class="st_avatar_2 student_photo" alt="">
                            </div>
                            <img src="{{asset('frontend/images/preview3.png')}}" class="avatar_tem" alt="">
                            <p class="student_name st_name_3"></p>
                            <p class="student_description st_description_3"></p>
                            <p class="student_birthday st_birthday_3"></p>
                        </div>
                        <div id="complate_template4" class="box_preview_main  hidden">
                            <img src="" class="st_avatar_1 student_photo" alt="">
                            <img src="{{asset('frontend/images/preview5.png')}}" class="avatar_tem" alt="">
                            <p class="student_name st_name_1"></p>
                            <p class="student_description st_description_1">
                        </div>
                    </div>
                    <div class="container_option_preview">
                        <h5 class="title_preview"><i>Chọn mẫu khung:</i></h5>
                        <div class="container_option_item d-flex justify-content-between">
                            <div class="box_item_preview">
                                <label for="tem1">
                                    <img src="{{asset('frontend/images/preview1.png')}}" alt="">
                                </label>
                                <input type="radio" class="hidden" name="template" checked value="1" id="tem1" onchange="showTemplate(1)">
                            </div>
                            <div class="box_item_preview">
                                <label for="tem2">
                                    <img src="{{asset('frontend/images/preview2.png')}}" alt="">
                                </label>
                                <input type="radio" class="hidden" name="template" value="2" id="tem2" onchange="showTemplate(2)">
                            </div>
                            <div class="box_item_preview">
                                <label for="tem3">
                                    <img src="{{asset('frontend/images/preview3.png')}}" alt="">
                                </label>
                                <input type="radio" class="hidden" name="template" value="3" id="tem3" onchange="showTemplate(3)">
                            </div>
                            <div class="box_item_preview">
                                <label for="tem4">
                                    <img src="{{asset('frontend/images/preview5.png')}}" alt="">
                                </label>
                                <input type="radio" class="hidden" name="template" value="4" id="tem4" onchange="showTemplate(4)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 container_form_input">
                <div class="form-row d-flex align-items-center">
                    <div class="icon_input">
                        <img src="{{asset('frontend/images/User.svg')}}" alt="">
                    </div>
                    <div class="input-data">
                        <input type="text" name="stu_name" id="stu_name" required>
                        <div class="underline"></div>
                        <label for="">Họ và tên</label>
                    </div>
                </div>
                <div class="form-row d-flex align-items-center">
                    <div class="icon_input">
                        <img src="{{asset('frontend/images/Icon.svg')}}" alt="">
                    </div>
                    <div class="input-data">
                        <input type="number" name="stu_phone" id="stu_phone" required>
                        <div class="underline"></div>
                        <label for="">Số điện thoại</label>
                    </div>
                </div>
                <div class="form-row d-flex align-items-center">
                    <div class="icon_input">
                        <img src="{{asset('frontend/images/Calendar.svg')}}" alt="">
                    </div>
                    <div class="input-data">
                        <input type="date" name="stu_birthday" id="stu_birthday" required>
                        <div class="underline"></div>
                        <label for="">Ngày sinh</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data textarea">
                        <textarea rows="15" cols="80" id="stu_description" name="stu_description" required></textarea>
                        <br />
                        <div class="underline"></div>
                        <label for="">Câu nói tâm đắc của phụ huynh</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <div class="file-input">
                        <input type="file" name=" stu_photo" class="file-input"  id="stu_photo" />
                    </div>
                    <div class="box_btn_submit">
                        <button type="submit" id="create_tem">Tạo ngay</button>
                    </div>
                </div>

    </form>
</section>