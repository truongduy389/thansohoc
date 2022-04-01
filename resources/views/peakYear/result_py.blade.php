<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peak Year - Result</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">

</head>
<body>
    <?php $cus=Session::get('customer_id');
                        //var_dump($cus);
                   ?>
    <div id="header">
        <div id="header">
            <div class="container header__container p-3">
                <div class="d-flex justify-content-between">
                    <div class="col-md-6 d-flex align-items-center">
                        <h1 class="text-main-color"><a href="{{ URL::to('/trangchu') }}">Tra cứu thần số học</a></h1>
                    </div>
                    <div class="header__container-nav d-flex justify-content-end align-items-center col-md-6">
                        <a class="pe-4" href="{{ URL::to('/trangchu') }}">Trang chủ</a>
                        <div class="pe-4">
                            <div class="dropdown">
                                <a class="dropbtn">Kiến thức <span><i class="fa-solid fa-caret-down"></i></span></a>
                                <div class="dropdown-content pt-3">
                                  <a href="#">Thần số học số 1</a>
                                  <a href="#">Thần số học số 2</a>
                                  <a href="#">Thần số học số 3</a>
                                  <a href="#">Thần số học số 4</a>
                                  <a href="#">Thần số học số 5</a>
                                  <a href="#">Thần số học số 6</a>
                                  <a href="#">Thần số học số 7</a>
                                  <a href="#">Thần số học số 8</a>
                                  <a href="#">Thần số học số 9</a>
                                  <a href="#">Thần số học số 10</a>
                                  <a href="#">Thần số học số 11</a>
                                </div>
                              </div>
                        </div>
                        <a class="pe-4" href="#">Về chúng tôi</a>
                        <a href="#">Đăng nhập</a>
                    </div>
                    <div class="mobile-menu d-flex align-items-center justify-content-center">
                        <img src="/assets/img/menu.png" alt="" onclick="showMNav()">
                    </div>
                </div>
            </div>
            <div id="mNav" class="mobile-menu-items p-3">
                <div class="text-center d-flex flex-column">
                    <a href="#">Trang chủ</a>
                    <div>
                        <div class="dropdown">
                            <a class="dropbtn">Kiến thức <span><i class="fa-solid fa-caret-down"></i></span></a>
                            <div class="dropdown-content pt-3">
                              <a href="#">Thần số học số 1</a>
                              <a href="#">Thần số học số 2</a>
                              <a href="#">Thần số học số 3</a>
                              <a href="#">Thần số học số 4</a>
                              <a href="#">Thần số học số 5</a>
                              <a href="#">Thần số học số 6</a>
                              <a href="#">Thần số học số 7</a>
                              <a href="#">Thần số học số 8</a>
                              <a href="#">Thần số học số 9</a>
                              <a href="#">Thần số học số 10</a>
                              <a href="#">Thần số học số 11</a>
                            </div>
                          </div>
                    </div>
                    <a href="#">Về chúng tôi</a>
                    <a href="#">Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>
    <div id="main">
        <div class="main__result pb-5">
            <div class="container p-3 py-5 d-flex">
                <div class="main__result-box d-flex flex-column align-items-center">
                    @foreach($customer as $value)
                    <h2 data-aos="fade-up">HỌ VÀ TÊN: <span>{{ $value->customer_name }}</span></h2>
                    <h2 data-aos="fade-up" data-aos-delay="500">NGÀY SINH: <span>{{ $date1 }}</span> </h2>
                    @endforeach
                    <h3 class="mt-5" data-aos="fade-up" data-aos-delay="1000">THÁP PEAK YEAR</h3>
                    <div data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="500"  class="mt-2 d-flex flex-column align-items-center justify-content-center w-main">
                        <div class="peak-year-tower">
                            <div class="peak-year-tower-out-side d-flex flex-column align-items-center justify-content-center">
                                <h5 class="text-age">{{ $py4 }}</h5>
                                <div class="d-flex">
                                    <div class="peak-year-tower-out-side-left"></div>
                                    <div class="peak-year-tower-out-side-right"></div>
                                </div>
                                <div class="peak-year-tower-absolute">
                                    <div class="d-flex flex-column align-items-center">
                                        <h5 class="text-age">{{ $py3 }}</h5>
                                        <div class="d-flex">
                                            <div class="peak-year-tower-middle-side-left">
                                            </div>
                                            <div class="peak-year-tower-middle-side-right"></div>
                                        </div>
                                        <div class="d-flex justify-content-between w-full">
                                            <h5 id="shortenedMonth" class="m-negative-l-20 m-negative-t-44">{{ $tongThang }}</h5>
                                            <h5 id="shortenedYear" class="m-negative-r-20 m-negative-t-44">{{ $tongnam }}</h5>
                                        </div>
                                    </div>
                                    <div class="peak-year-tower-absolute-children mt-3">
                                        <div class="d-flex justify-content-between align-items-center mt-5">
                                            <div class="peak-year-tower-in-side-left m-negative-l-16 m-negative-t-26"></div>
                                            <div class="peak-year-tower-in-side-right m-negative-r-16 m-negative-t-26"></div>
                                        </div>
                                        <h5 id="shortenedDay" class="text-center m-negative-t-100">{{ $tongngay }}</h5>
                                    </div>
                                    <div class="peak-year-tower-absolute-children-content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="ms-custom mt-negative-custom text-age">{{ $py }}</h5>
                                            <h5 class="me-custom mt-negative-custom text-age">{{ $py2 }}</h5>
                                        </div>
                                    </div>
                                    <div class="peak-year-tower-absolute-children-content-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 id="shortenedDayAndMonth" class="ms-custom-1 mt-negative-custom-1">{{ $tonggoc1 }}</h5>
                                            <h5 id="shortenedDayAndYear" class="me-custom-1 mt-negative-custom-1">{{ $tonggoc2 }}</h5>
                                        </div>
                                    </div>
                                    <h5 id="shortenedMiddle" class="text-center mt-negative-custom-2 text-main-color">{{ $tonggoc3 }}</h5>
                                    <h5 id="shortenedTop" class="text-center mt-negative-custom-3 text-main-color">{{ $tonggoc4 }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="mt-negative-custom-4 d-flex justify-content-between text-center">
                                <div class="col-sm-4">
                                    <p>Tháng rút gọn</p>
                                </div>
                                <div class="col-sm-4 ps-2">
                                    <p>Ngày rút gọn</p>
                                </div>
                                <div class="col-sm-4 ps-2">
                                    <p>Năm rút gọn</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="mt-negative-custom-5 d-flex justify-content-between bold">
                                <div class="col-sm-6 text-left">
                                    <p class="text-year">{{ $nampy }}</p>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <p class="text-year">{{ $nampy2 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="mt-negative-custom-6 d-flex justify-content-between bold">
                                <div class="col-sm-12 text-right">
                                    <p class="text-year">{{ $nampy3 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="mt-negative-custom-7 d-flex justify-content-between bold me-5">
                                <div class="col-sm-12 text-left ms-5">
                                    <p class="text-year ms-4">{{ $nampy4 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="main__result-box mt-4" data-aos="zoom-in-right">
                    <h4>Đỉnh 1 - Năm {{ $nampy }} ({{ $py }} tuổi)</h4>
                    @foreach($desc as $value)
                        <p>{{ $value->peakYear_desc }}</p>
                    @endforeach
                </div>
                <div class="main__result-box mt-4" data-aos="zoom-in-right">
                    <h4>Đỉnh 2 - Năm {{ $nampy2 }} ({{ $py2 }} tuổi)</h4>
                    @foreach($desc2 as $value)
                        <p>{{ $value->peakYear_desc }}</p>
                    @endforeach
                </div>
                <div class="main__result-box mt-4" data-aos="zoom-in-right">
                    <h4>Đỉnh 3 - Năm {{ $nampy3 }} ({{ $py3 }} tuổi)</h4>
                    @foreach($desc3 as $value)
                        <p>{{ $value->peakYear_desc }}</p>
                    @endforeach
                </div>
                <div class="main__result-box mt-4" data-aos="zoom-in-right">
                    <h4>Đỉnh 4 - Năm {{ $nampy4 }} ({{ $py4 }} tuổi)</h4>
                    @foreach($desc4 as $value)
                        <p>{{ $value->peakYear_desc }}</p>
                    @endforeach
                </div>
                <div class="main__result-box mt-4 d-flex flex-column align-items-center" data-aos="zoom-in-left">
                    {{-- <h4>XEM THÊM CÁC CỘT MÓC QUAN TRỌNG CỦA BẠN VỚI PEAK YEAR</h4> --}}
                   <a href="https://www.facebook.com/thetatsuyastore/">Trang FACEBOOK của chúng tôi.</a>
                   <a target="_blank" class="text-white hv-purple"href="{{ URL::to('/download-pdf/'.Session::get('customer_id')) }}"><button class="hv-purple">Export PDF</button></a>
                    
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container d-flex flex-wrap">
            <div class="col-lg-6 col-sm-12 py-4">
                <h4>THẦN SỐ HỌC VIỆT NAM</h4>
                <p class="pt-2 pe-5 text-white">Công cụ tra cứu thần số học Online của Thần Số Học Việt Nam cứu theo chính xác ngày tháng năm sinh và tên của bạn. Chúng tôi cung cấp hoàn toàn miễn phí và sẽ luôn là như vậy!</p>
                <div class="social-media mt-3 d-flex">
                    <img src="{{ asset ('public/assets/img/icon-fb.png') }}" alt="">
                    <img src="{{ asset ('public/assets/img/telegram.png') }}" alt="">
                    <img src="{{ asset ('public/assets/img/twitter.png') }}" alt="">
                    <img src="{{ asset ('public/assets/img/youtube.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 py-4">
                <H4>CHÍNH SÁCH VÀ ĐIỀU KHOẢN CỦA XEMBOI.COM</H4>
                <div class="d-flex flex-column pt-2">
                    <a href="#">Chính sách bảo mật</a>
                    <a href="#">Điều khoản sử dụng</a>
                    <a href="#">Về chúng tôi</a>
                    <a href="#">Kiến thức</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- JavaScript -->
</body>
</html>