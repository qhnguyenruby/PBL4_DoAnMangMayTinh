
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>The Picture Detail</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <style>
    body{background-color: #f2f2f2; color: #333;}
    .main{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; margin-top: 10px;}
    h3{background-color: #4294D1; color: #f7f7f7; padding: 15px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35);}
    .img-box{margin-top: 20px;}
    .img-block{float: left; margin-right: 5px; text-align: center;}
    p{margin-top: 0;}
    img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
</style>
</head>

<body>
  <center>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-3 bg-info p-4 rounded">
        <h2 class="bg-light p-2 rounded text-center text-dark">ID Picture: <?php echo $Image->id; ?></h2>
        <div class="text-center">
        	<div class="img-block">
        		<?php
                 $img_src = "http://192.168.1.91:81/db_androi/images/".$Image->image."";
                ?>
        		<img src="<?php echo $img_src; ?>" 
                   width="300" height="200" class="img-responsive" align = "center" />
        	</div>
        </div>
        <h4 class="text-light">Name Picture: <?php echo $Image->name; ?></h4>
      </div>
    </div>
  </div>
      <p><a href="javascript:history.back()">Go Back</a></p>
    </center>
</body>

</html>