@extends('lost_weight.header_exercise')
@section('title','My lost weight tracking')
@section('body')

<h3 class="my-3">บันทึกของฉัน <i class="fa fa-heartbeat fa-2x" style="color:red"></i> <sub>My diary of Daily</sub></h3>


@foreach( $me as $m)
<div class="col-sm-2 float-left" >
   <div class="card" style="width:250px;border-radius : 15px 50px;">
   <img class="card-img-top" src=" storage/imagecover2/{{$m->img_profile}}" alt="Card image" style="width:100%;border-radius : 15px 50px;"/>
   <div class="card-body">
     <h4 class="card-title">ประวัติของฉัน</h4>
     <p class="card-text">ชื่อ :{{$m->fname}} </p>
      <p class="card-text">ส่วนสูง :{{$m->height}}</p>
       <p class="card-text">อายุ :{{$m->age}} <i class="fa fa-home"></i></p>
        <p class="card-text">เพศ : {{$m->sex}}</p>
   </div>
 </div></div>
<img src="storage/imagecover2/{{$m->img_profile}}" >
@endforeach
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
    <tr>

      <td>Anna</td>
      <td>Pitt</td>
      <td>35</td>
      <td>New York</td>
      <td>USA</td>
      <td>Female</td>

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

      <td>Anna</td>
      <td>Pitt</td>
      <td>35</td>
      <td>New York</td>
      <td>USA</td>
      <td>Female</td>
      <td>Yes</td>



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
      <td>1</td>
      <td>Anna</td>
      <td>Pitt</td>
      <td>35</td>
      <td>New York</td>



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
      <td>1</td>
      <td>Anna</td>
      <td>Pitt</td>
      <td>35</td>


    </tr>
  </tbody>
</table>
</div>
</div>






@endsection
