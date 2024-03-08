@extends('welcome')
@section('content')
    <section id="container_list_image">

        <div class="container container_menu">
            <div class="conn_form_search d-flex justify-content-between align-items-center flex-wrap">
                <p class="title_list_img ">DANH SÁCH HÌNH ẢNH <svg width="40" height="40" viewBox="0 0 40 40"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2003_223)">
                            <path
                                d="M18.3333 5V35H6.66667C6.22464 35 5.80072 34.8244 5.48816 34.5118C5.17559 34.1993 5 33.7754 5 33.3333V6.66667C5 6.22464 5.17559 5.80072 5.48816 5.48816C5.80072 5.17559 6.22464 5 6.66667 5H18.3333ZM35 21.6667V33.3333C35 33.7754 34.8244 34.1993 34.5118 34.5118C34.1993 34.8244 33.7754 35 33.3333 35H21.6667V21.6667H35ZM33.3333 5C33.7754 5 34.1993 5.17559 34.5118 5.48816C34.8244 5.80072 35 6.22464 35 6.66667V18.3333H21.6667V5H33.3333Z"
                                fill="#FFE600" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2003_223">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </p>
                <div>
                    <form class="form_search_data">
                        <div class="d-flex">
                            <input type="text" class="in_search_data form-control" name="search" value="{{ old('search') }}" placeholder="Search...">
                            <button type="submit" class="btn_search_data"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div> 
                    </form>
                </div>
            </div>
            <div class="box_list_image d-flex justify-content-between flex-wrap">
                @foreach ($data as $item)
                    <div class="box_image_item">
                        <a href="{{ URL::to('chi-tiet-anh/' . $item->stu_id) }}">
                            <img src="{{ asset($item->image_template) }}" alt="">
                        </a>
                        <div class="box_info_image">
                            <p>{{ $item->stu_name }}</p>
                            <p>500 Like</p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
