<?php
include('../include/database_config.php');
include('checkupload.php');
$img_id=$_POST['img_id'];
$query="SELECT * FROM gallery WHERE img_id='$img_id'";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../images/";

if(isset($_POST['pupdate'])){    
$img_url=$_FILES['img_url']['name'];        
if($img_url==""){
    $img_url=$data['img_url'];
}else{
    $pdone = Upload('img_url',$target_dir);
}
  
 
if($pdone=="error"){
    header("location:../index.php?edithome=true&msg=error");
}else{
$query="UPDATE gallery SET ";
$query.="img_url='$img_url' WHERE img_id='$img_id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../index.php?editgallery=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $img_id=$_GET['del'];
    $query="DELETE FROM gallery WHERE img_id='$img_id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../index.php?editgallery=true#done");
}
}


if(isset($_POST['addpic'])){    
$img_url=$_FILES['img_url']['name'];        
if($img_url==""){
    $img_url=$data['img_url'];
}else{
    $pdone = Upload('img_url',$target_dir);
}


 
if($pdone=="error"){
    header("location:../index.php?editgallery=true&msg=error");
}else{
$query="INSERT INTO gallery (img_url) ";
$query.="VALUES ('$img_url')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../index.php?editgallery=true&msg=updated");
}    

}    
    
}