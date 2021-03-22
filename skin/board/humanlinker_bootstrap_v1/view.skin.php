<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->




<article id="bo_v" style="width:<?php echo $width; ?>">

<div class="panel panel-default">

  <div class="panel-heading">
		<h4><strong>
            <?php if ($category_name) { ?>
            <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 ?></span> 
            <?php } ?>
            <span class="bo_v_tit">
            <?php
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?></span>
		</strong></h4>
  
  </div><!-- panel-heading -->
 
  <div class="panel-body">


    <section id="bo_v_atc">

        <?php

        // 유튜브 출력
		if($view['wr_1']){

			echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/'.$view['wr_1'].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>';
            echo "<br>";
			
		} 

        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count && !$view['wr_link1']) {
            echo "<div id=\"bo_v_img\">\n";

            for ($i=0; $i<=count($view['file']); $i++) {
                if ($view['file'][$i]['view']) {
                    //echo $view['file'][$i]['view'];
                    echo get_view_thumbnail($view['file'][$i]['view']);
                }
            }

            echo "</div>\n";
            echo "<br>";
        }

         ?>
		
        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

	<div id="" class="row" style="margin:10px 0 10px 0">&nbsp;</div>

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>

    <div id="bo_v_share" class="pull-right">
        <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn btn-info" onclick="win_scrap(this.href); return false;"><i class="fa fa-thumb-tack" aria-hidden="true"></i> 스크랩</a><?php } ?>

        <?php
        include_once(G5_SNS_PATH."/view.sns.skin.php");
        ?>
    </div>

        <!--  추천 비추천 시작 { -->
        <?php if ( $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="bo_v_good btn btn-success" title="추천"><i class="fa fa-fw fa-thumbs-up"></i><strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood btn btn-danger" title="비추천"><i class="fa fa-fw fa-thumbs-down"></i><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span class="bo_v_good"><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span class="bo_v_nogood"><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <!-- }  추천 비추천 끝 -->
    </section>



    <?php
    $cnt = 0;
    if ($view['file']['count']) {
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
     ?>

    <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
	<div id="" class="row" style="margin:10px 0 10px 0">&nbsp;</div>
    <section id="bo_v_file">
        <ul>
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <li>
                <i class="fa fa-download" aria-hidden="true"></i>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong>
                </a>
                <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>

    <?php if(isset($view['link'][1]) && $view['link'][1]) { ?>
    <!-- 관련링크 시작 { -->
	<div id="" class="row" style="margin:10px 0 10px 0">&nbsp;</div>
    <section id="bo_v_link" class="alert alert-warning">
        <ul>
        <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
            ?>
            <li>
                <i class="fa fa-link" aria-hidden="true"></i> <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    
                    <strong><?php echo $link ?></strong>
                </a>
                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
            </li>
            <?php
            }
        }
        ?>
        </ul>
    </section>
    <!-- } 관련링크 끝 -->
    <?php } ?>

  </div><!-- panel-body -->

  <div class="panel-footer">
    <section id="bo_v_info">
        <i class="fa fa-fw fa-user"></i> <strong><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></strong>
        <strong><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?>회</strong>
        <strong class="if_date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>
        <strong><a href="#bo_vc"> <i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo number_format($view['wr_comment']) ?>건</a></strong>
    </section>
  </div>

</div><!-- panel panel-default -->

	<div id="" class="row" style="margin:10px 0 10px 0">&nbsp;</div>

    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
        ?>

        <div class="pull-right">
            <?php if ($update_href) { ?><a href="<?php echo $update_href ?>" class="btn-primary btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 수정</a><?php } ?>
            <?php if ($delete_href) { ?><a href="<?php echo $delete_href ?>" class="btn-primary btn" onclick="del(this.href); return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> 삭제</a><?php } ?>
            <?php if ($reply_href) { ?><a href="<?php echo $reply_href ?>" class="btn-primary btn"><i class="fa fa-reply" aria-hidden="true"></i> 답변</a><?php } ?>
            <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn-warning btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a><?php } ?>
        </div>

        <div class="text-left">
            <?php if ($search_href) { ?><a href="<?php echo $search_href ?>" class="btn-primary btn"><i class="fa fa-search" aria-hidden="true"></i> 검색</a><?php } ?>
           <a href="<?php echo $list_href ?>" class="btn-primary btn"><i class="fa fa-list" aria-hidden="true"></i> 목록</a>
        <?php if ($prev_href || $next_href) { ?>
            <?php if ($prev_href) { ?><a href="<?php echo $prev_href ?>" class="btn-primary btn"><i class="fa fa-caret-up" aria-hidden="true"></i> 이전글</a> <?php } ?>
            <?php if ($next_href) { ?><a href="<?php echo $next_href ?>" class="btn-primary btn"><i class="fa fa-caret-down" aria-hidden="true"></i> 다음글</a><?php } ?>
        <?php } ?>
            <?php if ($copy_href) { ?><a href="<?php echo $copy_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;"><i class="fa fa-files-o" aria-hidden="true"></i> 복사</a><?php } ?>
            <?php if ($move_href) { ?><a href="<?php echo $move_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;"><i class="fa fa-arrows" aria-hidden="true"></i> 이동</a><?php } ?>

		</div>



        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->

	<div id="" class="row" style="margin:10px 0 10px 0">&nbsp;</div>

    <?php
    // 코멘트 입출력
    include_once(G5_BBS_PATH.'/view_comment.php');
     ?>


</article>
<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();

    //sns공유
    $(".btn_share").click(function(){
        $("#bo_v_sns").fadeIn();
   
    });

    $(document).mouseup(function (e) {
        var container = $("#bo_v_sns");
        if (!container.is(e.target) && container.has(e.target).length === 0){
        container.css("display","none");
        }	
    });
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->