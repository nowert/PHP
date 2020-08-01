<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-color: #F5F5F5;
}
</style>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<?php echo $sele; ?>
<?php include("navbar.php"); ?>
<?php if ($sele=="index"){ ?>
<div class="container">
<div class="panel-body center-block">
  <form name="form1" method="post" action="">
    <label for="keyword"></label>
    <div class="col-xs-3">
    <input type="text" name="keyword" id="keyword" placeholder="ป้อนสินค้าที่ต้องการค้นหา" class="form-control input-lg">
    </div>
    
    <div class="col-xs-3">
    <select name="select" id="select" class="form-control input-lg">
      <option value="0" selected>--เลือกรายการค้นหา--</option>
      <option value="1">รองเท้า</option>
      <option value="2">ถุงเท้า</option>
      <option value="3">กางเกง</option>
    </select>
    </div>
    <div class="col-xs-3">
    <select name="select" id="select" class="form-control input-lg">
      <option value="0" selected>--เลือกการจัดเรียง--</option>
      <option value="1">ราคามากสุดไปหาถูกสุด</option>
      <option value="2">ราคาถูกสุดไปหามากสุด</option>
    </select>
    </div>
    <div class="col-xs-3">
          <input type="submit" name="button" id="button" value="ค้นหา" class="btn btn-primary btn-lg">
     </div>
     </form>
  </div>
</div>

 <!--//////////////////////////////////slide show/////////////////////////////////////-->
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    
      <div class="item active">
        <img src="image/banner/01.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="image/banner/02.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="image/banner/03.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
 
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>
<!--///////////////////////////////////////////////////////////////////////-->
  <div class="container">

  <h2>สินค้ายอดนิยม</h2>
  	<div class="row">
     <div class="col-md-4">
      <div class="thumbnail">
   <a href="#">
   <img src="image/product/img01.png" class="img-responsive" alt="Cinque Terre">
   </a>
      </div>
     </div>
     <div class="col-md-4">
      <div class="thumbnail">
   <a href="#">
    <img src="image/product/img02.png" class="img-responsive" alt="Cinque Terre"> 
       </a>
      </div>
     </div>
     <div class="col-md-4">
      <div class="thumbnail">
   <a href="#">
     <img src="image/product/img03.png" class="img-responsive" alt="Cinque Terre"> 
        </a>
      </div>
    </div>
    
     <div class="col-md-4">
      <div class="thumbnail">
	   <a href="#">
      <img src="image/product/img04.png" class="img-responsive" alt="Cinque Terre"> 
      </a>
       </div>
     </div>
     
    </div>

	</div>
    
    <div class="container">
  <h2>หมวดหมู่สินค้า</h2>
  <div class="row">
  <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/04.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
      <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/02.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
      <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/03.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
      <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/01.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
      <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/05.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
      <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/04.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
  </div>
  
    <div class="row">
  <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/04.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
      <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/02.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
      <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/03.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
      <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/01.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
      <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/05.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
      <div class="col-sm-2">
  <div class="thumbnail">
  <img src="image/catagory/04.png" class="img-responsive" alt="Cinque Terre"> 
  	</div>
    </div>
  </div>
  
  </div>
  <?php } else if($sele=="product") {?>
<?php echo "<h1 align=\"center\">สินค้า</h1>" ?>

  <?php } else if($sele=="howtobuy") {?>
  <?php echo "<h1 align=\"center\">วิธีการชำระเงิน</h1>" ?>
  <?php } else if($sele=="regis") {?>
  <?php include("member_regis.php"); ?>
  <?php } ?>
  
  
  <footer class="container-fluid" style=" background:#000; color:#FFF; height:200px;margin:auto; text-align:center; padding:30px">
  Copyright by <a href="mailto:linkinneo@gmail.com">linkinneo@gmail.com</a> Year 2019<br>
  Create with PHP,Mysql,Bootstrap
  </footer>
  
</body>
</html>