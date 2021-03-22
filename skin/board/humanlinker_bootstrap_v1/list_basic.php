<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

	<div class="row" style="padding:0 10px 0 10px">
		<!--반복문 시작 { -->
	<?php

        for ($i=0; $i<count($list); $i++) {
			
			$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']); //업로드이미지 경로			

			if($thumb['src']){
				$og_image = $thumb['src'];
			}
			else{
				$og_image = $list[$i]['wr_link2'];			
			}


			$img_content = '<img class="img-responsive" src="'.$board_skin_url.'/img/bg_320_180_p.png" alt="'.$list[$i]['wr_subject'].'" style="background-image:url('.$og_image.'); background-size:cover; background-repeat:no-repeat;background-position:center center;">';
?>
		<div class="media visible-xs"> <div class="media-left media-top"> 

<?php
			echo '<A HREF="'.$list[$i]['href'].'" target="_blank" title="'.$list[$i]['wr_subject'].'"><img src="'.$og_image.'" class="media-object img-rounded" alt="'.$list[$i]['wr_subject'].'" width="120px" height="80px"></A> </div> ';
			echo '<div class="media-body" style="padding:0 10px 0 10px;"> ';
            if ($is_category && $list[$i]['ca_name']) {
				echo '<p><i class="fa fa-1x fa-tag"></i>&nbsp;'.$list[$i]['ca_name'].'</p>';			
			}
			echo '<H5 class="Mtext2"><strong>'.$list[$i]['subject'].'</strong></h5> ';
?>
				<p class="text-right"><div class="form-inline text-right" >
						<button type="button" class="btn btn-default btn-xs" disabled="disabled" title="등록일"><i class="fa fa-fw fa-calendar"></i><?php echo date("y-m-d",strtotime($list[$i]['wr_datetime'])); ?></button>
						<button type="button" class="btn btn-default btn-xs" disabled="disabled" title="조회수">
						  <i class="fa fa-fw fa-eye"></i><?php echo $list[$i]['wr_hit'] ?></button>
            <?php if ($is_good) { ?>
						<button type="button" class="btn btn-default btn-xs" disabled="disabled" title="추천">
						  <i class="fa fa-fw fa-thumbs-up"></i><?php echo $list[$i]['wr_good'] ?></button>
			<?php } ?>			
            <?php if ($is_nogood) { ?>
						<button type="button" class="btn btn-default btn-xs" disabled="disabled" title="비추천">
						  <i class="fa fa-fw fa-thumbs-down"></i><?php echo $list[$i]['wr_nogood'] ?></button>
			<?php } ?>			
			</div></p>

			</div> </div>
			<hr class="visible-xs" style="margin:0 0 0 0">

<!-- 반복{ -->
			<div class="col-xs-12 col-sm-6 col-md-3 hidden-xs" style="padding:0px 3px 0px 3px;">

			<div class="thumbnail" style="padding:0; background-color:#E7E7E7">
<?php 
				echo '<a href="'.$list[$i]['href'].'" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="'.$wr_subject.'">'.$img_content.'</a>';
?>
				<div class="caption" style="padding:0 10px 0 10px;">
					<h5 class="Mtext">
                <?php
                if ($is_category && $list[$i]['ca_name']) {
                 ?>
					<span class="pull-right"><i class="fa fa-fw fa-tag"></i><?php echo $list[$i]['ca_name'] ?></span>
                <?php } ?>
					 <i class="fa fa-fw fa-user"></i><?php echo $list[$i]['wr_name'] ?></h5>
					<h5 class="Mtext2"><A HREF="<?php echo $list[$i]['href'] ?>"><strong><?php echo $list[$i]['subject'] ?></strong></A></h5>

            <?php if ($is_checkbox) { ?>
                <div class="pull-left"><input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>"></div>
            <?php } ?>

					<p class="text-right">
						<i class="fa fa-fw fa-calendar"></i><?php echo date("y-m-d",strtotime($list[$i]['wr_datetime'])); ?>
						<i class="fa fa-fw fa-eye"></i><?php echo $list[$i]['wr_hit'] ?>
            <?php if ($is_good) { ?>						
						  <i class="fa fa-fw fa-thumbs-up"></i><?php echo $list[$i]['wr_good'] ?>
			<?php } ?>
            <?php if ($is_nogood) { ?>						
						  <i class="fa fa-fw fa-thumbs-down"></i><?php echo $list[$i]['wr_nogood'] ?>
			<?php } ?>
					</p>
			  </div> <!-- caption -->

			  </div> <!-- caption -->

			</div> <!-- col-sm-6 col-md-4 -->
		<!-- 반복} -->

		<?php
				} //For문
		?>

		<!--반복문 끝 } -->

		</div> <!--  row -->

