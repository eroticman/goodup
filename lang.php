<?php
// เช็คภาษา
if(empty($_GET['lang'])){ $langCurrent = ''; $_GET["lang"] = ''; }else{$langCurrent = '?lang='.$_GET['lang'];}
$lang = $_GET["lang"];
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

// ตัวแปล
if($lang == 'en'){
    $home = 'Home';
    $aboutus = 'About Us';
    $services = 'Services';
}else{
    $home = 'หน้าแรก';
    $aboutus = 'เกี่ยวกับเรา';
    $services = 'งานที่เราบริการ';
}