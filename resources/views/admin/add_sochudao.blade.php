<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Thần số</title>

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
        <div class="main__body-admin-body d-flex flex-wrap col-lg-10">
       
            <div class="col-lg-5 p-3">
                 <form action="{{ URL::to('/save-thanso') }}" method="post">
                {{ csrf_field() }}
                <div class="main__body-admin-body-left p-3">
                    <h1>Thêm Thần số</h1>
                    
                    <h5 class="pt-3 ps-1 py-2">Tên Thần số</h5>
                    <input type="text" class="form-control" name="name_so" placeholder="Thần số">
                    <h5 class="pt-3 ps-1 py-2">Nội dung Thần số</h5>
                    <textarea class="form-control" placeholder=""name="desc_so" id="" cols="30" rows="10"></textarea>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary">Thêm</button>   
                        <button class="btn btn-secondary text-white"><a class="text-white"href="{{URL::to('/dashboard')}}">Hủy</a></button>   
                    </div>
                    
                </div>
                </form>
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

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('./public/assets/js/chart-js.js') }}"></script>

    <!-- My JS -->
    <script src="{{ asset('./public/assets/js/admin.js') }}"></script>
</body>
</html>