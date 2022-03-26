<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Index</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('./public/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/assets/css/dashboard.css') }}">
</head>
<body>
    <div class="main__body-admin">
        <div class="main__body-admin-nav d-flex flex-column justify-content-between col-lg-2">
            <div>
                <div class="d-flex p-3">
                    <i class="fa-solid fa-gear fz-30"></i>
                    <h1 class="ps-3">Admin</h1>
                </div>
                <div class="main__body-admin-nav-item main__nav-item-active mx-3">
                    <button class="ps-2 text-white"><a href="{{ URL::to('/dashboard') }}">Dashboard</a></button>
                </div>
                <div class="main__body-admin-nav-item mx-3 hv-specific">
                    <div class="d-flex">
                        <button class="ps-2 text-white" onclick="showMoreNav()">Management</button>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                    <div id="listManagement" style="display: none;">
                        <ul class="ps-4">
                            <li class="pt-3 active"><a href="{{ URL::to('/customer-list') }}">Danh sách khảo sát</a></li>
                            <li class="pt-3"><a href="{{ URL::to('/thansohoc-list') }}">Thần số học</a></li>
                            <li class="pt-3"><a href="{{ URL::to('/peakyear-list') }}">Peak year</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <div class="d-flex justify-content-between p-3">
                    <h2><?php 
                        $name = Session::get('admin_name');
                        echo $name;
                        $id = Session::get('admin_id');
                        
                    ?></h2>
                    <div class="log-out-btn">
                        <a href="{{URL::to('/logout')}}"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__body-admin-body d-flex flex-wrap col-lg-10">
            <div class="main__body-dashboard">
                <div class="col-md-12 p-4">
                    <div class="d-flex justify-content-between h-full">
                        <div class="col-md-5 pe-4">
                            <div class="main__body-dashboard-item p-5">
                                <h2>Tổng các khảo sát trong tháng</h2>
                                <div class="pt-3">
                                    <canvas id="myChart4"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-2">
                            <div class="main__body-dashboard-item p-5">
                                <h2>Tổng các khảo sát trong tuần</h2>
                                <div class="pt-3">
                                    <canvas id="myChart3"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ps-4">
                            <div class="main__body-dashboard-item p-5">
                                <h2>Giới tính</h2>
                                <div class="d-flex h-full w-full">
                                    <div class="col-lg-12 pt-3">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 px-4 pb-4">
                    <div class="d-flex justify-content-between h-full">
                        <div class="col-md-6 pe-4">
                            <div class="main__body-dashboard-item p-5">
                                <h2>Top 5 quốc gia khảo sát nhiều nhất</h2>
                                <div class="main__body-dashboard-item-nation pt-4">
                                    <div class="main__body-dashboard-item-nation-content">
                                        <canvas id="myChart2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ps-2">
                            <div class="main__body-dashboard-item p-5">
                                <h2>5 khảo sát gần nhất</h2>
                                <table class="table table-striped fz-16 mt-3">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px" class="text-blue bold" scope="col">ID</th>
                                            <th scope="col">Họ và tên</th>
                                            <th scope="col">Giới tính</th>
                                            <th scope="col">Số chủ đạo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fwn">
                                        @foreach($customer as $value)
                                        <tr>
                                            <th style="width: 50px" scope="row">{{ $value->customer_id }}</th>
                                            <td>{{ $value->customer_name }}</td>
                                            <td class="sexAccest">
                                                <?php
                                                    if($value['customer_gender']==1){
                                                    echo "Nam";
                                                }else{
                                                    echo "Nữ";
                                                }
                                                ?>
                                            </td>
                                            <td>{{ $value->customer_sochudao}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('./public/assets/js/chart-js.js') }}"></script>

    <!-- My JS -->
    <script src="{{ asset('./public/assets/js/admin.js') }}"></script>
</body>
</html>