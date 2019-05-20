<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-05-20
 * Time: 오전 10:04
 */

$data = array(
    "src_lang" => "kr",
    "target_lang" => "en",
    "query" => "$_GET[data]"
);

$headers = array("Authorization: KakaoAK 2b31f2b2ad89d1f2576d0bf4c6e0450b");

$url = "https://kapi.kakao.com/v1/translation/translate" . "?" . http_build_query($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);        // curl header 설정
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);   // Certification 오류 해결 : https://unikys.tistory.com/347
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);   // Certification 오류 해결 : https://unikys.tistory.com/347

$response = curl_exec($ch);
//curl_close($ch);

//var_dump($response);          //결과 값 출력
//print_r(curl_getinfo($ch));   //모든 정보 출력
//echo curl_errno($ch);         //에러 번호 출력
//echo curl_error($ch);         //에러 정보 출력
print($response);

?>