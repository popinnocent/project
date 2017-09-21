@extends('layouts.learnerheader')

<!-- link modal popup page -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    div h5 {
        font-size:17px;
    }

    .pad{
        padding-bottom:15px;
    }

    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
            padding-left: 0px;
    }


</style>

@section('content')
    <section class="text-center">   
        <h1>คอร์สของฉัน</h1>
        <center><hr></center>      
    </section>

    @foreach($learnerSchedule as $key =>$value)
    <!-- first -->
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10"  style="background-color:#D8D8D8;border-radius:25px;">

                <div class="container">
                    <div class="row" style="margin:5px">
                        <div class="col-lg-3 col-sm-3 text-center" style="padding-bottom=10px;">
                            <div class="service-box">              
                                <div class="container">   
                                    <img src="{{$value->tutor_image_profile}}" class="img-circle img-responsive" 
                                    style="border-radius:50%;object-position:center;object-fit: cover;" alt="Cinque Terre" width="120" height="120"> 
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-2 text-right pad">
                            <div class="service-box">              
                            <h5>ชื่อ :</h5>
                            <h5>วิชา :</h5>
                            <h5>วัน :</h5>
                            <h5>เวลาเริ่ม :</h5>
                            <h5>สถานที่ :</h5>
                            <h5>สถานะ :</h5>              
                            </div>
                        </div>

                        <div class="col-lg-5 col-sm-5 text-left pad" style="padding-left: 0px;">
                            <div class="service-box">              
                            <h5>{{$value->firstname}} {{$value->lastname}}</h5>
                            <h5>{{$value->subject_name}}</h5>
                            <h5>{{$value->dayfull}}</h5>
                            <h5>{{date('H:i', strtotime($value->start_time))}}</h5>
                            <h5>ทุ่งครุ ทุ่งครุ กรุงเทพ 10140</h5>
                            <h5>{{$value->status_name}}</h5>              
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-2 text-center pad">
                            <div calss="service-box">
                                <a class="btn btn-primary " style="font-size:12px;margin:10px" href="#" onclick="document.getElementById('{{$key}}').style.display='block'">ดูรายละเอียด</a>  
                            </div>          
                        </div>
                    </div>          
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <br>
    
    <!-- Modal Popup -->
    <div id="{{$key}}" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity" style="padding:35px 50px;">
            <header class="w3-container w3-teal"> 
                <span onclick="document.getElementById('{{$key}}').style.display='none'" class="btn-primary w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container">
                <div class="container">
                    <div class="row">        
                        <div class="col-lg-3 col-md-8 text-center" style="padding-bottom=10px;">
                            <div class="service-box">              
                                <div class="container">   
                                    <img src="{{$value->tutor_image_profile}}" class="img-circle img-responsive" 
                                        style="border-radius:50%;object-position:center;object-fit: cover;" alt="Cinque Terre" width="150" height="150"> 
                                </div>
                            </div>
                        </div>
                        <br>        
                        <div class="col-lg-3 col-md-8 text-right">
                            <div class="service-box">             
                                <h5>ชื่อ :</h5>
                                <h5>วิชา :</h5>
                                <h5>วัน :</h5>
                                <h5>เวลาเริ่ม :</h5>
                                <h5>สถานที่ :</h5>
                                <h5>ราคา/ชั่วโมง :</h5>
                                <h5>สถานะ :</h5>
                                <h5>ติดต่อ :</h5>
                                <h5>รายละเอียดการสอน :</h5>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 text-left" style="padding-left: 0px;">
                            <div class="service-box">              
                                <h5>{{$value->firstname}} {{$value->lastname}}</h5>
                                <h5>{{$value->subject_name}}</h5>
                                <h5>{{$value->dayfull}}</h5>
                                <h5>{{date('H:i', strtotime($value->start_time))}}</h5>
                                <h5>ทุ่งครุ ทุ่งครุ กรุงเทพ 10140</h5>
                                <h5>{{$value->price}}</h5>
                                <h5>{{$value->status_name}}</h5>
                                <h5>{{$value->tel}}</h5>    
                                <h5>อยากให้มีข้อสอบตัวอย่างมาให้ฝึกทำด้วย</h5><br>         
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </div>
    @endforeach
        

        
@endsection
