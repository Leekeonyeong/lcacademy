<?php
/* www/pages/menu_a_1.php */
include_once('../common.php');

// 페이지 제목
$g5['title'] = "강사진 소개";

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>


<h3 style="font-size:2rem; font-weight:bold; margin-bottom:30px;">운영진 소개</h3>

<div class="container manager_btn row" style="margin:0 auto;">
    <div class="col-sm-6 col-lg-3 text-center mb-5"><!-- 강사 리스트 -->
        <img class="rounded-circle" src="images/thumb_instructor_01.jpg" alt="대표이사 여찬희"><!-- 강사 썸네일 -->
        <p class="text-center lead mb-1"><strong style="font-weight:bold;">여찬희</strong></p><!-- 강사 이름 -->
        <p class="text-center">대표 소행성코치</p><!-- 강사 직책 -->
    </div>
    <div class="col-sm-6 col-lg-3 text-center mb-5"><!-- 강사 리스트 -->
        <img class="rounded-circle" src="images/thumb_instructor_02.jpg" alt="교육총괄이사 김현아"><!-- 강사 썸네일 -->
        <p class="text-center lead mb-1"><strong style="font-weight:bold;">김현아</strong></p><!-- 강사 이름 -->
        <p class="text-center">교육총괄이사</p><!-- 강사 직책 -->
    </div>
    <div class="col-sm-6 col-lg-3 text-center mb-5"><!-- 강사 리스트 -->
        <img class="rounded-circle" src="images/thumb_instructor_03.jpg" alt="운영총괄이사 김재기"><!-- 강사 썸네일 -->
        <p class="text-center lead mb-1"><strong style="font-weight:bold;">김재기</strong></p><!-- 강사 이름 -->
        <p class="text-center">운영총괄이사</p><!-- 강사 직책 -->
    </div>
    <div class="col-sm-6 col-lg-3 text-center mb-5"><!-- 강사 리스트 -->
        <img class="rounded-circle" src="images/thumb_instructor_04.jpg" alt="홍보마케팅이사 최성혁"><!-- 강사 썸네일 -->
        <p class="text-center lead mb-1"><strong style="font-weight:bold;">최성혁</strong></p><!-- 강사 이름 -->
        <p class="text-center">홍보마케팅이사</p><!-- 강사 직책 -->
    </div>
</div>

