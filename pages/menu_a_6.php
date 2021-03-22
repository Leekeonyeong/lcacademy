<?php
/* www/pages/menu_a_1.php */
include_once('../common.php');

// 페이지 제목
$g5['title'] = "강사진 소개";

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>


<h3 style="font-size:2rem; font-weight:bold; margin-bottom:30px;">강사진 소개</h3>

<ul class="manager_list" style="display:none;">
    <li style="display:none;"><img src="images/instructor_01.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_02.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_03.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_04.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_05.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_06.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_07.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_08.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_09.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_10.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_11.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_12.jpg" alt=""></li>
    <li style="display:none;"><img src="images/instructor_13.jpg" alt=""></li>
</ul>
<p class="btn_close_list" style="display:none;">
목록으로 돌아가기
</p>
<ul class="manager_btn">
    <li><img src="images/thumb_instructor_01.jpg" alt="대표이사 여찬희"></li>
    <li><img src="images/thumb_instructor_02.jpg" alt="교육총괄이사 김현아"></li>
    <li><img src="images/thumb_instructor_03.jpg" alt="운영총괄이사 김재기"></li>
    <li><img src="images/thumb_instructor_04.jpg" alt="홍보마케팅이사 최성혁"></li>
    <li><img src="images/thumb_instructor_05.jpg" alt="전문강사 김영아"></li>
    <li><img src="images/thumb_instructor_06.jpg" alt="대표강사 정세희"></li>
    <li><img src="images/thumb_instructor_07.jpg" alt="대표강사 김미연"></li>
    <li><img src="images/thumb_instructor_08.jpg" alt="대표강사 정선희"></li>
    <li><img src="images/thumb_instructor_09.jpg" alt="전문코치 윤요한"></li>
    <li><img src="images/thumb_instructor_10.jpg" alt="전문코치 권혜련"></li>
    <li><img src="images/thumb_instructor_11.jpg" alt="전문코치 김수인"></li>
    <li><img src="images/thumb_instructor_12.jpg" alt="전문코치 이경희"></li>
    <li><img src="images/thumb_instructor_13.jpg" alt="전문강사 김진서"></li>
</ul>
<div style="width:0; height:0; display:block; clear:both;"></div>
<script>
    $('.manager_btn li').click(function(){
        var index = $(this).index();
        $('.btn_close_list').show();
        $('.manager_list').show();
        $('.manager_list li').hide();
        $('.manager_list li').eq(index).show();
        $('html, body').stop().animate({scrollTop: 0}, 100);
    })
    $('.btn_close_list').click(function(){
        $(this).hide();
        $('.manager_list').hide();
        $('html, body').stop().animate({scrollTop: 0}, 100);
    })
</script>
<?php
include_once(G5_PATH.'/tail.php');
?>