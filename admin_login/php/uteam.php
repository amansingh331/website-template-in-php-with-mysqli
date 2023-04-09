<?php
include('../include/database_config.php');
include('checkupload.php');
$member_id=$_POST['member_id'];
$query="SELECT * FROM team_member WHERE member_id='$member_id'";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../images/";

if(isset($_POST['pupdate'])){    
$member_image=$_FILES['member_image']['name'];        
if($member_image==""){
    $member_image=$data['member_image'];
}else{
    $pdone = Upload('member_image',$target_dir);
}
    
    
$member_name=mysqli_real_escape_string($db,$_POST['member_name']);
$member_body=mysqli_real_escape_string($db,$_POST['member_body']);
$member_branch=mysqli_real_escape_string($db,$_POST['member_branch']);
$member_position=mysqli_real_escape_string($db,$_POST['member_position']);
  
 
if($pdone=="error"){
    header("location:../index.php?edithome=true&msg=error");
}else{
$query="UPDATE team_member SET ";
$query.="member_image='$member_image',";
$query.="member_name='$member_name',";
$query.="member_body='$member_body',";
$query.="member_branch='$member_branch',";
$query.="member_position='$member_position' WHERE member_id='$member_id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../index.php?editportfolio=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $member_id=$_GET['del'];
    $query="DELETE FROM team_member WHERE member_id='$member_id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../index.php?editportfolio=true#done");
}
}


if(isset($_POST['addmember'])){    
$member_image=$_FILES['member_image']['name'];        
if($member_image==""){
    $member_image=$data['member_image'];
}else{
    $pdone = Upload('member_image',$target_dir);
}
    
$member_name=mysqli_real_escape_string($db,$_POST['member_name']);
$member_body=mysqli_real_escape_string($db,$_POST['member_body']);
$member_branch=mysqli_real_escape_string($db,$_POST['member_branch']);
$member_position=mysqli_real_escape_string($db,$_POST['member_position']);

 
if($pdone=="error"){
    header("location:../index.php?editportfolio=true&msg=error");
}else{
$query="INSERT INTO team_member (member_name,member_body,member_image,member_branch,member_position) ";
$query.="VALUES ('$member_name','$member_body','$member_image','$member_branch','$member_position')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../index.php?editportfolio=true&msg=updated");
}    

}    
    
}