@extends('layouts.tutorheader')

<style>
  .search-input{
    max-width:500px;
    margin-top:50px;
    margin-bottom:50px;
    margin-right:10px

  }

.btn-size{
  width:150px;
  height:40px;
}

.rows {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0px;
    margin-left: 0px;
  }

</style>
@section('content')
    <center>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <input class="form-control search-input" type="text" id="search-tutor" name="search-tutor" placeholder="ค้นหา">
        </div>
        <div class="col-md-3">
            <button type="button" class='btn btn-primary btn-size text-center search-input' id="btn-search" 
              style="background-color: #FF8000;">ค้นหาคอร์สสอน</button>
        </div>
      </div>
    <div>


    <div class="page-title text-center">
        <a href=""><button class="tag-item btn btn-lg btn-danger" style="background-color: #FF8000;">สร้างคอร์สเรียนที่ต้องการ</button></a>
    </div>

    <!-- Modal popup -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel" style="center">แจ้งเตือน</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
          </div>
          <div class="modal-body">
            ไม่พบติวเตอร์ที่ตรงกับความต้องการของผู้ใช้
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary btn-xl " href="{{url('/learnercreatecourse')}}" style="background-color: #FF8000;">เพิ่มคอร์สสอน</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->

    <div class="container">
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10" style="margin-top:30px;background-color:#D8D8D8;padding:20px;border-radius:25px;margin-top:35px">
      <!-- first line -->  
      <div class="container">  
        <div class="filter-select row">

          <div class="col-md-3">
            <label>ชื่อวิชา</label>
            <select id="filterBySubject" class="form-control">
              <?php
                foreach($subject as $key =>$value){
                  echo '<option value="'.$value->subjects_id.'">'.$value->subject_name.'</option>' ;
                }			
              ?>
            </select>
          </div>
                    
          <div class="col-md-3">
            <label>ระดับชั้น</label>
            <select id="filterByLevel"  class="form-control">
              <?php
                foreach($level as $key =>$value){
                  echo '<option value="'.$value->levels_id.'">'.$value->level_name.'</option>' ;
                }			
              ?>
            </select>
          </div>
                        
          <div class="col-md-3">
            <label>วัน</label>
            <select id="filterByDay"  class="form-control">                       
              <?php
                foreach($day as $key =>$value){
                  echo '<option value="'.$value->day_id.'">'.$value->dayfull.'</option>' ;
                }			
              ?>
            </select>
          </div>
                        
          <div class="col-md-3">
            <label>ช่วงเวลา</label>   
            <select id="filterByDuration"  class="form-control">
              <?php
                foreach($duration as $key =>$value){
                  echo '<option value="'.$value->duration_id.'">'.$value->duration_name.'</option>' ;
                }			
              ?>
            </select>
          </div>
        </div>
      </div>
      <!-- End first line -->
                  
      <!-- second line -->  
      <div class="container">
        <div class="row">

          <div class="col-md-3">
            <label>แขวง</label>
            <input type="text" id="district" class="form-control">
          </div>
                  
          <div class="col-md-3">
            <label>เขต</label>
            <input type="text" id="amphoe" class="form-control">
          </div>
                  
          <div class="col-md-3">
            <label>จังหวัด</label>
            <input type="text" id="province" class="form-control">
          </div>
                  
          <div class="col-md-3">
            <label>รหัสไปรษณีย์</label>
            <input type="text" id="zipcode" class="form-control">
          </div>

        </div>
      </div>
      <!-- End second line -->
    </div>
    <div class="col-md-1"></div>

    <br>          
    <div id="tagGroup"></div>
        
    <!-- Table -->
    <div class="container">
      <div class="row" id="result">
        <div class="col-md-1"></div>
        <div class="col-md-10 rows" style="margin-top:30px;background-color:#D8D8D8;padding:20px;border-radius:25px;">
         
          <table class="table" id="datatable">
            <thead style="background-color:#FF8000;color:#ffffff;">
              <th><h3>ชื่อวิชา</h3></th>
              <th><h3>ระดับชั้น</h3></th>
              <th><h3>วัน</h3></th>
              <th><h3>เวลา</h3></th>
            </thead>

            <tbody id="data-table-block">
              @foreach($learnerSchedule as $key =>$value)
                <tr class="data-table">
                  <td><h4 class="subject_name">{{$value->subject_name}}</h4></td>
                  <td><h4 class="level_name">{{$value->level_name}}</h4></a></td>
                  <td><h4 class="dayfull">{{$value->dayfull}}</h4></a></td>
                  <td><h4 class="duration_name">{{$value->duration_name}}</h4></a></td>
                  <!-- <td><a href=""><h4 class="district"></h4></a></td>
                  <td><a href=""><h4 class="amphoe"></h4></a></td>
                  <td><a href=""><h4 class="province"></h4></a></td>
                  <td><a href=""><h4 class="zipcode"></h4></a></td> -->
                </tr>
              @endforeach
            </tbody>            
          </table>

            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  {{ $learnerSchedule->appends(['sort' => 'subject_name'])->links() }}
                </div>
              </div>
            </div>

        </div>
        <div class="col-md-1"></div>
      </div>
    </div>

  
    <section class="primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center"></div>
        </div>
      </div>
    </section>
    </center>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>


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

@section('script')
<script>
  
  $(document).ready(function(){
    $('#btn-search').click(function(){
      $('#myModal').modal('show');
    })
   
  })
</script>
@endsection
