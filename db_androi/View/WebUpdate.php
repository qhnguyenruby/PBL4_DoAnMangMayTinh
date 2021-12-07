 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<title>Show Image in PHP - Campuslife</title>
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
            
   
    <div class="container main">
        <h3>Editing Picture</h3>
        <div class="img-box">   
            <form action="C_Update.php" method="POST" enctype="multipart/form-data">
            <table>
               <TR>               
                    <TD><input type="hidden" name="id" value= "<?php echo $Image->id; ?>" readonly></TD>
                </TR>
                <TR>
                    <TD>Picture Name:</TD>
                    <TD><input type="text" name="ta" value= "<?php echo $Image->name; ?>" required></TD>
                </TR>
                 <TR>
                    <TD>Picture Link:</TD>
                    <TD><input type="hidden" name="oldimage" value= "<?php echo $Image->image; ?>">
                        <input type="file" name="newimage" ></TD>
                </TR>
                <TR>           
                    <TD><input type="hidden" name="idac" value= "<?php echo $Image->id_account; ?>" readonly></TD>
                </TR>
                <TR>
                    <TD>The Picture:</TD>
                    <TD>
                        <div class="img-block">
                        <?php
                        $img_src = "http://192.168.1.91:81/db_androi/images/".$Image->image."";
                        ?>
                        <img src="<?php echo $img_src; ?>" title="<?php echo $Image->name; ?>" 
                        width="300" height="200" class="img-responsive" align = "center" />
                        
                    </TD>
                </TR>                                                  
        </table>
                <input type="submit" name="ssua" value="Confirm" class="btn btn-danger p-2"></TD>
                <input type="Reset" name="rs" value="Reset" class="btn btn-danger p-2"></TD>    
        </form>
        
        </div>     
        </div>
    </div>
    <p><a href="javascript:history.back()">Go Back</p>
         </center>
</body>
</html>