index.php<?php
include('../include/database_config.php');
include('checkupload.php');
$query="SELECT * FROM social_link";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);


if(isset($_POST['save'])){
        
    
$social_link_facebook=mysqli_real_escape_string($db,$_POST['social_link_facebook']);
$social_link_instagram=mysqli_real_escape_string($db,$_POST['social_link_instagram']);
$social_link_youtube=mysqli_real_escape_string($db,$_POST['social_link_youtube']);
$social_link_github=mysqli_real_escape_string($db,$_POST['social_link_github']);
$social_link_linkedin=mysqli_real_escape_string($db,$_POST['social_link_linkedin']);
$persident_name=mysqli_real_escape_string($db,$_POST['persident_name']);
$persident_mobile_no=mysqli_real_escape_string($db,$_POST['persident_mobile_no']);
$persident_email=mysqli_real_escape_string($db,$_POST['persident_email']);
$faculty_name=mysqli_real_escape_string($db,$_POST['faculty_name']);
$faculty_position=mysqli_real_escape_string($db,$_POST['faculty_position']);
$faculty_branch=mysqli_real_escape_string($db,$_POST['faculty_branch']);  
$faculty_mobile_no=mysqli_real_escape_string($db,$_POST['faculty_mobile_no']);
$faculty_email=mysqli_real_escape_string($db,$_POST['faculty_email']); 
$map_link=mysqli_real_escape_string($db,$_POST['map_link']);

    


    
if($pdone=="error"){
    header("location:../index.php?edithome=true&msg=error");
}else if($cdone=="error"){
    header("location:../index.php?edithome=true&msg=error");
}else{
$query="UPDATE social_link SET ";
$query.="social_link_facebook='$social_link_facebook',";
$query.="social_link_instagram='$social_link_instagram',";
$query.="social_link_youtube='$social_link_youtube',";
$query.="social_link_github='$social_link_github',";
$query.="social_link_linkedin='$social_link_linkedin',";
$query.="persident_name='$persident_name',";
$query.="persident_mobile_no='$persident_mobile_no',";
$query.="persident_email='$persident_email',";
$query.="faculty_name='$faculty_name',";
$query.="faculty_position='$faculty_position',";
$query.="faculty_branch='$faculty_branch',";
$query.="faculty_mobile_no='$faculty_mobile_no',";
$query.="faculty_email='$faculty_email',";
$query.="map_link='$map_link' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../index.php?edithome=true&msg=updated");
}    

}    
    
}
