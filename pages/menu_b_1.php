<?php
/* www/pages/menu_a_1.php */
include_once('../common.php');

// 페이지 제목
$g5['title'] = "조합소개";

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>
<h3 style="font-size:2rem; font-weight:bold; margin-bottom:30px;">생애진로프로그램</h3>
<div class="img_wrap">
    <img src="images/menu_b_1.jpg" alt="생애진로 프로그램 개요" style="width:100%; max-width:930px;">
</div>

<?php
include_once(G5_PATH.'/tail.php');
?>