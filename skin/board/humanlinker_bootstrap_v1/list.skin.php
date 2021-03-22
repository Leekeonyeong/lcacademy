<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');

//<!-- Latest compiled and minified CSS -->
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">', 0);
?>
<style type="text/css">
	.Mtext { /* 제목자르기 */

	width:100%; 
	white-space:nowrap; 
	overflow:hidden; 
	text-overflow:ellipsis; 
	}

	.Mtext1 {
		display:-webkit-box;
		-webkit-line-clamp:1; /* 라인수 */
		-webkit-box-orient:vertical;
		width:100%; 
		white-space:normal;
		line-height:1.3em;
		overflow:hidden;
		text-overflow:ellipsis;
	}

	.Mtext2 {
		display:-webkit-box;
		-webkit-line-clamp:2; /* 라인수 */
		-webkit-box-orient:vertical;
		width:100%; 
		white-space:normal;
		line-height:1.3em;
		height:2.6em;
		overflow:hidden;
		text-overflow:ellipsis;
	/*    text-aline:left; */
	}
</style>
<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">


    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top">
        <?php if ($rss_href || $write_href) { ?>
        <div class="pull-right">
	<!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
		  <div class="btn-group">
			<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
			<?php
			if($sca){
				echo $sca;
			} else{
				echo '분류';
			}
			?>
			<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu">
			  <?php echo $category_option ?>
			</ul>
		  </div>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->

            <?php if ($rss_href) { ?><a href="<?php echo $rss_href ?>" class="btn-primary btn"><i class="fa fa-rss" aria-hidden="true"></i> RSS</a><?php } ?>
            <?php if ($admin_href) { ?><a href="<?php echo $admin_href ?>" class="btn-primary btn"><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</a><?php } ?>
            <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn-primary btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a><?php } ?>
        </div>
        <?php } ?>
        <div id="bo_list_total">
            <span>Total <?php echo number_format($total_count) ?>건</span>
            <?php echo $page ?> 페이지
        </div>
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->
	
	<div id="" class="row" style="margin:10px 0 10px 0">&nbsp;</div>

    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

	 <?php
		 include_once($board_skin_path.'/list_basic.php');

		 if(count($list)==0){
			echo '<center><h4><strong>게시물이 없습니다.</strong></h4></center>';
		 }
	 ?>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <div class="text-right">
            <?php if ($is_checkbox) { ?>
            <button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn-warning"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button>
            <button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn-warning"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button>
            <button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn-warning"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button>
            <?php } ?>
            <?php if ($list_href) { ?><a href="<?php echo $list_href ?>" class="btn-primary btn"><i class="fa fa-list" aria-hidden="true"></i> 목록</a><?php } ?>
            <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn-primary btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a><?php } ?>
        </div>
        <?php } ?>
    </div>
    <?php } ?>

    </form>
     
       <!-- 게시판 검색 시작 { -->
        <form class="form-inline" name="fsearch" method="get">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sop" value="and">
        <select class="form-control" name="sfl" id="sfl">
            <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
            <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
            <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
            <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
            <option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
            <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
            <option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
        </select>
        <input class="form-control" type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
        <button type="submit" value="검색" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
        </form>
    <!-- } 게시판 검색 끝 -->   


   </div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>



<!-- 페이지 -->
<?php echo $write_pages;  ?>


<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>