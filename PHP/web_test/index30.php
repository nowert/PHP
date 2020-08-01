<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Untitled Document</title>
</head>

<body>
<?php include("test30.php"); ?>
<div class="container">
	<div class="panel-body center-block">
    <form name="form1" method="post" action="">
    <label for="keyword"></label>
    <div class="col-xs-3">
    <input type="text" name="keyword" id="keyword" placeholder="search" class="form-control input-lg">
    </div>
    
    <div class="col-xs-3">
    <select name="select" id="select" class="form-control input-lg">
    	<option value="0" selected>--เลือกหมวดหมู่สินค้า--</option>
        <option value="1">เสื้อผ้า</option>
        <option value="2">เครื่องสำอาง</option>
        <option value="3">เครื่องใช้ไฟฟ้า</option>
    </select>
    </div>
    
    <div class="col-xs-3">
    <select name="select" id="select" class="form-control input-lg">
    <option value="0" selected>--เลือกกการจัดเรียง--</option>
    <option value="1">เรียงจากราคามากสุดไปหาถูกสุด</option>
    <option value="2">เรียงจากราคาถูกสุดไปหามากสุด</option>
    </select>
    </div>
    
    <div class="col-xs-3">
    <input type="submit" name="button" id="button" value="ค้นหา" class="btn btn-primary btn-lg">
    </div>  
	</form>
    </div>
</div>

<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

	<div class="carousel-inner">
    
    <div class="item active">
    	<img src="image/banner/01.png" alt="Los Angeles" style="width:100%;">
        <p>เสื้อผ้า</p>
    </div>
    
    <div class="item">
    	<img src="image/banner/02.png" alt="Chicago" style="width:100%;">
    </div>
    
    <div class="item">
    	<img src="image/banner/03.png" alt="New york" style="width:100%;">
    </div>
    
    </div>

	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    </a>

</div>
</div>


<div class="container">
	<h2>หมวดหมู้สินค้า</h2>
    <div class="row">
    
    <div class="col-md-3">
    	<div class="thumbnail">
   <a href="#">
   <img src="image/product/img01.png" class="img-responsive">
   </a>
        </div>
     </div>
        
     <div class="col-md-3">
        <div class="thumbnail">
      <a href="#">
   <img src="image/product/img01.png" class="img-responsive">
   </a> 
        </div>
      </div>
        
      <div class="col-md-3">
        <div class="thumbnail">
    <a href="#">
   <img src="image/product/img01.png" class="img-responsive">
   </a>
        </div>
      </div>
        
      <div class="col-md-3">
        <div class="thumbnail">
    <a href="#">
   <img src="image/product/img01.png" class="img-responsive">
   </a>
        </div>
      </div>
        
    </div>
</div>


</body>
</html>