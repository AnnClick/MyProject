@extends('lost_weight.header_exercise')
@section('title','My lost weight tracking')
@section('body')

<!-- Multiple inputs -->
<form action="{{route('create_profile')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

  <div style="text-align:center;" class="mt-3"><p><h3 style="background-color:#ffb142;border-radius:5px 10px">เพิ่มประวัติส่วนตัว</h3></p></div>
  <div class="container col-sm-10 mt-3" style="border:2px solid green">

 <div class="input-group my-3">
   <div class="input-group-prepend">
     <span class="input-group-text">ชื่อ</span>
   </div>
   <input type="text" name="fname" class="form-control" placeholder="ชื่อ">
   <input type="text" name="lname" class="form-control" placeholder="สกุล">
 </div>



 <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text">ส่วนสูง</span>
   </div>
   <input type="text"  name="height" class="form-control" placeholder="ส่วนสูง">

 </div>

 <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text">อายุ</span>
   </div>
<input type="text"  name="age" class="form-control" placeholder="อายุ">

 </div>


 <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text">เพศ</span>
   </div>
   <input type="text"  name="sex" class="form-control" placeholder="เพศ">

 </div>

 <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text">รูปโปรไฟล์</span>
   </div>
 <div class="custom-file">
   <input type="file"  name="img_profile" class="custom-file-input" id="customFile">
   <label class="custom-file-label" for="customFile">Choose file</label>
 </div>
</div>
<div class="mb-3">
  <center>
<input type="submit" class="btn btn-primary" value="บันทึก" ></center>
</div>

</div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
 var fileName = $(this).val().split("\\").pop();
 $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</form>



@endsection
