<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;

use App\Http\Requests;
use Carbon\Carbon;
use PDF;
use App\Models\CustomerModel;
use App\Models\SochudaoModel;
use App\Models\PeakYearModel;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function getindex(){

        return view('index');
    }
    public function search(Request $request){
        $data=array();
        $data['customer_name']=$request->name;
        $data['customer_date']=$request->date;
        $data['customer_email']='0';
        $data['customer_phone']=0;
        $data['customer_gender']=$request->gender;
        $data['create_at']= Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        if($data['customer_date']){
            $date= $data['customer_date'];

            $str= explode('-', $date);
            $a = implode('',$str);
            $b = str_split($a);

            
            $tong = 0;
            for($i =0 ; $i< count($b);$i++){
                $tong += $b[$i];
                if($tong > 11){
                    $c = str_split($tong);
                    $tong1 = 0;
                    for($j =0 ; $j< count($c);$j++){
                        $tong1 += $c[$j];
                    }
                }
            }
            if($tong > 11){
                $data['customer_sochudao'] = $tong1;
                
            }else{
                $data['customer_sochudao'] = $tong;
            }
        }else{
            echo "Ban chua nhap ngay thang nam sinh.";
        }
        
        $customer = CustomerModel::where('customer_name','=',$data['customer_name'])->get();
        foreach($customer as $value){
            $cus_id = $value->customer_id;
        }
        $customer_id = CustomerModel::insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_date',$data['customer_date']);
        Session::put('customer_name',$data['customer_name']);

        $ten = $request->name;
        $date = $request->date;
        $date=strtotime($date);
        $date=date('d/m/Y',$date); 
        $so = $data['customer_sochudao'];
        //$customer = CustomerModel::select('customer_id')->where('customer_name',$ten)->get();
        
        
        // var_dump($ten);
        // var_dump($date);
        $desc=SochudaoModel::select('sochudao_desc')->where('sochudao_id',$so)->get();

        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $IP = $_SERVER['HTTP_CLIENT_IP'];
        }else if(!empty( $_SERVER['HTTP_X_FORWARDED_FOR'])){
            $IP=$IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $IP = $_SERVER["REMOTE_ADDR"];
        }
        $ip = $IP;
        
        return view('pages.result')->with(compact('ten','date','so','desc','ip'));
    }
    public function peak_year($idCus){
        $customer = CustomerModel::where('customer_id',$idCus)->get();
        Session::put('customer_id',$customer);

        
        return view('peakYear.input_py')->with(compact('customer'));
    }

    public function download($customer_id){
        $customer=CustomerModel::where('customer_id',$customer_id)->get();
        foreach($customer as $value){
            $ngaythangnam = $value->customer_date;
            $date=strtotime($ngaythangnam);
            $date=date('d/m/Y',$date);

            $sochudao = $value->customer_sochudao;

            $py = 36 - $sochudao;
            
            $py2 = 9 + $py;
            
            $py3 = 9 + $py2;
            
            $py4 = 9 + $py3;
        }
        $str = explode("-",$ngaythangnam);

        $nam = $str[0];
	    $thang = $str[1];
	    $ngay = $str[2];
        
        $nampy = $str[0] + $py;
            
        $nampy2 = 9 + $nampy;
            
        $nampy3 = 9 + $nampy2;
            
        $nampy4 = 9 + $nampy3;

        $lengthNam = str_split($nam);
        $lengthThang = str_split($thang);
        $lengthNgay = str_split($ngay);
        
        //Thang rut gon
        $tongThang = 0;
        for($i=0;$i<count($lengthThang);$i++){
            $tongThang += $lengthThang[$i];
        }

        //Ngay rut gon
        $tongNgay = 0;
        for($i=0;$i<count($lengthNgay);$i++){
            $tongNgay += $lengthNgay[$i];
            if($tongNgay > 9){
                $c = str_split($tongNgay);
                $tongNgay1 = 0;
                for($j =0 ; $j< count($c);$j++){
                    $tongNgay1 += $c[$j];
                }
            }
        }
        if($tongNgay > 9){
            $tongngay=$tongNgay1;
        }else{
            $tongngay=$tongNgay;
        }

        //Nam rut gon
        $tongNam = 0;
        for($i=0;$i<count($lengthNam);$i++){
            $tongNam += $lengthNam[$i];
            if($tongNam > 9){
                $c = str_split($tongNam);
                $tongNam1 = 0;
                for($j =0 ; $j< count($c);$j++){
                    $tongNam1 += $c[$j];
                    if($tongNam1 > 9){
                        $v = str_split($tongNam1);
                        $tongNam2=0;
                        for($m = 0 ; $m <count($v);$m++){
                            $tongNam2 += $v[$m];
                        }
                    }
                }
            }
        }
        
        if($tongNam >= 10 && $tongNam1 >= 10){
            $tongnam=$tongNam2;
        }else if($tongNam >= 10 && $tongNam1 <10){
             $tongnam=$tongNam1;
        }else if($tongNam <= 10){
             $tongnam=$tongNam;
        }

        //Goc 1 
        if($tongNgay > 9){
            $Goc1 = $tongThang + $tongNgay1;
        }else{
            $Goc1 = $tongThang + $tongNgay;
        }
        if($Goc1 > 9){
            $v = str_split($Goc1);
            $GOC1=0;
            for($m = 0 ; $m <count($v);$m++){
                $GOC1 += $v[$m];
            }
        }
        if($Goc1 > 9){
            $tonggoc1=$GOC1;
        }else{
            $tonggoc1=$Goc1;
        }
        //Goc2
        if($tongNam >=10 && $tongNam1 >=10 && $tongNgay >=10){
            $Goc2 = $tongNam2 + $tongNgay1;
        }else if($tongNam >=10 && $tongNam1 >10 && $tongNgay <= 10){
            $Goc2 = $tongNam2 + $tongNgay;
        }else if($tongNam >=10 && $tongNam1 <=10 && $tongNgay >=10){
            $Goc2 = $tongNam1 + $tongNgay1;
        }else if($tongNam >=10 && $tongNam1 <=10 && $tongNgay <= 10){
            $Goc2 = $tongNam1 + $tongNgay;
        }else if($tongNam < 10 && $tongNgay >=10){
            $Goc2 = $tongNam + $tongNgay1;
        }else if($tongNam < 10 && $tongNgay <= 10){
            $Goc2 = $tongNam + $tongNgay;
        }
    
        if($Goc2 >=10){
            $v = str_split($Goc2);
            $GOC2=0;
            for($m = 0 ; $m <count($v);$m++){
                $GOC2 += $v[$m];
                if($GOC2 >=10){
                    $t = str_split($GOC2);
                    $GOc2=0;
                    for($k = 0 ; $k <count($t);$k++){
                        $GOc2 += $t[$k];
                    }
                }
            }
        }
        if($Goc2 >= 10 && $GOC2 >= 10){
            $tonggoc2=$GOc2;
        }else if($Goc2 >=10 && $GOC2 <10){
            $tonggoc2=$GOC2;
        }else{
            $tonggoc2=$Goc2;
        }

        //Goc3
        if($Goc1 > 9 && $Goc2 > 9 && $GOC2 >9){
            $Goc3 = $GOc2 + $GOC1;
        }else if($Goc1 > 9 && $Goc2 > 9 && $GOC2 <= 9){
            $Goc3 = $GOC2 + $GOC1;
        }else if($Goc1 > 9 && $Goc2 <= 9){
            $Goc3 = $Goc2 + $GOC1;
        }else if($Goc1 <= 9 && $Goc2 > 9 && $GOC2 > 9){
            $Goc3 = $GOc2 + $Goc1;
        }else if($Goc1 <= 9 && $Goc2 > 9 && $GOC2 <= 9){
            $Goc3 = $GOC2 + $Goc1;
        }else if($Goc1 <= 9 && $Goc2 <= 9){
            $Goc3 = $Goc2 + $Goc1;
        }
    
        if($Goc3 > 11){
            $v = str_split($Goc3);
            $GOC3=0;
            for($m = 0 ; $m <count($v);$m++){
                $GOC3 += $v[$m];
            }
        }
        if($Goc3 > 11){
           $tonggoc3=$GOC3;
        }else{
           $tonggoc3=$Goc3;
        }
        //Goc4

        if($tongNam > 9 && $tongNam1 > 9){
            $Goc4 =$tongThang + $tongNam2;
        }else if($tongNam > 9 && $tongNam1 <=9){
            $Goc4 =$tongThang + $tongNam1;
        }else if($tongNam < 9){
            $Goc4 =$tongThang + $tongNam;
        }
        if($Goc4 > 11){
            $v = str_split($Goc4);
            $GOC4=0;
            for($m = 0 ; $m <count($v);$m++){
                $GOC4 += $v[$m];
            }
        }
        if($Goc4 > 11){
            $tonggoc4=$GOC4;
        }else{
            $tonggoc4=$Goc4;
        }
        $desc=PeakYearModel::select('peakYear_desc')->where('peakYear_id',$tonggoc1)->get();
        $desc2=PeakYearModel::select('peakYear_desc')->where('peakYear_id',$tonggoc2)->get();
        $desc3=PeakYearModel::select('peakYear_desc')->where('peakYear_id',$tonggoc3)->get();
        $desc4=PeakYearModel::select('peakYear_desc')->where('peakYear_id',$tonggoc4)->get();
        Session::put('customer_id',$customer_id);
        $pdf = \PDF::loadView ('peakYear.download_py',[
            'customer'=>$customer,
            'date' => $date,'py'=>$py,'py2'=>$py2,'py3'=>$py3,'py4'=>$py4,
            'desc'=>$desc,'desc2'=>$desc2,'desc3'=>$desc3,'desc4'=>$desc4,
            'nampy'=>$nampy,'nampy2'=>$nampy2,'nampy3'=>$nampy3,'nampy4'=>$nampy4,
        ]);

        //return $pdf->stream();
        return $pdf->download('download.pdf');
        
    }
    
    public function update(Request $request, $cus_id){
        $data=array();
        
        $data['customer_email'] =  $request->emailpy;
        $data['customer_phone']= $request->phonepy;

        $customer = CustomerModel::where('customer_id',$cus_id)->update($data);
        
       
        Session::put('customer_id',$cus_id);
        // Session::put('customer_date',$data['customer_date']);
        // Session::put('customer_name',$data['customer_name']);
        return Redirect::to('/result-py/'.Session::get('customer_id'));
    }

    public function result_py(Request $request, $custom_id){
        $customer = CustomerModel::where('customer_id',$custom_id)->get();
        foreach($customer as $value){
            $date = $value->customer_date;
            $date1=strtotime($date);
            $date1=date('d/m/Y',$date1);

            $sochudao = $value->customer_sochudao;

            $py = 36 - $sochudao;
            
            $py2 = 9 + $py;
            
            $py3 = 9 + $py2;
            
            $py4 = 9 + $py3;
             
        }
        $str = explode("-",$date);

        $nam = $str[0];
	    $thang = $str[1];
	    $ngay = $str[2];

        $nampy = $str[0] + $py;
            
        $nampy2 = 9 + $nampy;
            
        $nampy3 = 9 + $nampy2;
            
        $nampy4 = 9 + $nampy3;

        $lengthNam = str_split($nam);
        $lengthThang = str_split($thang);
        $lengthNgay = str_split($ngay);
        
        //Thang rut gon
        $tongThang = 0;
        for($i=0;$i<count($lengthThang);$i++){
            $tongThang += $lengthThang[$i];
        }

        //Ngay rut gon
        $tongNgay = 0;
        for($i=0;$i<count($lengthNgay);$i++){
            $tongNgay += $lengthNgay[$i];
            if($tongNgay > 9){
                $c = str_split($tongNgay);
                $tongNgay1 = 0;
                for($j =0 ; $j< count($c);$j++){
                    $tongNgay1 += $c[$j];
                }
            }
        }
        if($tongNgay > 9){
            $tongngay=$tongNgay1;
        }else{
            $tongngay=$tongNgay;
        }

        //Nam rut gon
        $tongNam = 0;
        for($i=0;$i<count($lengthNam);$i++){
            $tongNam += $lengthNam[$i];
            if($tongNam > 9){
                $c = str_split($tongNam);
                $tongNam1 = 0;
                for($j =0 ; $j< count($c);$j++){
                    $tongNam1 += $c[$j];
                    if($tongNam1 > 9){
                        $v = str_split($tongNam1);
                        $tongNam2=0;
                        for($m = 0 ; $m <count($v);$m++){
                            $tongNam2 += $v[$m];
                        }
                    }
                }
            }
        }
        
        if($tongNam >= 10 && $tongNam1 >= 10){
            $tongnam=$tongNam2;
        }else if($tongNam >= 10 && $tongNam1 <10){
             $tongnam=$tongNam1;
        }else if($tongNam <= 10){
             $tongnam=$tongNam;
        }

        //Goc 1 
        if($tongNgay > 9){
            $Goc1 = $tongThang + $tongNgay1;
        }else{
            $Goc1 = $tongThang + $tongNgay;
        }
        if($Goc1 > 9){
            $v = str_split($Goc1);
            $GOC1=0;
            for($m = 0 ; $m <count($v);$m++){
                $GOC1 += $v[$m];
            }
        }
        if($Goc1 > 9){
            $tonggoc1=$GOC1;
        }else{
            $tonggoc1=$Goc1;
        }
        //Goc2
        if($tongNam >=10 && $tongNam1 >=10 && $tongNgay >=10){
            $Goc2 = $tongNam2 + $tongNgay1;
        }else if($tongNam >=10 && $tongNam1 >10 && $tongNgay <= 10){
            $Goc2 = $tongNam2 + $tongNgay;
        }else if($tongNam >=10 && $tongNam1 <=10 && $tongNgay >=10){
            $Goc2 = $tongNam1 + $tongNgay1;
        }else if($tongNam >=10 && $tongNam1 <=10 && $tongNgay <= 10){
            $Goc2 = $tongNam1 + $tongNgay;
        }else if($tongNam < 10 && $tongNgay >=10){
            $Goc2 = $tongNam + $tongNgay1;
        }else if($tongNam < 10 && $tongNgay <= 10){
            $Goc2 = $tongNam + $tongNgay;
        }
    
        if($Goc2 >=10){
            $v = str_split($Goc2);
            $GOC2=0;
            for($m = 0 ; $m <count($v);$m++){
                $GOC2 += $v[$m];
                if($GOC2 >=10){
                    $t = str_split($GOC2);
                    $GOc2=0;
                    for($k = 0 ; $k <count($t);$k++){
                        $GOc2 += $t[$k];
                    }
                }
            }
        }
        if($Goc2 >= 10 && $GOC2 >= 10){
            $tonggoc2=$GOc2;
        }else if($Goc2 >=10 && $GOC2 <10){
            $tonggoc2=$GOC2;
        }else{
            $tonggoc2=$Goc2;
        }

        //Goc3
        if($Goc1 > 9 && $Goc2 > 9 && $GOC2 >9){
            $Goc3 = $GOc2 + $GOC1;
        }else if($Goc1 > 9 && $Goc2 > 9 && $GOC2 <= 9){
            $Goc3 = $GOC2 + $GOC1;
        }else if($Goc1 > 9 && $Goc2 <= 9){
            $Goc3 = $Goc2 + $GOC1;
        }else if($Goc1 <= 9 && $Goc2 > 9 && $GOC2 > 9){
            $Goc3 = $GOc2 + $Goc1;
        }else if($Goc1 <= 9 && $Goc2 > 9 && $GOC2 <= 9){
            $Goc3 = $GOC2 + $Goc1;
        }else if($Goc1 <= 9 && $Goc2 <= 9){
            $Goc3 = $Goc2 + $Goc1;
        }
    
        if($Goc3 > 11){
            $v = str_split($Goc3);
            $GOC3=0;
            for($m = 0 ; $m <count($v);$m++){
                $GOC3 += $v[$m];
            }
        }
        if($Goc3 > 11){
           $tonggoc3=$GOC3;
        }else{
           $tonggoc3=$Goc3;
        }
        //Goc4

        if($tongNam > 9 && $tongNam1 > 9){
            $Goc4 =$tongThang + $tongNam2;
        }else if($tongNam > 9 && $tongNam1 <=9){
            $Goc4 =$tongThang + $tongNam1;
        }else if($tongNam < 9){
            $Goc4 =$tongThang + $tongNam;
        }
        if($Goc4 > 11){
            $v = str_split($Goc4);
            $GOC4=0;
            for($m = 0 ; $m <count($v);$m++){
                $GOC4 += $v[$m];
            }
        }
        if($Goc4 > 11){
            $tonggoc4=$GOC4;
        }else{
            $tonggoc4=$Goc4;
        }
        $desc=PeakYearModel::select('peakYear_desc')->where('peakYear_id',$tonggoc1)->get();
        $desc2=PeakYearModel::select('peakYear_desc')->where('peakYear_id',$tonggoc2)->get();
        $desc3=PeakYearModel::select('peakYear_desc')->where('peakYear_id',$tonggoc3)->get();
        $desc4=PeakYearModel::select('peakYear_desc')->where('peakYear_id',$tonggoc4)->get();

        
        return view('peakYear.result_py')->with(compact('customer','date1',
                                                        'tongThang','tongngay','tongnam',
                                                        'tonggoc1','tonggoc2','tonggoc3','tonggoc4',
                                                        'py','py2','py3','py4',
                                                        'nampy','nampy2','nampy3','nampy4',
                                                        'desc','desc2','desc3','desc4'));
    }
}
