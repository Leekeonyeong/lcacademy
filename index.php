<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<div class="container">
    <div class="container_box">
        <p class="txt_big">"우연이 아닌 선택이 우리의 운명을 결정합니다"</p>
        <p class="txt_small">생애진로학교는 삶의 균형과 행복을 추구하는 개인과 조직을 돕고자 탄생하였습니다</p>
        <p class="txt_small">생애 과정에서 만나는 다양한 영역의 문제를 통찰과 협력을 통하여 해결하고 한 단계 더 성장하도록 지원합니다</p>
    </div>
</div>


<?php
include_once(G5_PATH.'/tail.php');
?>