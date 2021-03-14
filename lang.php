<?php
// Url ปัจจุบัน
$currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$current_page = basename($_SERVER['PHP_SELF'],'.php');

// ลบค่าภาษาเก่า
$currentUrl = str_replace("?lang=th", "", $currentUrl);
$currentUrl = str_replace("?lang=en", "", $currentUrl);
$currentUrl = str_replace("&lang=th", "", $currentUrl);
$currentUrl = str_replace("&lang=en", "", $currentUrl);
$currentUrl = str_replace(".php", "", $currentUrl);

// หา ? ใน url
if ( strstr( $currentUrl, '?' ) ) {$and = '&';} else {$and = '?';}
$linkLang = $currentUrl.$and;

// เช็คภาษา
if(empty($_GET['lang'])){ $langCurrent = ''; $_GET["lang"] = ''; }else{$langCurrent = 'lang='.$_GET['lang'];}
$lang = $_GET["lang"];

// ตัวแปล
if($lang == 'en'){
    $home = 'Home';
    $aboutus = 'About Us';
    $services = 'Services';
    $service = 'Service';
    $history = 'History';
    $office = 'Main Office';
    $address = '91 Soi.Rangsit-Nakornnayok 25 Yak 1 Tumboon.Prachathipat Aumphur.Thanyaburi Pathumthanee 12130';
    $mission = 'Mission';
    $policy = 'Policy';
}else{
    $home = 'หน้าแรก';
    $aboutus = 'เกี่ยวกับเรา';
    $services = 'งานที่เราบริการ';
    $service = 'งานที่บริการ';
    $history = 'ประวัติความเป็นมา';
    $office = 'สำนักงานใหญ่';
    $address = '91 ซอยรังสิต-นครนายก 25 แยก 1 ต. ประชาธิปัตย์ อ. ธัญบุรี จ. ปทุมธานี 12130';
    $mission = 'พันธกิจ';
    $policy = 'นโยบาย';
}