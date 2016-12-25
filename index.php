<?php
function login_bot($url,$data) {
  $curl = curl_init();

  $cookie = "cookies.txt";

  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_TIMEOUT => -1,
    CURLOPT_USERAGENT => "Ma bot",
    CURLOPT_COOKIE => $cookie,
    CURLOPT_COOKIEJAR => $cookie,
    CURLOPT_COOKIEFILE => $cookie,
  ));

  if(curl_errno($curl)) {
    print_r(curl_error($curl));
    die();
  }

  $result  = curl_exec($curl);
  curl_close($curl);
  return $result;

}
$data = ""; // postfields data encoded in URLENCODE
$url = ""; // url of login page
$test = login_bot($url=$url,$data=$data);
echo $test;
?>
