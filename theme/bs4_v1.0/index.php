<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');
?>

<?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php } ?>

      

  <div class="container" style="text-align:center; margin-bottom:50px;">
    <h4 style="font-size:3em!important;">ABOUT</h4>
    <p>생애진로학교는 21년 3월부터 '생애설계 상담 센터'를 운영할 것이며 상담고객은 생애설계 전문 상담사로부터 컨설팅을 받게 됩니다</p>
  </div>   
      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">상담대상</h4>
            <div class="card-body">
              <p class="card-text">진로설정이 필요한 청소년부터 직업 및 경력설계가 필요한 2030세대, 노후 준비를 위한 자산관리 전략이 궁금한 4050세대까지 전연령을 대상으로 생애설계 상담 컨설팅</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">상담분야</h4>
            <div class="card-body">
              <p class="card-text">상담컨설팅의 분야는<br>▲직업/경력<br>▲재무<br>▲건강<br>▲가족 및 사회적 관계<br>▲여가 및 취미생활로 총 5개</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">상담운영</h4>
            <div class="card-body">
              <p class="card-text">고객이 원하는 분야에 맞춰 상담 컨설팅이 이루어지도록 상담사를 세분화 하여 운영</p>
            </div>
          </div>
        </div>
      </div>

      
	<hr class="featurette-divider">


      <div class="container" style="text-align:center;  margin:50px auto;">
  <h4 style="font-size:2em!important;">우리의 컨설턴트</h4>
  <p>자신에게 딱 맞는 컨설턴트를 찾아보세요. 다양한 분야의 생애 컨설턴트가 있답니다</p>
</div>


      <!-- Three columns of text below the carousel -->
      <div class="row marketing" style="text-align:center;">
          <div class="col-lg-3">
            <img class="rounded-circle" src="http://lcaadmin.gabia.io/pages/images/thumb_instructor_01.jpg" width="140" height="140">
            <p><h4>여찬희</h4></p>
            <p>대표컨설턴트/대표이사</p>
          </div><!-- /.col-lg-3 -->
          <div class="col-lg-3">
            <img class="rounded-circle" src="http://lcaadmin.gabia.io/pages/images/thumb_instructor_02.jpg" width="140" height="140">
            <p><h4>김현아</h4></p>
            <p>교육총괄이사</p>
          </div><!-- /.col-lg-3 -->
          <div class="col-lg-3">
            <img class="rounded-circle" src="http://lcaadmin.gabia.io/pages/images/thumb_instructor_05.jpg" width="140" height="140">
            <p><h4>김영아</h4></p>
            <p>전문강사</p>
          </div><!-- /.col-lg-3 -->
          <div class="col-lg-3">
            <img class="rounded-circle" src="http://lcaadmin.gabia.io/pages/images/thumb_instructor_09.jpg" width="140" height="140">
            <p><h4>윤요한</h4></p>
            <p>전문코치</p>
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      <div class="container" style="text-align:center; margin-bottom:50px;">
      <a href="http://lcaadmin.gabia.io/pages/menu_a_5.php" class="btn btn-primary">강사진 전체보기</a>
      </div>


      
      <hr class="featurette-divider">
      <!-- /.row -->
      <div class="container" style="margin:50px auto;">
      <div class="row">
        <div class="col-lg-6" style="margin-bottom:50px;">
          <h4 style="font-size:2em!important;">CONTACT</h4>
          <p>언제든지 생애진로학교에 문의해주세요, 최선을 다해 응대하겠습니다</p>
          <a href="http://lcaadmin.gabia.io/bbs/board.php?bo_table=counseling" class="btn btn-success">상담신청하기</a>
        </div>
        <div class="col-lg-6">                    
        <h4 style="font-size:2em!important;">오시는 길</h4>                  
          <img src="http://lcaadmin.gabia.io/pages/images/map.jpg" alt="지도" style="width:100%; max-width:930px;">
          <p>(우)02872 서울시 성북구 지봉로 24길 26 (보문동 5가 35번지) <br class="pc_only">성북50플러스센터 3층 두근두근오피스 생애진로학교</p>
        </div>
      </div>
      </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>