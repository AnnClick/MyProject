@extends('lost_weight.header_exercise')
@section('title','My lost weight tracking')
@section('body')

<h3 class="my-3">บันทึกของฉัน <i class="fa fa-heartbeat fa-2x" style="color:red"></i> <sub>My diary of Daily</sub></h3>


<div class="col-sm-10 float-right" style="position:relative">
  <div class=""> <h5>ดูบันทึกย้อนหลัง >> Week # <a href="" style="color:#e17055">1</a> </h5> </div>
<div class="contrainer table-responsive">
<table class="table table-bordered " style="display:block;">
  <thead>
    <tr style="background-color:#ffb142">

      <th>น้ำหนัก</th>
      <th>BMI</th>
      <th>Fat%</th>
      <th>Muscle</th>
      <th>อายุเซลล์</th>
      <th>Visceral Fat</th>
    </tr>
  </thead>
  <tbody>
    <tr >

      <td>

  <input type="text" class="form-control" name="weitht">
</td>
      <td>

  <input type="text" class="form-control" name="bmi">
</td>
      <td>

  <input type="text" class="form-control" name="fat">
</td>
      <td>

  <input type="text" class="form-control" name="muscle">
</td>
      <td>

  <input type="text" class="form-control" name="agecells">
</td>
      <td>

  <input type="text" class="form-control" name="visceral">
</td>

    </tr>
  </tbody>
</table>


<table class="table table-bordered " style="display:block;">
  <thead>
    <tr style="background-color:#ffb142">

      <th>ใต้อก (cm)</th>
      <th>รอบเอวบน (cm)</th>
      <th>รอบเอวผ่านสะดือ (cm)</th>
      <th>สะโพก (cm)</th>
      <th>ต้นแขนบน (cm)</th>
      <th>ต้นแขนกลาง (cm)</th>
      <th>ต้นแขนล่าง (cm)</th>



    </tr>
  </thead>
  <tbody>
    <tr >

      <td>  <input type="text" class="form-control" name="chest"></td>
      <td>  <input type="text" class="form-control" name="hipabove"></td>
      <td>  <input type="text" class="form-control" name="hipbelow"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>



    </tr>
  </tbody>
</table>

<table class="table table-bordered " style="display:block;">
  <thead>
    <tr style="background-color:#ffb142">

      <th>ต้นขาบน (cm)</th>
      <th>ต้นขากลาง (cm)</th>
      <th>ต้นขาล่าง</th>
      <th>น่อง (cm)</th>
      <th>ออกกำลังกาย (นาที)</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <td>  <input type="text" class="form-control" name="visceral"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>



    </tr>
  </tbody>
</table>





<table class="table table-bordered ">
  <thead>
    <tr style="background-color:#ffb142">
      <th>Week #</th>

      <th>รูปด้านหน้า</th>
      <th>รูปข้างด้านซ้าย</th>
      <th>รูปข้างด้านขวา</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>  <input type="text" class="form-control" name="visceral"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>
      <td>  <input type="text" class="form-control" name="visceral"></td>


    </tr>
  </tbody>
</table>
</div>
</div>






@endsection
