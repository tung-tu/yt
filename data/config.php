<?php
session_start();
// print_r(PDO::getAvailableDrivers());
Class TungCMS {
    private  $server = "mysql:host=localhost;dbname=ttt";
    private  $user = "ttt";
    private  $pass = "ttt";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $con;
     
                public function ketnoi()
                 {
                   try
                     {
                      
              $this->con = new PDO($this->server, $this->user,$this->pass,$this->options);
              return $this->con;
                    }
                   catch (PDOException $e)
                     {
                         die("Lỗi Kết Nối Đến Cơ Sở Dữ Liệu: " . $e->getMessage());
                     }
                 }
    public function closeketnoi() {
         $this->con = null;
      }
    }
    $ketnoi = new TungCMS();
    $db = $ketnoi->ketnoi();

?>    