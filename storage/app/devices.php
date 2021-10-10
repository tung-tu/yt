<?php
function svl_ismobile() {
  $is_mobile = '0';
  if(preg_match('/(android|iphone|ipad|up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i', strtolower($_SERVER['HTTP_USER_AGENT'])))
      $is_mobile=1;
  if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']))))
      $is_mobile=1;
  $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
  $mobile_agents = array('w3c ','acs-','alav','alca','amoi','andr','audi','avan','benq','bird','blac','blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno','ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-','maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-','newt','noki','oper','palm','pana','pant','phil','play','port','prox','qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar','sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-','tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp','wapr','webc','winw','winw','xda','xda-');

  if(in_array($mobile_ua,$mobile_agents))
      $is_mobile=1;

  if (isset($_SERVER['ALL_HTTP'])) {
      if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini')>0)
          $is_mobile=1;
  }
  if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows')>0)
      $is_mobile=0;
  return $is_mobile;
}
if(svl_ismobile()){
  $ev= "mobile";
}else{
  $ev= "pc";
}
$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
$windows = stripos($_SERVER['HTTP_USER_AGENT'],"Windows");
$Macbook = stripos($_SERVER['HTTP_USER_AGENT'],"Macbook");
if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
   $trinhduyet = 'Internet Explorer';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) //For Supporting IE 11
 $trinhduyet = 'Internet Explorer';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
 $trinhduyet =  'Mozilla Firefox';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
 $trinhduyet =  'Google Chrome';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
 $trinhduyet =  "Opera Mini";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
 $trinhduyet =  "Opera";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
 $trinhduyet =  "Safari"; 

if( $iPod || $iPhone ){
    $thietbi= "iphone";
}else if($iPad){
  $thietbi= "iPad";
}else if($Android){
  $thietbi= "Android";
}else if($webOS){
  $thietbi= "webOS";
}else if($windows){
  $thietbi= "windows";
}else if($windows){
  $thietbi= "windows";
}else if($Macbook){
  $thietbi= "Macbook";
}


 else
 $thietbi= 'Something else';
 $json = 
array(
  'ev'=>$ev,
  'thietbi' =>$thietbi,
  'trinhduyet'=>$trinhduyet
  );

echo  json_encode($json);
?>


