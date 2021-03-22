<?php
/* www/pages/menu_a_1.php */
include_once('../common.php');

// 페이지 제목
$g5['title'] = "사업분야";

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>
<h3 style="font-size:2rem; font-weight:bold; margin-bottom:30px;">사업분야</h3>
<div class="img_wrap">
<img src="images/menu_a_3.jpg" alt="사업분야" style="width:100%; max-width:930px;">
</div>
<p class="pc_only" style="margin-bottom:500px;">
</p>

<?php
include_once(G5_PATH.'/tail.php');
?>