<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
}

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Bootstrap 4 Template with Gnuboard 3">
<meta name="author" content="No Hoon Park">
<meta property="og:image" content="http://lcaadmin.gabia.io/img/logo.png">

<?php
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.PHP_EOL;

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<title><?php echo $g5_head_title; ?></title>

<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/<?php echo G5_IS_MOBILE ? 'mobile' : 'default'; ?>.css?ver=<?php echo G5_CSS_VER; ?>">

<!-- Bootstrap core CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/font-awesome/css/font-awesome.min.css">

<!-- Custom styles for this template -->
<link href="<?php echo G5_THEME_URL ?>/asset/css/carousel.css" rel="stylesheet">

<style>
body {padding-bottom: 0;}
.carousel { padding-top: 8px;}
</style>
    
<!-- Custom styles for this template
<link href="css/modern-business.css" rel="stylesheet">
-->

<!--  
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/<?php echo G5_IS_MOBILE ? 'mobile' : 'default'; ?>.css?ver=<?php echo G5_CSS_VER; ?>">
-->

<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
</script>

<!-- jQuery CSS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!--
<script src="<?php echo G5_JS_URL ?>/jquery-1.8.3.min.js"></script>
-->

<script src="<?php echo G5_JS_URL ?>/jquery.menu.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script src="<?php echo G5_JS_URL ?>/common.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script src="<?php echo G5_JS_URL ?>/wrest.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script src="<?php echo G5_JS_URL ?>/placeholders.min.js"></script>
<!--
<link rel="stylesheet" href="<?php echo G5_JS_URL ?>/font-awesome/css/font-awesome.min.css">
-->

<!-- Font Awsome CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<?php
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>
</head>

<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>


<?php
if(defined('_INDEX_')) { // index에서만 실행
?>

    <header>
      <div class="jumbotron jumbotron-fluid bg" style="background-image:url('<?php echo G5_THEME_URL ?>/asset/images/slide/boats.jpg')">
        <div class="txt_wrap">
              <h3 style="font-size:3rem!important"><?php echo get_text($g5['title']); ?></h3>
              <p style="font-size:1em; margin-top:50px;">상담 컨설팅은 3차에 걸쳐 진행된다.<br>
                고객은 1차 상담을 통해 현재 자신의 인생 목표와 우선순위를 점검하여 어떤 가치를 중요하게 여기며 살아가고 있는지를 파악한다.<br class="pc_only">
                2차상담에서 고객은 자신의 최종 목표 및 대-중-소 목표를 설정하고 이를 달성하기 위한 대안 및 실천 방안을 작성한다.<br class="pc_only">
                마지막으로 고객은 3차 상담을 통해 실천 방안을 실행하기 위한 시간관리계획을 수립하여 '나만의 생애설계'를 완성하게 된다</p>
        </div>
      </div>
    </header>
      
<?php } ?>
      
      
<!-- 콘텐츠 시작 { -->	
    <main role="main">
<div class="container">