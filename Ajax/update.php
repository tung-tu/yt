<?php
include_once  '../data/config.php';
include_once  '../data/check.php';


/// đổi thông tin 


if ($_POST["token"] =='W86nTmzWhqt6gjJwsDPpLReUzEe4UlMSimhRFN0R') {
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 try
{
     
     $sql = "UPDATE `taikhoan` SET `lastname`= '$lastname' , `firstname` = '$firstname' , `email` = '$email' WHERE `token` = '$mytoken'" ;
     $affectedrows  = $db->exec($sql);



   if(isset($affectedrows))
    {
       $status ='200';
       $data = "Record has been successfully updated";
    }          
}
catch (PDOException $e)
{
    $status ='400';
    $data = "There is some problem in connection: " . $e->getMessage();
}
echo json_encode(array(
    'status'=>$status,
    'msg'=>$data
));
}



///////// dổi mật khẩu 


if ($_POST["token"] =='GFKBH23BR2H3R29HO2N3') {
   $t = $_POST['pass'];
   $tt =$_POST['newpass'];
    $ttt= $_POST['Confirm'];
    $pass = md5($t);
  
    ///e10adc3949ba59abbe56e057f20f883e
     $newpass = md5($tt);
     $Confirm = md5($ttt);
    try
   {
        
       
   if($t==''){
    $status ='400';
    $data = "Mật khẩu cũ để trống";
   }elseif($tt ==''){
    $status ='400';
    $data = "Mật khẩu mới để trống";
   }elseif($ttt ==''){
    $status ='400';
    $data = "Confirm Mật khẩu mới để trống";
    
   }elseif($mypass != $pass){
    $status ='400';
    $data = "Mật khẩu cũ không đúng";
   }elseif($mypass == $newpass){
    $status ='400';
    $data = "Mật khẩu mới không được giống mật khẩu cũ";
   }elseif($newpass != $Confirm){
    $status ='400';
    $data = "Mật khẩu mới không giống nhau";
   }else{
    $sql = "UPDATE `taikhoan` SET  `pass` = '$pass' WHERE `token` = '$mytoken'" ;
        $affectedrows  = $db->exec($sql);
   
      if(isset($affectedrows))
       {
          $status ='200';
          $data = "Record has been successfully updated";
       }    
     }     
   }
   catch (PDOException $e)
   {
       $status ='400';
       $data = "There is some problem in connection: " . $e->getMessage();
   }
   echo json_encode(array(
       'status'=>$status,
       'msg'=>$data
   ));
}

//// check pass đúng
if ($_POST["token"] =='FIN2Y98NE0XH1N39X1N8F') {
    $check = $_POST['pass'];
    $pass =md5($check);
    $fa=json_decode(file_get_contents("https://2fa.live/tok/$myemail"),true);
    $facc = $fa['token'];
   if($mypass != $pass){
    $status ='400';
    $data = "Mật khẩu không đúng";
    $check ="n2/n/n/n3/32/2ed2/2e/e322";
   }elseif($mypass == $pass){
    $status ='200';
    $data = "Xác Minh Thành Công";
    $check ='<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Bật Xác Thực 2 Yếu Tố Ngay</button>

    ';

   } 
   echo json_encode(array(
       'status'=>$status,
       'msg'=>$data,
       'check'=>$check,
       'code'=>$facc
       
   ));

}


  