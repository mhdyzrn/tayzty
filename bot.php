<?php
require("config.php");


$ua = array("Origin: http://localhost:8080","User-Agent: Mozilla/5.0 (Linux; Android 5.1; A1603 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/43.0.2357.121 Mobile Safari/537.36","Content-Type: application/json","Referer: http://localhost:8080/","Accept-Language: id-ID,en-US;q=0.8","X-Requested-With: com.tayzty.app");


$banner = "\033[0;31m               ━┏┛┏━┃┃ ┃━━┃━┏┛┃ ┃
                ┃ ┏━┃━┏┛┏┛  ┃ ━┏┛
                ┛ ┛ ┛ ┛ ━━┛ ┛  ┛
\033[0;32m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
\033[1;32mAuthor By  \033[1;31m: \033[1;0mKadal1  \033[1;30m        | \033[1;32mBot Auto Claim
\033[1;32mChannel Yt\033[1;31m :\033[1;0m Jejaka Tutorial \033[1;30m| \033[1;32mAPK TayzTy


";




while (True){
   echo $banner."\033[1;33mMasukkan Coin Yang Agan Akan Tuyul

\033[1;31m1\033[1;32m] \033[1;0mBCH
\033[1;31m2\033[1;32m] \033[1;0mETH
\033[1;31m3\033[1;32m] \033[1;0mLTC
\033[1;31m4\033[1;32m] \033[1;0mETC

\033[1;32mTayzty\033[1;31m >>\033[1;0m ";

  $pil = trim(fgets(STDIN));
  if ($pil == "1"){
      $coin_id = "bch";
      sleep(1);
      system("clear");
      break;
  }if ($pil == "2"){
      $coin_id = "eth";
      sleep(1);
      system("clear");
      break;
  }if ($pil == "3"){
      $coin_id = "ltc";
      sleep(1);
      system("clear");
      break;
  }if ($pil == "4"){
      $coin_id = "etc";
      sleep(1);
      system("clear");
      break;
  }else{
     echo "ERROr : Wrong Input\n";
     sleep(2);
     system("clear");
  }
}



echo $banner."\033[1;33mLogin ";
sleep(1);
echo "\033[1;0m•";
sleep(1);
echo "•";
sleep(1);
echo "•";
$data = json_encode(array("email" =>$email,"passcode" => $passcode,"device_id" => $device_id,"push_token" => $push_token,"coin_id" => $coin_id,"version" => "14"), true);
$connect = "http://app.tayzty.com/api/connect";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $connect);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
$json = json_decode($result, true);
if ($json["data"]["username"] == "Y"){
   sleep(1);
   echo "•";
   sleep(1);
   echo "•\n";
   sleep(1);
   echo "\033[1;31mLogin Filed\n\033[1;33mPlease Check Your Config\n";
   exit();
}if ($json["status"] == true){
   sleep(1);
   echo "•";
   sleep(1);
   echo "•\n";
   sleep(1);
   echo "\033[1;32mLogin Success\n";
   echo "\033[1;32mWelcome To TazTy Bot ".$json["data"]["username"]."\n";
   echo "\033[1;32mPoint \033[1;31m:\033[1;0m ".$json["data"]["points"]." Point\n";
   echo "\033[1;32mCoin  \033[1;31m:\033[1;0m ".$coin_id."\n";
   echo "\033[1;32mIp    \033[1;31m:\033[1;0m ".$json["data"]["ip"]."\n";
}else{
   sleep(1);
   echo "•";
   sleep(1);
   echo "•\n";
   sleep(1);
   echo "\033[1;31mLogin Filed\n\033[1;33mPlease Check Your Config\n";
   exit();
}

echo "\033[1;33m\n\nMengambil Data\033[1;0m ";
$prize = "http://app.tayzty.com/api/prizes";
$data1 = json_encode(array("mode" => "ltc","version" => "14"), true);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $prize);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
$res = curl_exec($ch);
curl_close($ch);
$jsn = json_decode($res, true);
if ($jsn["status"] == true){
   $i = 0;
   while(True){
      sleep(1);
      echo "•";
      if ($jsn["data"][$i]["id"] == null){
         break;
      }
      $i++;
   }
   echo "\n";
}else{
   sleep(1);
   echo "•";
   sleep(1);
   echo "•\n";
   sleep(1);
   echo "\033[1;31mGagal Mengambil Data Prize\n";
   exit();
}
$k = 0;
while(True){
  $data = json_encode(array("email" =>$email,"passcode" => $passcode,"device_id" => $device_id,"push_token" => $push_token,"coin_id" => $coin_id,"version" => "14"), true);
  $connect = "http://app.tayzty.com/api/connect";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $connect);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  $result = curl_exec($ch);
  curl_close($ch);
  $json = json_decode($result, true);
  $nu = rand(0, $i);
  $pos = json_encode(array("passcode" => $json["data"]["passcode"],"user_id" => $json["data"]["id"],"key" => $json["data"]["key"],"prize_id" => $jsn["data"][$nu]["id"],"coin_id" => $coin_id,"version" => "14"), true);
  $spin = "http://app.tayzty.com/api/spin";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $spin);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Origin: http://localhost:8080","User-Agent: Mozilla/5.0 (Linux; Android 5.1; A1603 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/43.0.2357.121 Mobile Safari/537.36","Content-Type: application/json","Referer: http://localhost:8080/","Accept-Language: id-ID,en-US;q=0.8","X-Requested-With: com.tayzty.app"));
  curl_setopt($ch, CURLOPT_POSTFIELDS, $pos);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  $respon = curl_exec($ch);
  curl_close($ch);
  $js = json_decode($respon, true);
  if($js["status"] == true){
     echo "\033[1;32mYou Get \033[1;0m".$js["data"]["points"]." Point \033[1;31m=>\033[1;32m Added To Your Ballance\033[1;0m ".$js["user"]["points"]." Point\n";
  }else{
     $k++;
     if($k == 10){
        echo "\033[1;31mYour Energy Is Low\n";
        sleep(120);
     }
  }
  sleep(40);

}
