<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<script>
	$(document).ready(function(){
		$(".slide01").bxSlider({
			pager:false,
			controls:false,
			auto:true
		});
	});
</script>	

<style>
	.slide01{width:100%;height:100%;background-color:white;}
	.slide01>img{width:1200px;height:500px;}

	.gallery_wrap{width:100%}
	.gallery_wrap>ul{width:100%;overflow:hidden}
	.gallery_wrap>ul>li{float:left;width:25%}
</style>

<div class="slide01">
	<div><img src="<? echo G5_THEME_IMG_URL; ?>/flower1200-02.jpg" alt="flower01"></div>
	<div><img src="<? echo G5_THEME_IMG_URL; ?>/flower1200-03.jpg" alt="flower02"></div>
	<div><img src="<? echo G5_THEME_IMG_URL; ?>/flower1200-04.jpg" alt="flower03"></div>
</div>

<div class="gallery_wrap" style="display:none;">
	<ul>
		<li>
			<? echo latest('theme/basic','notice', 5, 15);?>
		</li>
		<li>
			<? echo latest('theme/basic','free', 5, 15);?>
		</li>
		<li>
			<? echo latest('theme/basic','gallery', 5, 15);?>
		</li>
		<li>
			<? echo latest('theme/basic','qa', 5, 15);?>
		</li>
	</ul>
</div>
<div style="margin:20px 0;">
	<? echo latest('theme/dkrnss','free',4,20);?>
</div>
<div>
	<? echo latest('theme/dkrnss','board01',4,20);?>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>