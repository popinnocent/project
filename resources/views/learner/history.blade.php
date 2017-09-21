@extends('layouts.learnerheader')

<!-- link modal popup page -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    div h5 {
        font-size:17px;
    }

    .navbar-hight{
        higth:50px;
    }

    .pad{
        padding-bottom:15px;
    }
    


</style>

@section('content')
    <br><br><br><br>
    
    <section class="text-center">   
        <h1>ประวัติการเรียน</h1>
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
