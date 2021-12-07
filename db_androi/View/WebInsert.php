
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h3 class="text-center text-dark mt-2">Add A New Picture</h3>
      </div>
    </div>
    <form action="C_Add.php" method="POST" enctype="multipart/form-data">
        <table>
                <TR>
                    <TD>Picture Name:</TD>
                    <TD><input type="text" name="ta" value= "" placeholder="Enter Picture Name" required></TD>
                </TR>
                 <TR>
                    <TD>Picture Link:</TD>
                    <TD>  <input type="file" name="duongdan" value= "" required></TD>
                </TR>
                <TR>                  
                    <TD><input type="submit" name="sthem" value="Confirm" class = "btn btn-primary p-2"></TD> 
                    <TD><input type="Reset" name="rs" value="Reset" class = "btn btn-primary p-2"></TD>             
                </TR>
        </table>
        </form>
    <p><a href="javascript:history.back()">Go Back</a></p>
  </div>
  </center>
</body>
</html>