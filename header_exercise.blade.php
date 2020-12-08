<!DOCTYPE html>
<html lang="en">
<head>

 <link rel="icon" href="imagecover/a1.jpg"  type="image/jpg" sizes="16x16">
    <title>  @yield('title')</title>

  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

  @media only screen and (min-width: 600px) {

  }

    @media only screen and (min-width: 800px) {

  .card{
    display: inline;

    }
  }
    @media only screen and (min-width: 1200px) {

  }
  </style>
</head>
<body style="font-family: 'Itim', cursive;">


  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="imagecover/a1.jpg" class="responsive" style=" border-radius : 5px 10px;" width="40px" height="40px" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item mr-3" >
          <a class="nav-link " style="text-align: center; " href="#" ><i class="fa fa-home fa-2x"></i>หน้าหลัก</a>
        </li>
        <li class="nav-item mr-3" >
          <a class="nav-link " style=" text-align: center;" href="#" ><i class="fa fa-home fa-2x"></i>หน้าหลัก</a>
        </li>
        <li class="nav-item mr-3" >
          <a class="nav-link" style=" text-align: center;" href="#" ><i class="fa fa-home fa-2x"></i>หน้าหลัก</a>
        </li>
        <li class="nav-item mr-3" >
          <a class="nav-link" style="text-align: center;" href="#" ><i class="fa fa-home fa-2x"></i>หน้าหลัก</a>
        </li>
        <li class="nav-item mr-3" >
          <a class="nav-link" style="text-align: center;" href="#" ><i class="fa fa-home fa-2x"></i>หน้าหลัก</a>
        </li>
        <li class="nav-item mr-3" >
          <a class="nav-link" style=" text-align: center;" href="#" ><i class="fa fa-home fa-2x"></i>หน้าหลัก</a>
        </li>


      </ul>

    </div>


  </nav>








      <div class="container-fluid">
        @yield('body')


 </div>


</body>
</html>
