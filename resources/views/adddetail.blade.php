@extends('layouts.tutorheader')

<!-- link modal popup page -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    div h5 {
        font-size:15px;
    }

    .navbar-hight{
        higth:50px;
    }

    .pad{
        padding-bottom:15px;
    }
    
    div label {
        font-size: 20px;
    }

</style>

@section('content')

    <section id="services" class="text-center">   
        <h1>เพิ่มรายละเอียดคอร์ส</h1>
        <center><hr></center>      
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12"  style="background-color:#D8D8D8;border-radius:25px;padding:10px;">
                            <div class="container">
                                <form action="{{ url('/')}}" method='post' enctype="multipart/form-data">    
                                    <div class="row">

                                        <div class="col-md-6" style="margin-top:10px;">
                                            <label>รายละเอียดบทเรียน</label>
                                            <textarea placeholder="รายละเอียดบทเรียน" rows="4" cols="50" name="detail" form="usrform" class="form-control"
                                                style="border-radius:10px;"></textarea>
                                        </div>

                                        <div class="col-md-6" style="margin-top:10px;">
                                            <label>รายละเอียดสถานที่</label>
                                            <textarea placeholder="รายละเอียดสถานที่" rows="4" cols="50" name="detail" form="usrform" class="form-control" 
                                                style="border-radius:10px;"></textarea>
                                        </div>

                                        <div class="col-md-6" style="margin-top:10px;">
                                            <label>รายละเอียดการเดินทาง</label>
                                            <textarea placeholder="รายละเอียดการเดินทาง" rows="4" cols="50" name="detail" form="usrform" class="form-control"
                                                style="border-radius:10px;"></textarea>
                                        </div>

                                        <!-- Time Zone -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4" style="margin-top:10px;">
                                                    <label class="fontsize">วันที่เริ่มเรียน</label>
                                                    <input type="date" name="startdate" class="form-control" style="border-radius:10px;"/>  
                                                </div>

                                                <div class="col-md-4" style="margin-top:10px;">
                                                    <label>เวลาที่เริ่ม</label>
                                                    <input type="time" name="starttime" class="form-control" style="border-radius:10px;"/>   
                                                </div>

                                                <div class="col-md-4" style="margin-top:10px;">
                                                    <label>เวลาที่จบ</label>
                                                    <input type="time" name="endtime" class="form-control" style="border-radius:10px;"/>   
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Time Zone -->

                                    </div>    
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-1"></div>
        </div>
    </div>

        <section id="services" class="text-center">   
            <button class="btn btn-primary btn-xl js-scroll-trigger" type="submit" style="font-size: 17px;">เพิ่มรายละเอียดคอร์ส</button>
        </section>

    <!-- Plugin JavaScript -->
    <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->

    <script>
        $.Thailand({
            database: '{{URL::asset("themes/alchemist/assets/scripts/jquery.Thailand.js/database/db.json")}}', // path หรือ url ไปยัง database
            $district: $('#district'), // input ของตำบล
            $amphoe: $('#amphoe'), // input ของอำเภอ
            $province: $('#province'), // input ของจังหวัด
            $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
        });
    </script>

@endsection
