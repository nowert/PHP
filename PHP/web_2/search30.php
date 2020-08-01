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
</body>
</html>