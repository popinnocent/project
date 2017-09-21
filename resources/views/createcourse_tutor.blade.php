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
    <h1>สร้างคอร์สเรียนของฉัน</h1>
    <center><hr></center>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>

      <div class="col-md-10" style="margin-top:30px;background-color:#D8D8D8;padding:20px;border-radius:25px;margin-top:35px">
      <div class="container text-center">
      <div class="row" style="margin:5px">  
        <form method="post" action="/createcourselearner">
          
          
          <div class="row" style="margin:5px">
          
              <label>วิชาที่สอนได้</label>
                <div class="row">
                  
                  <div class="col-md-6"> 
                    <table>
                      <td><input type="checkbox" >วิชาที่สอนได้</td>
                    </table>
                  </div>
                  
                </div>

              <label>ระดับชั้นสอนได้</label>
                <div class="row">
                  
                  <div class="col-md-6"> 
                    <table>
                      <td><input type="checkbox">ระดับชั้นสอนได้</td>
                    </table>
                  </div>
                  
                </div>
                                
              <label>วันที่สามารถสอนได้</label>
                <div class="row">
                  
                  <div class="col-md-6"> 
                    <table>
                      <td><input type="checkbox">วันที่สามารถสอนได้</td>
                    </table>
                  </div>
                  
                </div>
                                  
              <label>ช่วงเวลาที่สามารถสอนได้</label>
                <div class="row">
                  
                  <div class="col-md-6"> 
                    <table>
                      <td><input type="checkbox">ช่วงเวลาที่สามารถสอนได้</td>
                    </table>
                  </div>
                  
                </div>
                            
                              
      <!--                       
                              <div class="row">
                                <div class="col-lg-3 col-md-3 text-center">
                                <label>แขวง</label>
                                  <input type="text" id="district" class="form-control">
                                </div>
                                <div class="col-lg-3 col-md-3 text-center">
                                <label>เขต</label>
                                  <input type="text" id="amphoe" class="form-control">
                                </div>
                                <div class="col-lg-3 col-md-3 text-center">
                                <label>จังหวัด</label>
                                  <input type="text" id="province" class="form-control">
                                </div>
                                <div class="col-lg-3 col-md-3 text-center">
                                <label>รหัสไปรษณีย์</label>
                                  <input type="text" id="zipcode" class="form-control">
                                </div>
                              </div> 
      -->
                          
            </div>
          
        </form>
      </div>
  </div></div>

      <div class="col-md-1"></div>
    </div>
  </div>
    
  <section id="services" class="text-center"> 
      <button class="btn btn-primary btn-xl js-scroll-trigger" type="submit" style="font-size: 17px;">สร้างคอร์สเรียน</button>
  </section>

  <br><br>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center"></div>
    </div>
  </div>

@endsection