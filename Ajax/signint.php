<?php
include_once  '../data/config.php';
if ($_POST["token"] =='GFKBH23BR2H3R29HO2N3') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  try
  {
  
 $pass= md5($password);
 $select_stmt =$db->prepare("SELECT email,pass FROM taikhoan WHERE email=:email OR pass=:pass");
 $select_stmt->execute(array('email'=>$email ,'pass'=>$pass));
 $row   = $select_stmt->fetch(PDO::FETCH_ASSOC);


$passcheck =$row['pass'] ;
$emailcheck =$row['email'];
if($pass==''|| $email==''){
  $status = "400";
  $thongbao ="thiếu thông tin quan trọng";
}elseif
($passcheck==$pass && $emailcheck ==$email){


   $status ="200";
   $thongbao ="Đăng Nhập Thành Công";
   $sql = "SELECT * FROM taikhoan WHERE  `email`='$email' AND `pass`='$pass' " ;
   foreach ($db->query($sql) as $row) 
   {
      $_SESSION['Token'] = $row['token'];

  }
}else{
    $status = "401";
    $thongbao ="sai passs";
 
}

echo json_encode(array('status'=>$status,'msg'=>$msg));
/*
 if($status == "400"){
    $background = "warning alert-dismissible fade show";
    $icon ="tio-new-release-outlined tio-xl";

  }elseif ($status =="401") {
    $background = "danger alert-dismissible fade show";
    $icon ="tio-warning mt-1 mr-1";
  }elseif ($status=="200") {
    $background = "success alert-dismissible fade show";
    $icon ="tio-done tio-xl";
  } 
  $msg ='
  <div class="alert alert-'.$background.'" role="alert">
  <strong> <i class="'.$icon.'"></i>OMG!</strong> '.$thongbao.'.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="tio-clear tio-lg"></i></button>
  </div>';

  */



}catch (PDOException $e)
  {
     die("Có Lỗi Gì đó đã xảy ra: " . $e->getMessage());
  }
  
  
}