<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thần số học</title>

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
    <link rel="stylesheet" href="{{ asset('./public/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/assets/css/dashboard.css') }}">
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
              <i class="fa-solid fa-right-from-bracket"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="main__body-admin-body d-flex flex-wrap col-lg-10 p-3">
        <div class="main__managerment-index p-3">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Danh sách các thần số học</h1>
                <button class="btn btn-primary"><a class="text-white" href="{{ URL::to('/add-thanso') }}">Thêm thần số học</a></button>
            </div>
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
            <div class="main__body-admin-body-right-list mt-3">
                <table class="table fz-16">
                    <thead>
                        <tr class="bold">
                            <th style="width: 50px" class="text-blue" scope="col">STT</th>
                            <th scope="col">Tên thần số</th>
                            <th scope="col">Nội dung thần số</th>

                        </tr>
                    </thead>
                    <tbody class="fwn">
                      @foreach($thansohoc as $value)
                        <tr>
                            <td style="width: 50px" scope="row">{{ $value->sochudao_id}}</td>
                            <td>{{ $value->sochudao_name}}</td>
                            <td class="text-hidden-away py-0">{{ $value->sochudao_desc}}</td>
                            <td td class="text-end text-blue">
                              <a href="{{ URL::to('/manager-edit/'.$value['sochudao_id']) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                              <a href="{{ URL::to('/delete/'.$value['sochudao_id']) }}"><i class="fa-solid fa-xmark"></i></a>
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
    <script src="{{ asset('./public/assets/js/chart-js.js') }}"></script>

    <!-- My JS -->
    <script src="{{ asset('./public/assets/js/admin.js') }}"></script>
  </body>
</html>
