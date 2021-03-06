<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thần số học</title>

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
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript">
        function callbackThen(response) {
            // read Promise object
            response.json().then(function(data) {
                console.log(data);
                if(data.success && data.score > 0.5) {
                    console.log('valid recpatcha');
                } else {
                    document.getElementById('tracuu_form').addEventListener('submit', function(event) {
                        event.preventDefault();
                        alert('recpatcha error');
                    });
                }
            });
        }
        
        function callbackCatch(error){
            console.error('Error:', error)
        }
        </script>
            
        {!! htmlScriptTagJsApi([
            'callback_then' => 'callbackThen',
            'callback_catch' => 'callbackCatch',
        ]) !!}
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
                            <a href="#">Trang chủ</a>
                            <a href="#">Kiến thức</a>
                            <a href="#">Về chúng tôi</a>
                        </div>
                    </div>
                    <div class="header-mobile-btn" onclick="showMNav()">
                        <img src="./public/asssets/image/reject.png" alt="">
                    </div>
                </div>
            </div>
            <div class="main__banner-content">
                <div class="container">
                    <div class="main__banner-quick-search">
                        <div class="p-3">
                            <h2 class="pt-3">KHÁM PHÁ BẢN THÂN THÔNG QUA</h2>
                            <h1 class="pt-3">THẦN SỐ HỌC</h1>
                            <a href="#form-tracuu"><button class="main-bg-color text-white">TRA CỨU NGAY</button></a>
                            
                        </div>
                    </div>
                    <div class="main__banner-special-link d-flex flex-wrap">
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
                                <p>Bạn là ai? Điều gì làm bạn thoả mãn?</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-3">
                            <div class="main__banner-special-link-item d-flex flex-column justify-content-center align-items-center p-3 text-center">
                                <img src="./public/asssets/image/mission.png" alt="">
                                <h2 class="py-3">Chỉ số sứ mệnh</h2>
                                <p>Tiết lộ bạn sinh ra để làm gì? Trở thành người như thế nào?</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-3">
                            <div class="main__banner-special-link-item d-flex flex-column justify-content-center align-items-center p-3 text-center">
                                <img src="./public/asssets/image/list.png" alt="">
                                <h2 class="py-3">+8 Chỉ số khác</h2>
                                <p>Truy cập để xem ngay - Hoàn toàn MIỄN PHÍ!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__content">
            <div class="container">
                <div class="main__content-quesion d-flex justify-content-between p-3 flex-wrap">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pe-5">
                        <h1 class="py-3">THẦN SỐ HỌC LÀ GÌ?</h1>
                        <p class="py-2">Thần số học hay còn gọi là Nhân số học là bộ môn nghiên cứu mối quan hệ giữa năng lượng rung động số và các con số.</p>
                        <p class="py-2">Được phát triển dựa trên 2 yếu tố: Ngày tháng năm sinh và họ tên khai sinh.</p>
                        <p class="py-2">“Nhân số học như một dạng đọc vị về số, giải mã những tín hiệu mà cuộc sống đã gửi đến kèm với từng cá thể con người trong đời sống này, tương tự như Nhân tướng học, hay Nhân trắc học…”</p>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <img src="./public/asssets/image/ahitcorp-thansohoc-gioi-thieu-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="main__content-form-answer py-10">
                <div class="main__content-form-answer-pa">
                    <div id="form-tracuu" class="container px-4 py-3 h-full d-flex flex-column justify-content-center">
                        <div class="text-center text-white">
                            <h2>
                                BẤT ĐẦU HÀNH TRÌNH KHÁM PHÁ BẢN THÂN <br> THÔNG QUA NHỮNG CON SỐ
                            </h2>
                            <p class="py-4">Chào mừng bạn đến với hành trình khám phá bản thân thông qua những con số. Mục tiêu của chúng tôi là hỗ trợ bạn trong hành trình nhận thức sâu sắc về bản ngã và trở nên tự tin hơn. Từ đó bạn có thể hiểu bản thân mình hơn và tạo ra hướng đi đúng đắn cho bản thân.</p>
                        </div>
                        <div class="main__content-form-answer-pa-box-items p-5">
                            <form id='tracuu_form' action="{{URL::to('/tra-cuu')}}" method="request">
                                {{csrf_field()}}
                            <label class="ps-1 pb-2" style="font-size:1rem;">Nhập đầy đủ Họ và Tên: </label>
                            <input type="text" name="name" id="field" placeholder="Điền họ và tên">
                            <label class="ps-1 pb-2" style="font-size:1rem;">Chọn ngày, tháng, năm sinh dương lịch: </label>
                            <input id="dob" type="date" id="start" name="date" min="1900-01-01" placeholder="Điền ngày tháng năm sinh">
                            <label class="ps-1 pb-2" style="font-size:1rem;">Chọn giới tính phù hợp: </label>
                            <select class="form-select" name="gender" aria-label="Default select example" placeholder="Điền họ và tên">
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                                <option value="2">Khác</option>
                            </select>
                            <p style="font-size: 12px; padding-top:10px;">Trang web này được bảo vệ bởi reCAPTCHA và Google
                                <a href="https://policies.google.com/privacy">Privacy Policy</a> and
                                <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
                            <div class="d-flex justify-content-center">
                                <input class=" mt-4 main-bg-color text-white hv-main"data-sitekey="your_site_key" data-callback='onSubmit' type="submit" value="Tra cứu miễn phí">
                            </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="main__content-quesion d-flex justify-content-between p-3 flex-wrap">
                    <div class="col-lg-6 d-flex justify-content-end">
                        <img src="./public/asssets/image/ahitcorp-thansohoc-gioi-thieu-2.jpg" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center px-5">
                        <h1 class="py-3">Ý NGHĨA CÁC CON SỐ <br>
                            TRONG THẦN SỐ HỌC</h1>
                        <p class="py-2 main-para-color">Sự thật là mỗi người trong chúng ta đều sở hữu cho mình một bản đồ số. Nó mô tả đa dạng về tính cách, giá trị cốt lõi, thế mạnh, điểm hạn chế, vận mệnh và con đường đời của mình.
                        </p>
                        <p class="py-2 main-para-color">
                            Khám phá hệ thống thần số học:
                        </p>
                        <ul class="main-para-color">
                            <li>Con số đường đời: Con số thể hiện những tính cách ẩn sâu trong bạn được tính qua ngày tháng năm sinh của bạn. Đây chính là con số chủ đạo của bạn trong Thần số học.</li>
                            <li>Chỉ số linh hồn: Chỉ số linh hồn là con số được thể hiện qua các cảm xúc, giác quan và khát vọng về nội tâm bên trong bạn…</li>
                            <li>Thần số học ứng dụng: Giúp bạn rèn luyện trực giác của bản thân tốt hơn. Từ đó có cái nhìn hiểu rõ hơn những người xung quanh mình.</li>
                            <li>Cách tính Thần Số Học: Dựa vào họ tên và ngày tháng năm sinh của bạn để có thể quy đổi ra các con số rồi cộng chúng lại với nhau. Từ đó ta có được con số chủ đạo của bạn….
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-grey-color my-10">
                <div class="container py-10">
                    <div class="main__content-quesion d-flex justify-content-between px-3 py-2 flex-wrap-reverse">
                        <div class="col-lg-6 d-flex flex-column justify-content-center pe-5">
                            <h1 class="py-3">TRA CỨU THẦN SỐ HỌC ONLINE - MIỄN PHÍ CÓ TIN ĐƯỢC KHÔNG?</h1>
                            <p class="py-2 main-para-color">Nguồn gốc của nó là trong các công thức toán học phức hợp và nó có cùng kết quả giống nhau khi xem trực tiếp và sử dụng công cụ online.
                            </p>
                            <p class="py-2 main-para-color">
                                Các chỉ số thần số học được tổng hợp từ ngày sinh, tên và sự bù trừ của tên và ngày sinh. Khi tra cứu thần số học online, bạn sẽ có được 1 bản đầy đủ và chi tiết các chỉ số, có những chỉ số dễ tính như số chủ đạo, linh hồn…
                            </p>
                            
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <img src="./public/asssets/image/ahitcorp-thansohoc-gioi-thieu-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__list-users-review">
                <div class="container text-center">
                    <h1>ĐÁNH GIÁ CỦA NGƯỜI XEM <br/> NHÂN SỐ HỌC ONLINE</h1>
                    <div class="main__list-users-review-box px-5 d-flex justify-content-center">
                        <div class="d-flex">
                            <div class="left img-routes d-flex align-items-center justify-content-end mpe">
                                <img id="left-button" src="./public/asssets/image/down-chevron.png" alt="" onclick="prevBtn()">
                            </div>
                            <div class="center d-flex justify-content-between" id="content">
                                <div id="card-review" class="internal col-md-4 col-sm-12">
                                        <div class="main__list-user-list-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="./public/asssets/image/ahitcorp-thansohoc-nhanxetkhachhang-1.png" alt="">
                                            <div class="px-3 w-full">
                                                <h3 class="bold py-3">Nguyễn Thanh Hải</h3>
                                                <p class="lh-0 main-para-color">Security</p>
                                                <p class="d-none">“Tôi thật sự bất ngờ với kết quả khi xem thần số học ở đây. Nó quá đúng với cảm nhận của tôi”</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="internal col-md-4 col-sm-12">
                                        <div class="main__list-user-list-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="./public/asssets/image/ahitcorp-thansohoc-nhanxetkhachhang-2.png" alt="">
                                            <div class="px-3 w-full">
                                                <h3 class="bold py-3">Nam Le Le</h3>
                                                <p class="lh-0 main-para-color">Security</p>
                                                <p class="d-none">“Kết quả cụ thể và chi tiết. Tôi nghĩ nó đúng với tính cách của tôi đấy chứ!”</p>
                                            </div>
                                    </div>
                                </div>
                                <div class="internal col-md-4 col-sm-12">
                                        <div class="main__list-user-list-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="./public/asssets/image/ahitcorp-thansohoc-nhanxetkhachhang-3.png" alt="">
                                            <div class="px-3 w-full">
                                                <h3 class="bold py-3">Phạm Thị Trà Mi</h3>
                                                <p class="lh-0">Security</p>
                                                <p class="d-none">Công nghệ ngày nay quá phát triển. Tôi không phải mất tiền cho mỗi lần muốn xem thần số học nữa rồi”</p>
                                            </div>
                                    </div>
                                </div>
                                <div class="internal col-md-4 col-sm-12">
                                        <div class="main__list-user-list-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="./public/asssets/image/ahitcorp-thansohoc-nhanxetkhachhang-4.png" alt="">
                                            <div class="px-3 w-full">
                                                <h3 class="bold py-3">Nguyễn Thanh Hải</h3>
                                                <p class="lh-0 main-para-color">Security</p>
                                                <p class="d-none">“Thần số học khá thú vị, nó thu hút tôi và khiến tôi tin tưởng hơn các thể loại bói toán khác”</p>
                                            </div>
                                    </div>
                                </div>
                                <div class="internal col-md-4 col-sm-12">
                                        <div class="main__list-user-list-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="./public/asssets/image/ahitcorp-thansohoc-nhanxetkhachhang-5.png" alt="">
                                            <div class="px-3 w-full">
                                                <h3 class="bold py-3">Nam Le Le</h3>
                                                <p class="lh-0 main-para-color">Security</p>
                                                <p class="d-none">“Tôi cảm thấy đúng 95% luôn đấy!”</p>
                                            </div>
                                        </div>
                                </div>
                             </div>
                            <div class="right img-routes d-flex align-items-center justify-content-start mps">
                                <img id="right-button" src="./public/asssets/image/down-chevron (1).png" alt="" onclick="nextBtn()">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="./public/asssets/image/icon2.png" alt="">
                    </div>
                    <div class="textReview px-5 mx-5">
                        <p id="textReview" class="main-para-color pt-3 px-5 mx-5">
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
                <p class="py-4">ahitcorp.com/thansohoc là một website tra cứu thần số học để khám phá bản thân thông qua những con số và chia sẻ những kiến thức hữu ích liên quan đến tính cách, con người của bạn. Qua đó, chúng tôi giúp bạn mở ra những khả năng mới, hỗ trợ bạn trên con đường hướng tới sự phát triển và định hướng đúng cho bản thân và tinh thần.</p>
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
            <p>Copyright ©2022 Thần số học. Developed by <a class="bold company-text-color" href="https://www.google.com/url?q=https://ahitcorp.net/&sa=D&source=docs&ust=1648634369692665&usg=AOvVaw3HMeW6ljXewbbOkl_OAfpl">AHIT Corporation</a> 

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script></script>
    <script src="{{ asset('./public/asssets/js/js.js') }}"></script>

    <!--- **************** -->

</body>
</html>