<div class="container manager_list">
    <div class="row"><!-- 강사 프로필 -->
        <div class="col-lg-3 text-center">
            <img class="rounded-circle" src="images/thumb_instructor_01.jpg" alt="대표이사 여찬희"><!-- 강사 썸네일 -->
            <p class="text-center lead mb-1"><strong style="font-weight:bold;">여찬희</strong></p><!-- 강사 이름 -->
            <p class="text-center">대표 소행성코치</p><!-- 강사 직책 -->
        </div>
        <div class="col-lg-9">
            <div class="card mb-2">
                <h6 class="card-header bg-primary" style="font-weight:bold!important; color:white!important">주요경력</h4>
                <div class="card-body">
                    <ul>
                        <li>현) 생애진로학교 대표</li>
                        <li>현) 국민연금공단 노후준비 전문강사(민간)</li>
                        <li>현) 국방전직교육원 전직기본교육 외래교수</li>
                        <li>현) 인지어스(유) 직업훈련강사</li>
                        <li>현) ㈜아이앤드디코리아 책임연구원, 수석코치</li>
                        <li>전) 한국생애설계협회 인증라이프플래너(CLP)</li>
                        <li>전) ㈜이지엠휴먼월드 전문강사</li>
                        <li>전) 테크빌교육㈜ 즐거운학교, 부모공감 코치</li>
                        <li>전) ㈜휴넷 주니어코치 및 기업강사</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-2">
                <h6 class="card-header bg-success" style="font-weight:bold!important; color:white!important">강의 영역</h4>
                <div class="card-body">
                    <ul>
                        <li>생애진로코치 자격과정, 그림책라이프코치 자격과정,</li>
                        <li>생애설계 7대 영역, 커리어, 전직지원, 인간관계, 여가설계, </li>
                        <li>4차산업혁명과 직업의 변화, 산업트렌드, 미래인재역량, 리더십, </li>
                        <li>부모교육, 교사연수, 퍼실리테이션, 심리검사 해석 및 상담 등</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-2">
                <h6 class="card-header bg-info" style="font-weight:bold!important; color:white!important">저서 및 연구물</h4>
                <div class="card-body">
                    <ul>
                        <li>코업강점카드 개발자 (저작권등록 013232)</li>
                        <li>[생애설계워크북] 생각나무,2017.        </li>
                        <li>[커리어탐구생활] 이지엠휴먼월드, 2017.</li>
                        <li>직업상담사 2급, 인증라이프플래너(CLP), 창직지도사 2급, 갈등관리사 2급, 스마트커리어코치, 학습컨설턴트 2급, 부모교육인성지도사 2급, </li>
                        <li>고용노동부 성취진행자, CAP+진행자, HI프로그램진행자,  MBTI일반강사, 다중지능평가사, 그림책큐레이터 1급, 감정코칭전문가, POS FT, 스파크러닝 FT, 코액티브 코칭, HOLLAND∙DISC∙버크만∙애니어그램 등 각종 심리검사 수료</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="display:none;"><!-- 강사 프로필 -->
        <div class="col-lg-3 text-center">            
            <img class="rounded-circle" src="images/thumb_instructor_02.jpg" alt="교육총괄이사 김현아"><!-- 강사 썸네일 -->
            <p class="text-center lead mb-1"><strong style="font-weight:bold;">김현아</strong></p><!-- 강사 이름 -->
            <p class="text-center">교육총괄이사</p><!-- 강사 직책 -->
        </div>
        <div class="col-lg-9">
            <div class="card mb-2">
                <h6 class="card-header bg-primary" style="font-weight:bold!important; color:white!important">주요경력</h4>
                <div class="card-body">
                    <ul>
                        <li>현) 생애진로학교 부대표 / 교육총괄</li>
                        <li>현) ㈜아이앤드디코리아 수석코치</li>
                        <li>전) 서울시교육청 서울학습도움센터 학습상담사</li>
                        <li>전) 다중지능연구소 연구강사</li>
                        <li>전) 테스트온㈜ 강사</li>
                        <li>전) M인재연구소 강사</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-2">
                <h6 class="card-header bg-success" style="font-weight:bold!important; color:white!important">강의 영역</h4>
                <div class="card-body">
                    <ul>
                        <li>생애진로코치 자격과정, 그림책라이프코치 자격과정,</li>
                        <li>생애설계 총론 및 7대 영역, 커리어개발 및 관리, </li>
                        <li>4차 산업혁명과 직업의 변화, 미래인재역량, 다중지능 및 강점코칭, </li>
                        <li>부모교육, 교사연수, 진로진학, 인성, 리더십</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-2">
                <h6 class="card-header bg-info" style="font-weight:bold!important; color:white!important">저서 및 자격</h4>
                <div class="card-body">
                    <ul>
                        <li>리터러시 학습교구 공동개발자 (ISBN 978-89-5891-982-7), 2019.</li>
                        <li>[아는 만큼 보인다] ㈜부크크, 2019.</li>
                        <li>[즐거운 공부, 행복한 나! 한글 익히기] 서울시교육청, 2018.</li>
                        <li>[학습전략 워크북] 경기학습종합클리닉 고양거점센터, 2017.</li>
                        <li>그림책감정코칭지도사 1급, 그림책큐레이터 1급, 다중지능전문강사, 리더십강사, 학습코칭1급FT,  아동청소년라이프코치, 심리상담사1급, 인지학습심리상담사 2급, 미술심리상담사, 다문화지도사, 취업전문강사과정, 부모교육인성지도사2급, P.E.T과정</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="display:none;"><!-- 강사 프로필 -->
        <div class="col-lg-3 text-center">            
            <img class="rounded-circle" src="images/thumb_instructor_03.jpg" alt="운영총괄이사 김재기"><!-- 강사 썸네일 -->
            <p class="text-center lead mb-1"><strong style="font-weight:bold;">김재기</strong></p><!-- 강사 이름 -->
            <p class="text-center">운영총괄이사</p><!-- 강사 직책 -->
        </div>
        <div class="col-lg-9">
            <div class="card mb-2">
                <h6 class="card-header bg-primary" style="font-weight:bold!important; color:white!important">주요경력</h4>
                <div class="card-body">
                    <ul>
                        <li>현) 생애진로학교 부대표 / 운영총괄</li>
                        <li>현) J.S융합인재교육㈜강원지부 교육팀장/드론전문강사</li>
                        <li>현) 한국진로개발원 드론전문가/직업군인 직업체험강사</li>
                        <li>현) 민관협력 재난대응드론긴급운용팀(촬영팀)</li>
                        <li>현) 성북50플러스 스카이론 커뮤니티 대표</li>
                        <li>현) 마포지부 50플러스 알파 드론축구단 선수</li>
                        <li>현) 춘천시 드론스포츠협회 교육이사</li>
                        <li>현) 춘천시 우루샤 드론축구단 선수</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-2">
                <h6 class="card-header bg-success" style="font-weight:bold!important; color:white!important">강의 영역</h4>
                <div class="card-body">
                    <ul>
                        <li>한국스카이드론지도사 자격과정, </li>
                        <li>4차산업혁명과 미래역량, 진로 & 직업체험캠프 운영 및 강의,</li>
                        <li>코딩드론, 드론조립/정비, 드론조종사, 드록축구, 드론항공촬영 및 편집</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-2">
                <h6 class="card-header bg-info" style="font-weight:bold!important; color:white!important">저서 및 자격</h4>
                <div class="card-body">
                    <ul>
                        <li>드론전문가 도전기, 부크크, 2019.</li>
                        <li>드론조종자 국가 자격</li>
                        <li>드론조립,정비사 민간자격</li>
                        <li>드론교육전문가 1급 민간자격 </li>
                        <li>드론조립,정비사 과정 수료</li>
                        <li>드론 조종자 과정 수료</li>
                        <li>드론지도조종자 과정 수료</li>
                        <li>국방드론보안운영자 과정 수료</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="display:none;"><!-- 강사 프로필 -->
        <div class="col-lg-3 text-center">            
            <img class="rounded-circle" src="images/thumb_instructor_04.jpg" alt="홍보마케팅이사 최성혁"><!-- 강사 썸네일 -->
            <p class="text-center lead mb-1"><strong style="font-weight:bold;">최성혁</strong></p><!-- 강사 이름 -->
            <p class="text-center">홍보마케팅이사</p><!-- 강사 직책 -->
        </div>
        <div class="col-lg-9">
            <div class="card mb-2">
                <h6 class="card-header bg-primary" style="font-weight:bold!important; color:white!important">주요경력</h4>
                <div class="card-body">
                    <ul>
                        <li>현) 생애진로학교 홍보마케팅총괄</li>
                        <li>현) (협)해피쿱투어, 이사, 마을여행해설가</li>
                        <li>현) (사)숲을찾는사람들, 도시여행해설가</li>
                        <li>현) 강북구청,강북구문화관광해설사</li>
                        <li>현) (협)성아들, 성북동역사문화해설사마을여행,</li>
                        <li>현) (협)경춘누리, 숲체험가이드 트레킹강사</li>
                        <li>전) City Bank, Arthur Andersen등 외국계기업 인사교육전문가</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-2">
                <h6 class="card-header bg-success" style="font-weight:bold!important; color:white!important">강의 영역</h4>
                <div class="card-body">
                    <ul>
                        <li>해설가양성, 역사문화해설, 트레킹, 걷기 여행,</li>
                        <li>인사교육, 경영 & HRD컨설턴트</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-2">
                <h6 class="card-header bg-info" style="font-weight:bold!important; color:white!important">저서 및 자격</h4>
                <div class="card-body">
                    <ul>
                        <li>자연환경해설사, 걷기지도사, 길문화해설사, 요가지도사</li>
                        <li>산림청 100대 명산 완등, 18개 산악형국립공원완등</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  
    </div>
</div>
<p class="btn_close_list mb-4">
목록으로 돌아가기
</p>
<div style="width:0; height:0; display:block; clear:both;"></div>
<script>
    $('.manager_btn > div').click(function(){
        var index = $(this).index();
        $('.btn_close_list').show();
        $('.manager_list').show();
        $('.manager_list > div').hide();
        $('.manager_list > div').eq(index).show();
        $('html, body').stop().animate({scrollTop: $('.manager_list').offset().top - 100}, 100);
    })
    $('.btn_close_list').click(function(){
        $('html, body').stop().animate({scrollTop: 0}, 100);
    })
</script>
<?php
include_once(G5_PATH.'/tail.php');
?>