@extends('layouts.learnerheader')

@section('content') 
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">สร้างคอร์สเรียน</h2>
            <hr class="primary">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
             
              <h3>วิชา</h3>
              <select name="subject" class="form-control">
			
				      </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              
              <h3>ระดับชั้น</h3>
              <select name="level" class="form-control">
			
				      </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              
              <h3>วัน</h3>
              <select name="day" class="form-control">
				
				      </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              
              <h3>ช่วงเวลา</h3>
              <select name="duration" class="form-control">
				
				      </select>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
        <div class="col-lg-3 col-md-3 text-center">
            <div class="service-box">
              <h3>ตำบล/แขวง</h3>
              <input type="text" id="district" class="form-control">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 text-center">
            <div class="service-box">
              <h3>อำเภอ/เขต</h3>
              <input type="text" id="amphoe" class="form-control">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 text-center">
            <div class="service-box">
              <h3>จังหวัด</h3>
              <input type="text" id="province" class="form-control">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 text-center">
            <div class="service-box">
              <h3>รหัสไปรษณีย์</h3>
              <input type="text" id="zipcode" class="form-control">
            </div>
          </div>
        </div>
      </div>
        
    </section>

     <div class="container text-center">
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{url('/learnermycourse')}}">สร้างคอร์สเรียน</a>
     </div>
      
     <section class="primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
         
            
          </div>
        </div>
      </div>
    </section>
@endsection
