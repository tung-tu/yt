<?php

    include_once  'config.php';
    $mytoken =$_SESSION['Token'];
    try
    {
   
      
        $sql = "SELECT * FROM taikhoan WHERE token = '$mytoken'" ;
        foreach ($db->query($sql) as $row) {
            $myemail =$row['email'];
            $mypass =$row['pass'];
            $myname  =$row['firstname']." ".$row['lastname'];
        }
    }
    catch (PDOException $e)
    {
        die( "có lỗi gì đó xảy ra: " . $e->getMessage());
    }

?>