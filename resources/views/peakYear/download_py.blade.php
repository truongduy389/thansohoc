<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $custom = Session::get('customer_id');
        //var_dump($custom);
    ?>
    
        @foreach($customer as $value)
            <p>Họ và tên: {{ $value->customer_name }}</p>
            <p>Ngày sinh: {{ $date }}</p>
            
        @endforeach

   
                    <h4>Đỉnh 1 - Năm {{ $nampy }} ({{ $py }} tuổi)</h4>
                    @foreach($desc as $value)
                        <p>{{ $value->peakYear_desc }}</p>
                    @endforeach
                    <h4>Đỉnh 2 - Năm {{ $nampy2 }} ({{ $py2 }} tuổi)</h4>
                    @foreach($desc2 as $value)
                        <p>{{ $value->peakYear_desc }}</p>
                    @endforeach
                    <h4>Đỉnh 3 - Năm {{ $nampy3 }} ({{ $py3 }} tuổi)</h4>
                    @foreach($desc3 as $value)
                        <p>{{ $value->peakYear_desc }}</p>
                    @endforeach
                    <h4>Đỉnh 4 - Năm {{ $nampy4 }} ({{ $py4 }} tuổi)</h4>
                    @foreach($desc4 as $value)
                        <p>{{ $value->peakYear_desc }}</p>
                    @endforeach
</body>
</html>