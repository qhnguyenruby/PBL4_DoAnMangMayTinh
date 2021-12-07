
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
        <h3 class="text-center text-dark mt-2">Picture Management</h3>
      </div>
    </div>
    <form action="C_Search.php" method="GET">
        <div class="col-md-10">
        <h4>Search For Picture:</h4>
        </div>
         <table>
                <tr>
                    <td>Enter Picture Name:</td>
                    <td><input type="text" name="stringtim"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="stim" value ="Tim Kiem"></td>
                    <td><input type="reset" name="" value="Reset"></td>
                </tr>
            </table>
    </form>
    <form action="C_Add.php" method="Post">   
        <input type="submit" name="sadd" value ="Add A New Picture" class="btn btn-success p-2">                     
    </form>
      <div class="col-md-8">
         <?php
            if(is_null($ImageList))
            {
            ?>
                <h3 class="text-center text-dark mt-2">The Picture You Looking For Is Not Found</h3>
                    <center><p><a href="javascript:history.back()">Go Back</p></center>
            <?php
            }
            else
            {
            ?>
        <h3 class="text-center text-dark mt-2">List Of Picture</h3>
       
            <table class="table table-hover" id="data-table">
                <thead>
             <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
            </thead>
          <tbody>
            <?php        
                for ($i = 1 ; $i <= sizeof($ImageList); $i++)
                {

                ?>  
                <td font_size = "0.8em"><?php echo $ImageList[$i]->id; ?></td>  
                <div class="img-block">
                <td> <img src = "<?php echo $ImageList[$i]->image; ?>" width="" height="" class="img-responsive">
                </div>

                <td><?php echo $ImageList[$i]->name; ?></td>           
                  <td>
                    <a href="C_Detail.php?id=<?php echo $ImageList[$i]->id; ?>" class="btn btn-primary p-2">Detail</a> |
                    <a href="C_Delete.php?id=<?php echo $ImageList[$i]->id; ?>" class="btn btn-danger p-2" onclick="return confirm('Do you want delete this record?');">Delete</a> |
                    <a href="C_Update.php?id=<?php echo $ImageList[$i]->id; ?>" class="btn btn-success p-2">Edit</a>
                  </td>
                </tr>
            <?php
                 } 
             }
             ?>
            
          </tbody>
        </table>
      </div>
    </div>
    
  </div>
  </center>
</body>
</html>