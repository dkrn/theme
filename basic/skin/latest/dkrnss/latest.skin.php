<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<style>
.wrap{width: 1200px; margin: 0 auto; background: #fff;}
.section{padding: 30px 0; width: 950px; margin: 0 auto;}
.section:after{content:""; clear: both; display: block;}

.section .section_title{float: left; width: 150px;}
.section .section_title h3{font-size:20px; font-weight: bold; color:#333;}
.section .section_title .more_btn{display: block; width: 23px; height: 23px; background:url(./img/more_btn01.png) 0 -23px no-repeat; text-indent:-9999px; margin-top: 14px;}
.section .section_title .more_btn:hover{background-position:0 0;}

.section .section_content{float: right; width: 800px;}
.news_list:after{content:""; clear: both; display: block;}
.news_list li{float: left; border-left: 1px solid #dddedf; width: 200px; padding-left: 20px; box-sizing:border-box;}
.news_list li:first-child{border-left: 0; padding-right: 30px;}
.news_list li+li{padding-right: 30px;}

.news_list a{color:#888;}
.news_list .news_title{font-size:20px; height: 84px; color:#56565e; margin-bottom: 37px;}
.news_list .date{font-size:13px;}
</style>

<div class="wrap">
	<div class="section">
		<div class="section_title">
			<h3><? echo $bo_subject; ?></h3>
			<a href="<? echo G5_BBS_URL ?>/board.php?bo_table=<? echo $bo_table; ?>" class="more_btn">more</a>
		</div>
		<div class="section_content">
			<ul class="news_list">
				<? for($i=0;$i<count($list);$i++){ ?>
				<li>
					<a href="<? echo $list[$i]['href']; ?>">
						<h4 class="news_title">
							<? echo $list[$i]['subject']; ?>
						</h4>
						<span class="date">
							<? echo $list[$i]['datetime2']; ?>
						</span>
					</a>
				</li>
				<? } ?>
				<? if(count($list)==0){ ?>
					<li>게시물이 업읍니다.</li>
				<? } ?>
			</ul>
		</div>
	</div>
</div>