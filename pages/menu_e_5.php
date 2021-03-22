<?php
/* www/pages/menu_a_1.php */
include_once('../common.php');

// 페이지 제목
$g5['title'] = "조합소개";

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>

<h3 style="font-size:2rem; font-weight:bold; margin-bottom:30px;">오시는 길</h3>
<img src="images/map.jpg" alt="오시는 길" style="width:100%; max-width:930px;">
<p class="lead">(우)02872 서울시 성북구 지봉로 24길 26 (보문동 5가 35번지) 성북50플러스센터 3층 두근두근오피스 생애진로학교</p>
<p style="margin-bottom:500px;">

<?php
include_once(G5_PATH.'/tail.php');
?>