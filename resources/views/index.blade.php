<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Tra cứu thần số học, nhân số học Pitago online tại Thần Số Việt Nam bạn sẽ có được kết quả chính xác và miễn phí về các con số chủ đạo....">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="than so, thần số, than so hoc, thần số học, xem boi, xem bói, thần số học việt nam"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('./public/asssets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/asssets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/asssets/css/responsive.css') }}">

</head>
<body>
    <div id="header" class="header">
        <div class="container header-pc">
            <div class="header__navbar d-flex justify-content-between p-3">
                <div class="col-md-4">
                    <h1><a href="{{ URL::to('/trangchu') }}">TRA CỨU THẦN SỐ HỌC</a></h1>
                </div>
                <div class="col-md-8 d-flex justify-content-end text-center">
                    <a href="#">Trang chủ</a>
                    <a href="#">Kiến thức</a>
                    <a href="#">Về chúng tôi</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile-btn" onclick="showMNav()">
        <img id="btn-mMenu" src="./public/asssets/image/menu.png" alt="">
    </div>
    <div id="main" class="main">
        <div class="main__banner">
            <div id="mNav" class="header-mobile p-3" style="display: none;">
                <div class="container header__container p-3">
                    <div class="d-flex justify-content-between">
                        <div class="header__container-nav d-flex flex-column">
                            <a href="{{ URL::to('/trangchu') }}">Trang chủ</a>
                            <a href="#">Kiến thức</a>
                            <a href="#">Về chúng tôi</a>
                        </div>
                    </div>
                    <div class="header-mobile-btn" onclick="showMNav()">
                        <img src="./asssets/image/reject.png" alt="">
                    </div>
                </div>
            </div>
            <div class="main__banner-content">
                <div class="container">
                    <div class="main__banner-quick-search">
                        <div class="p-3">
                            <h2>KHÁM PHÁ BẢN THÂN THÔNG QUA</h2>
                            <h1 class="pt-3">THẦN SỐ HỌC</h1>
                            <button>TRA CỨU NGAY</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__content">
            <div class="container">
                <div class="main__banner-special-link d-flex flex-wrap" style="margin-top:100px; margin-bottom:90px">
                    <div class="col-lg-3 col-md-6 p-3">
                        <div class="main__banner-special-link-item d-flex flex-column justify-content-center align-items-center p-3 text-center">
                            <img src="./public/asssets/image/stop-watch.png" alt="">
                            <h2 class="py-3">Con số chủ đạo</h2>
                            <p>Đây là con số quan trọng nhất của thần số học.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-3">
                        <div class="main__banner-special-link-item d-flex flex-column justify-content-center align-items-center p-3 text-center">
                            <img src="./public/asssets/image/user.png" alt="">
                            <h2 class="py-3">Chỉ số linh hồn</h2>
                            <p>Bạn là ai? Điều gì làm bạn thoản mãn?</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-3">
                        <div class="main__banner-special-link-item d-flex flex-column justify-content-center align-items-center p-3 text-center">
                            <img src="./public/asssets/image/mission.png" alt="">
                            <h2 class="py-3">Chỉ số sứ mệnh</h2>
                            <p>Cách bạn và con đường bạn thực hiện chỉ số đường đời như thế nào?</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-3">
                        <div class="main__banner-special-link-item d-flex flex-column justify-content-center align-items-center p-3 text-center">
                            <img src="./public/asssets/image/list.png" alt="">
                            <h2 class="py-3">+8 Chỉ số khác</h2>
                            <p>Hoàn toàn MIỄN PHÍ và luôn như vậy!</p>
                        </div>
                    </div>
                </div>
                <div class="main__content-quesion d-flex justify-content-between p-3 flex-wrap">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pe-5">
                        <h1 class="py-3">THẦN SỐ HỌC LÀ GÌ?</h1>
                        <p class="py-3">Thần số học hay còn gọi là Nhân số học là bộ môn nghiên cứu mối quan hệ giữa năng lượng rung động số và các con số. 
                            <br/>Được phát triển dựa trên 2 yếu tố: Ngày tháng năm sinh và họ tên khai sinh.
                        </p>
                        <p class="py-3">
                            “Nhân số học như một dạng đọc vị về số, giải mã những tín hiệu mà cuộc sống đã gửi đến kèm với từng cá thể con người trong đời sống này, tương tự như Nhân tướng học, hay Nhân trắc học…” 
                        </p>
                        <a class="main-text-color pb-5" href="#">Lê Đỗ Quỳnh Hương</a>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <img src="./public/asssets/image/anhgioithieu(3).jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="main__content-form-answer">
                <div class="main__content-form-answer-pa">
                    <div class="container p-4 h-full d-flex flex-column justify-content-center">
                        <div class="text-center text-white">
                            <h2 style="margin-top:80px;">BẮT ĐẦU QUÁ TRÌNH BẢN THÂN <br/> THÔNG QUA NHỮNG CON SỐ</h2>
                            <p class="py-4" style="margin-bottom:10px;">Chào mừng bạn đến với hành trình khám phá bản thân thông qua những con số. Mục tiêu của chúng tôi là hỗ trợ bạn trong hành trình nhận thức <br/> sâu sắc về bản ngã trở nên tự tin hơn. Từ đó bạn có thể hiểu bản thân mình hơn và tạo ra hướng đi đúng đắn cho bản thân</p>
                        </div>
                        <div class="  main__content-form-answer-pa-box px-5 pt-4 mx-5">
                            <div class="main__content-form-answer-pa-box-items p-5" style="margin-bottom:90px;">
                                <form action="{{URL::to('/tra-cuu')}}" method="request">
                                    {{csrf_field()}}
                                    @foreach($errors->all() as $error)
                                    {{ $error }}
                                    @endforeach
                                <input type="text" name="name" id="" placeholder="Họ và tên">
                                <input id="dob" type="date" id="start" name="date" min="1900-01-01">
                                <select class="form-select" name="gender" aria-label="Default select example">
                                    <option  value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                    <option value="2">Khác</option>
                                </select>
                                <div class="d-flex justify-content-center">
                                    <input class="mt-4 main-bg-color text-white hv-main" type="submit" value="Tra cứu miễn phí">
                                </div>
                                <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                        <br/>
                        @if($errors->has('g-recaptcha-response'))
                        <span class="invalid-feedback" style="display:block">
                            <strong>{{$errors->first('g-recaptcha-response')}}</strong>
                        </span>
                        @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="main__content-quesion d-flex justify-content-between p-3 flex-wrap">
                    <div class="col-lg-6 d-flex justify-content-end">
                        <img src="./public/asssets/image/anhgioithieu(1).jpg" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center px-5">
                        <h1 class="py-3">CÁC CON SỐ TRONG THẦN <br/> SỐ HỌC CÓ Ý NGHĨA GÌ?</h1>
                        <p class="py-3 main-para-color">Sự thật người trong chúng ta đều sở hữu cho mình một bản đồ số. <br/>
                                        Nó mô tả đang dạng về tính cách, giá trị cốt lõi, thế mạnh điểm hạn chế, vận mệnh và con đường đời của mình.
                                        <br/> Khám phá hệ thống thần số học:
                        </p>
                        <ul class="main-para-color">
                            <li>Con số đường đời: Con số thể hiện những tính cách âu sầu trong bạn được tính qua ngày tháng năm sinh của bạn. Đây chính là con số chủ đạo của bạn trong Thần số học.</li>
                            <li>Chỉ số linh hồn: Chỉ số linh hồn là con số được thể hiện qua các cảm xúc, giác quan và khát vọng về nội tâm bên trong bạn...</li>
                            <li>Thần số học ứng dụng: Giúp bạn rèn luyện trực giác của thân thân tốt hơn. Từ đó cái nhìn hiểu rõ hơn những người xung quanh mình.</li>
                            <li>Cách tính Thần số học: Dựa vào họ tên và ngày tháng năm sinh của bạn để có thể quy đổi ra các con số rồi cộng chúng lại với nhau. Từ đó ta có được con số chủ đạo của bạn...</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-grey-color my-10">
                <div class="container">
                    <div class="main__content-quesion d-flex justify-content-between px-3 py-5 flex-wrap-reverse">
                            <div class="col-lg-6 d-flex flex-column justify-content-center pe-5">
                                <h1 class="py-3">TRA CỨU THẦN SỐ HỌC ONLINE - MIỄN PHÍ CÓ TIN ĐƯỢC KHÔNG?</h1>
                                <p class="py-3 main-para-color">
                                    Tra cứu thần số học khác với các loại bói toán tâm linh khác. Nguồn gốc của nó là trong các công thức toán học phức hợp và nó có cùng kết quả giống nhau khi xem trực tiếp va sử dụng công cụ Online.
                                </p>
                                <p class="py-3 main-para-color">
                                    Các chỉ số thần số học được tổng hợp từ ngày sinh. Khi tra cứu thần số học Online, bạn sẽ có được 1 bản đầy đủ và chi tiết các chỉ số, có những chỉ số dễ tính như số chủ đạom, linh hồn.
                                </p>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end" style="margin:70px 0; ">
                                <img src="./public/asssets/image/anhgioithieu(2).jpg" alt="">
                            </div>
                    </div>
                </div>
            </div>
            <div class="main__list-users-review">
                <div class="container text-center">
                    <h1>ĐÁNH GIÁ CỦA NGƯỜI XEM <br/> NHÂN SỐ HỌC ONLINE</h1>
                    <div class="main__list-users-review-box px-5">
                        <div class="main__list-users-review-round d-flex justify-content-between align-items-center px-5">
                            <img class="bg-blur" src="/asssets/image/down-chevron.png" alt="">
                            <img src="./public/asssets/image/down-chevron (1).png" alt="">
                        </div>
                        <div class="main__list-user-review-box-scroll px-3">
                            <div class="main__list-user-list-items">
                                <div class="col-sm-4 disabled-cart">
                                    <div class="main__list-user-list-item d-flex flex-column align-items-center justify-content-between">
                                        <img src="./public/asssets/image/khachhang(2).png" alt="">
                                        <div>
                                            <h3 class="bold py-3">Nguyễn Thanh Hải</h3>
                                            <p class="lh-0 main-para-color">Security</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="main__list-user-list-item d-flex flex-column align-items-center justify-content-between">
                                        <img src="./public/asssets/image/khachhang(1).png" alt="">
                                        <div>
                                            <h3 class="bold py-3 main-text-color">Nam Le Le</h3>
                                            <p class="lh-0 main-para-color">Security</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 disabled-cart">
                                    <div class="main__list-user-list-item d-flex flex-column align-items-center justify-content-between">
                                        <img src="./public/asssets/image/khachhang(3).png" alt="">
                                        <div>
                                            <h3 class="bold py-3">Pham Thị Trà Mi</h3>
                                            <p class="lh-0">Security</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <img src="./public/asssets/image/icon2.png" alt="">
                        </div>
                        <p class="main-para-color pt-3 px-4">"Tôi thật sự bất ngờ với kết quả khi xem thần số học ở đây. 
                            <br/> Nó quá đúng với cảm nhận của tôi"
                            <!-- This is review of center person in sceen -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="footer">
        <div class="container p-3">
            <div class="footer__main-content">
                <h1>THẦN SỐ HỌC VIỆT NAM</h1>
                <p class="py-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="footer__social-icons d-flex justify-content-center">
                    <div class="footer__social-icon">
                        <i class="fa-brands fa-facebook-f"></i>
                    </div>
                    <div class="footer__social-icon mx-3">
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                    <div class="footer__social-icon">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
                <hr>
            </div>
            <p>Copyright &#169 2022 Thần Số Học Việt Nam. Develop by AHIT Comporation, Inc.</p>
        </div>
    </div>


    <!--- **************** -->

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="./asssets/js/js.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--- **************** -->

</body>
</html>