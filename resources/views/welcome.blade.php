<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Novateen - Cùng con kiến tạo tương lai">
    <meta name="keywords" content="Novateen" />
    <link rel="canonical" href="http://127.0.0.1:8000/" />
    <meta property="og:image" content="{!! $meta_seo['img'] !!}" />
    <meta property="og:site_name" content="thiatv.com" />
    <meta property="og:description" content="{{ str_replace('"', '', $meta_seo['description']) }}" />
    <meta property="og:title" content="{{ str_replace('"', '', $meta_seo['title']) }}" />
    <meta property="og:url" content="{!! $meta_seo['url'] !!}" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="{!! $meta_seo['url'] !!}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <title>{!! $meta_seo['title'] !!}</title>
</head>

<body>
    <div id="container_body">
        @include('frontend.common.header')
        @yield('content')
        @include('frontend.common.footer')




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v19.0"
        nonce="HJbgQfUA"></script>

</body>

</html>
