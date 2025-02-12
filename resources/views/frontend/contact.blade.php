@extends('layouts.site')
@section('title','Contact')
@section('content')
<div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">Liên lạc</h1>
                                <p class="mb-4">Biểu mẫu liên hệ hiện không hoạt động. Nhận biểu mẫu liên hệ hoạt động hiệu quả với Ajax & PHP trong vài phút. Chỉ cần sao chép và dán các tập tin, thêm một chút mã và bạn đã hoàn tất. <a href="https://htmlcodex.com/contact-form">Tải ngay</a>.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="h-100 rounded">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6915549836594!2d106.77485637451781!3d10.834899858113504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175270410c624d9%3A0xa40db03775823d3e!2zMi8xODEgVMSDbmcgTmjGoW4gUGjDuiwgVMSDbmcgTmjGoW4gUGjDuiBCLCBRdeG6rW4gOSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1715332194338!5m2!1svi!2s" 
                                width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <form action="" class="">
                                <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Tên của bạn">
                                <input type="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Nhập email của bạn">
                                <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10" placeholder="Tin nhắn của bạn"></textarea>
                                <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary " type="submit">Gửi</button>
                            </form>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Địa chỉ</h4>
                                    <p class="mb-2">182 Tăng Nhơn Phú, Phước Long A, Thủ Đức</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Gửi thư cho chúng tôi</h4>
                                    <p class="mb-2">Khanh@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Điện thoại</h4>
                                    <p class="mb-2">+0123 4567 8910</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('header')
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

@endsection