<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Managerment - Index</title>

    <!-- Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
    />

    <!-- Boostrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('./public/assets_admin/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/assets_admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/assets_admin/css/dashboard.css') }}">
  </head>
  <body>
    <div class="main__body-admin">
      <div
        class="main__body-admin-nav d-flex flex-column justify-content-between col-lg-2"
      >
        <div>
          <div class="d-flex p-3">
            <i class="fa-solid fa-gear fz-30"></i>
            <h1 class="ps-3">Admin</h1>
          </div>
          <div class="main__body-admin-nav-item mx-3 hv-specific">
            <button class="ps-2 text-white"><a href="{{ URL::to('/dashboard') }}">Dashboard</a></button>
          </div>
          <div class="main__body-admin-nav-item main__nav-item-active mx-3">
            <div class="d-flex">
              <button class="ps-2" onclick="showMoreNav()">Management</button>
              <i class="fa-solid fa-caret-down"></i>
            </div>
            <div id="listManagement" style="display: none">
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
      <div class="main__body-admin-body d-flex flex-wrap col-lg-10 p-3">
        <div class="main__managerment-index p-3">
          <h1>Danh sách tra cứu</h1>
          <p class="mt-3">
            <?php
            $message = Session::get('message');
            if($message){
                ?>
                   <h3 style="color:green;">{{ $message }}</h3>
                   <?php
                Session::put('message'.null);
            }
            ?>
        </p>
          <div class="main__body-admin-sum-answer-content-list mt-3">
            <table class="table table-striped fz-16">
              <thead>
                <tr>
                  <th style="width: 50px" class="text-blue" scope="col">ID</th>
                  <th scope="col">Họ và tên</th>
                  <th scope="col">Số điện thoại</th>
                  <th scope="col">Email</th>
                  <th class="text-center" scope="col">Ngày sinh</th>
                  <th class="text-center" scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="fwn">
                @foreach($customer as $value)
                <tr>
                  <th style="width: 50px" scope="row">{{ $value->customer_id }}</th>
                  <td>{{ $value->customer_name }}</td>
                  <td>0{{ $value->customer_phone }}</td>
                  <td>{{ $value->customer_email }}</td>
                  <td class="text-center">
                    <?php 
                    $date = $value->customer_date;
                    $date=strtotime($date);
                    $date=date('d/m/Y',$date);
                    echo $date;
                    ?>
                  </td>
                  <td class="text-end text-blue">
                    <a href="{{ URL::to('/delete-customer/'.$value['customer_id']) }}"><i class="fa-solid fa-xmark"></i></a>
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Boostrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('./public/assets_admin/chart-js.js') }}"></script>

    <!-- My JS -->
    <script src="{{ asset('./public/assets_admin/js/admin.js') }}"></script>
</html>
