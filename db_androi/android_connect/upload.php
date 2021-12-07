
<?php 
    include_once("Connect.php");
    Connect("photo_db");
    
    $result["name"]= getAccountNameByID(getIdByUsername($_POST['username']));
    echo json_encode($result);

    if(isset($_POST['image'])){
        $target_dir = "../images/";
        $name=$_POST['imageName'];
        $username=$_POST['username'];  
        $id_account = getIdByUsername($username);     
        $image = $_POST['image'];
        $imageStore = rand()."_".time().".jpeg";
        $target_dir = $target_dir."/".$imageStore;
        file_put_contents($target_dir, base64_decode($image));

        $result=array();
        $sql = "INSERT INTO image(id, name, image, id_account) VALUES (NULL, '$name', '$imageStore', '$id_account')";
        $result = ExecuteQuery($sql);
        if($result){
            echo "Image uploaded";
        }
        else{
            echo "Error, Try Again!";
        }
    }
    
    function getIdByUsername($username)
    {
        $rs=ExecuteQuery("select * from account where username = '$username'");
        $row=mysqli_fetch_array($rs);
        $id = $row['id'];
        return $id;
    }
    function getAccountNameByID($id)
    {
        $rs=ExecuteQuery("select * from account where id = '$id'");
        $row=mysqli_fetch_array($rs);
        $name = $row['name'];
        return $name;
    }
 ?>