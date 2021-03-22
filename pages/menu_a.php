<?php
/* www/pages/menu_a_1.php */
include_once('../common.php');

// 페이지 제목
$g5['title'] = "조합소개";

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>

<img src="images/menu_a.jpg" alt="회사소개" style="width:100%; max-width:930px;">

<?php
include_once(G5_PATH.'/tail.php');
?>