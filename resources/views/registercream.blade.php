@extends('layouts.tutorheader')

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

    .btn-tutor {
        color: #fff;
        border-color: #FF8000;
        background-color: #FF8000;
    }

    div label {
        font-size: 20px;
    }

    .marginnaja {
        margin-top:10px;
    }
</style>

@section('content')

    <section id="services" class="text-center">   
        <h1>สมัครสมาชิก</h1>
        <center><hr></center>      
    </section>
    
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <div class="container">
                    <div class="row" style="margin:5px">
                        <form action="{{ url('/registersave')}}" method='post' enctype="multipart/form-data">

                            <!-- Username and Password -->
                            <div class="row" style="background-color:#D8D8D8;border-radius:25px;padding:20px;">
                                <div class="col-md-12"><h2>บัญชีผู้ใช้</h2></div>
                                <div class="col-md-6 marginnaja">
                                    <label>ชื่อผู้ใช้</label>
                                    <input placeholder="ชื่อผู้ใช้" name="username" class="form-control" style="border-radius:10px;"/>
                                </div>
                                <div class="col-md-6 marginnaja">
                                    <label>อีเมล</label>
                                    <input placeholder="อีเมล" name="email"  class="form-control" style="border-radius:10px;"/>
                                </div>
                                <div class="col-md-6 marginnaja">
                                    <label>รหัสผ่าน</label>
                                    <input placeholder="รหัสผ่าน" name="password"  class="form-control" type="password" style="border-radius:10px;"/>
                                </div>
                                <div class="col-md-6 marginnaja">
                                    <label>ยืนยันรหัสผ่าน </label>
                                    <input placeholder="ยืนยันรหัสผ่าน" name="password"  class="form-control" type="password" style="border-radius:10px;"/>
                                </div>
                            </div>
                            
                            <br>

                            <!-- Profile -->
                            <div class="row" style="background-color:#D8D8D8;border-radius:25px;padding:20px;">
                                <div class="col-md-12 marginnaja"><h2>ข้อมูลส่วนตัว</h2></div>
                                <div class="col-md-6 marginnaja">
                                    <label>ชื่อจริง</label>
                                    <input type="text" placeholder="ชื่อจริง" name="firstname"  class="form-control" style="border-radius:10px;"/>
                                </div>
                            
                                <div class="col-md-6 marginnaja">
                                    <label>นามสกุล</label>
                                    <input type="text" placeholder="นามสกุล" name="lastname"  class="form-control" style="border-radius:10px;"/>
                                </div>

                                <div class="col-md-6 marginnaja">
                                    <label>ชื่อเล่น</label>
                                    <input type="text" placeholder="ชื่อเล่น" name="nickname"  class="form-control" style="border-radius:10px;"/> 
                                </div>

                                <div class="col-md-6 marginnaja">
                                    <label>เลขบัตรประชาชาน</label>
                                    <input type="text" placeholder="เลขบัตรประชาชาน" name="id_card"  class="form-control" style="border-radius:10px;"/>
                                </div>

                                <div class="col-md-6 marginnaja">
                                    <label>วันเดือนปีเกิด</label>
                                    <input type="date" name="birthday"  class="form-control" style="border-radius:10px;"/>  
                                </div>

                                <div class="col-md-6 marginnaja">
                                    <label>อายุ</label>
                                    <input type="text" placeholder="อายุ" name="age"  class="form-control" style="border-radius:10px;"/>   
                                </div>

                                <div class="container marginnaja">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                
                                                <div class="col-md-2">
                                                        <label>เพศ</label>
                                                </div>
                                                <div class="col-md-1" style="margin-top:26px;">
                                                    <input type="radio" value="ผู้ชาย" name="gender"/>
                                                        
                                                </div>
                                                <div class="col-md-3" style="margin-top:20px;">        
                                                    <p>ชาย</p>
                                                </div>
                                                <div class="col-md-1" style="margin-top:26px;">
                                                    <input type="radio" value="ผู้หญิง" name="gender"/>                  
                                                </div>
                                                <div class="col-md-3" style="margin-top:20px;">        
                                                    <p>หญิง</p>
                                                </div>

                                                <div class="col-md-2"></div>
                                            </div>
                                        </div>
                                
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>รูปโปรไฟล์</label>
                                                </div>
                                                <div class="col-md-3" style="margin-top:20px;">
                                                    <input type="file" name="img_profile">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-md-6 marginnaja">
                                    <label>เบอร์โทรศัพท์</label>
                                    <input type="text" placeholder="เบอร์โทรศัพท์" name="tel"  class="form-control" style="border-radius:10px;"/>
                                </div>

                                <div class="col-md-6 marginnaja">
                                    <label>ที่อยู่ปัจจุบัน</label>
                                    <input type="text" placeholder="ที่อยู่ปัจจุบัน" name="address" class="form-control" style="border-radius:10px;"/>
                                </div>
                                
                                <div class="col-md-6 marginnaja">
                                    <label>สถานศึกษาปัจจุบัน</label>
                                    <input type="text" placeholder="สถานศึกษาปัจจุบัน" name="school" class="form-control" style="border-radius:10px;"/>
                                </div>
                                
                                <div class="col-md-6 marginnaja">
                                    <label>ระดับชั้น</label>
                                    <input type="text" placeholder="ระดับชั้นที่กำลังศึกษา" name="learner_level" class="form-control" style="border-radius:10px;"/>
                                </div>
                                
                                <div class="col-md-6 marginnaja">
                                    <label>เกรดเฉลี่ยสะสม</label>
                                    <input type="text" placeholder="เกรดเฉลี่ยสะสม" name="grade" class="form-control" style="border-radius:10px;"/>
                                </div>
                            </div>

                            <br>
                            
                            <!-- Reference -->
                            <div class="row" style="background-color:#D8D8D8;border-radius:25px;padding:20px;">
                                <div class="col-md-12 marginnaja"><h2>บุคคลอ้างอิงที่ติดต่อได้</h2></div>
                                <div class="col-md-6 marginnaja">
                                    <label>ชื่อ-นามสกุล</label>
                                    <input type="text" placeholder="ชื่อจริง-นามสกุล" name="learner_ref" class="form-control" style="border-radius:10px;"/>
                                </div>
                                
                                <div class="col-md-6 marginnaja">
                                    <label>ความสัมพันธ์</label>
                                    <input type="text" placeholder="ความสัมพันธ์" name="ref_relation" class="form-control" style="border-radius:10px;"/>
                                </div>
                                
                                <div class="col-md-6 marginnaja">
                                    <label>เบอร์โทรศัพท์</label>
                                    <input type="text" placeholder="เบอร์โทรศัพท์" name="ref_tel" class="form-control" style="border-radius:10px;"/>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-1"></div>
        </div>
    </div>
    
    <section id="services" class="text-center"> 
        <button class="btn btn-primary btn-xl js-scroll-trigger" type="submit" style="font-size: 17px;">สมัครสมาชิก</button>
    </section>

    <br><br>
  
    <!-- Plugin JavaScript -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

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

