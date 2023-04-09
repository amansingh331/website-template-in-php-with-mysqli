<?php
include('../include/database_config.php');
include('checkupload.php');
$blog_id=$_POST['blog_id'];
$query="SELECT * FROM blogs WHERE blog_id='$blog_id'";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../images/";

if(isset($_POST['pupdate'])){    
$blog_img=$_FILES['blog_img']['name'];        
if($blog_img==""){
    $blog_img=$data['blog_img'];
}else{
    $pdone = Upload('blog_img',$target_dir);
}
    
    
$blog_heading=mysqli_real_escape_string($db,$_POST['blog_heading']);
$blog_short_des=mysqli_real_escape_string($db,$_POST['blog_short_des']);
$blog_link=mysqli_real_escape_string($db,$_POST['blog_link']);
  
 
if($pdone=="error"){
    header("location:../index.php?editblog=true&msg=error");
}else{
$query="UPDATE blogs SET ";
$query.="blog_img='$blog_img',";
$query.="blog_heading='$blog_heading',";
$query.="blog_short_des='$blog_short_des',";
$query.="blog_link='$blog_link' WHERE blog_id='$blog_id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../index.php?editblog=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $blog_id=$_GET['del'];
    $query="DELETE FROM blogs WHERE blog_id='$blog_id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../index.php?editblog=true#done");
}
}


if(isset($_POST['addblog'])){    
$blog_img=$_FILES['blog_img']['name'];        
if($blog_img==""){
    $blog_img=$data['blog_img'];
}else{
    $pdone = Upload('blog_img',$target_dir);
}
    
$blog_heading=mysqli_real_escape_string($db,$_POST['blog_heading']);
$blog_short_des=mysqli_real_escape_string($db,$_POST['blog_short_des']);
$blog_link=mysqli_real_escape_string($db,$_POST['blog_link']);

 
if($pdone=="error"){
    header("location:../index.php?editblog=true&msg=error");
}else{
$query="INSERT INTO blogs (blog_heading,blog_img,blog_short_des,blog_link) ";
$query.="VALUES ('$blog_heading','$blog_img','$blog_short_des','$blog_link')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../index.php?editblog=true&msg=updated");
}    

}    
    
}