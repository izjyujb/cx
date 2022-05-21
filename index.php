<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>全网最全泄露数据查询</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script>
    	//alert("<a href=\'http://tp.isss.shop/sc.php\'>"+"最新推出网红照妖镜"+"</a>");
    </script>
    <style>
    
        body {
    background-color: #000000;
    color: #d15423;
}

h4 {
    font-family: sans-serif;
    color: #d15423;
    font-size: 16px;
}

h3 {
    font-family: sans-serif;
    color: #d15423;
}

p {
    font-family: sans-serif;
    color: #d15423;
    font-size: 14px;
}

a {
    font-family: sans-serif;
    color: #d15423;
    text-decoration: none;
}

input {
    /*
    border-radius: 5px;
    border-width: 0;
    width: 287px;
    height: 38px;*/
    margin-top: 10px;
    color: #d15423;
    background-color: white;
}

select {
    /*border-radius: 5px;
    border-width: 0;
    width: 287px;
    height: 38px;
    margin-top: 10px;*/
    color: #d15423;
    background-color: white;
}
    </style>
</head>
<center><body>
<div class="container">
    <h1>数据检索</h1><br><br>
        <h3>数据检索
            <form method="post">
            <input type="text" placeholder="查询信息" name="nr" class="form-control" style="margin-bottom:10px">
            <select name="id" class="form-control">
            <option value="0">QQ-MOBILE</option>
            <option value="1">MOBILE-QQ</option>
            <option value="2">QQ-LOL信息</option>
            <option value="3">LOL昵称-QQ</option>
            <option value="4">微博uid-手机</option>
            <option value="5">手机-微博uid</option>
            <option value="6">姓名-户籍</option>
            <option value="7">手机-户籍</option>
			</select>
			<input type="text" name="fhfs" value="txt" style="display:none;">
            <input type="submit" value="查询" class="form-control btn btn-success">
            </form>        
<?php            
if (isset($_POST['fhfs'])) {
    include('api.php');
}
?>
</div>
</body></center></html>
