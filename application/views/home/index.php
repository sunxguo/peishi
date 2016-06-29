	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta content="telephone=no" name="format-detection">
	<meta name="keywords" content="沛时,轻断食果汁,纤体,冷榨蔬果汁,轻断食蔬果汁,沛时轻断食蔬果汁,果汁,果蔬汁,轻断食果蔬汁,冷榨果汁">
	<meta name="description" itemprop="description" content="轻断食果蔬汁沛时，3天变美计划。营养学家设计的冷压鲜榨果蔬汁餐单，每天6瓶连续3天，排出体内毒素，激发细胞修复力，减去多余脂肪、美颜、身体变轻盈，充满青春活力！新鲜水果与蔬菜冷压鲜榨，全程冷链免费送达。">
	<meta name="description" itemprop="name" content="轻断食果蔬汁沛时，3天变美计划">
	<meta name="description" itemprop="image" content="/assets/images/re_index_logo.png">
	<title>沛时，源于科技回归自然</title>
	<script src="index_files/v.htm" charset="utf-8"></script>
	<script src="/assets/js/ntkfstat.js" charset="utf-8" async="" type="text/javascript"></script>
	<script type="text/javascript" src="/assets/js/base.js"></script>
	<script type="text/javascript" src="/assets/js/common.js"></script>
	<script type="text/javascript" src="/assets/js/global.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript">
	var NTKF_PARAM = {
		siteid:"kf_9700",                   
	  	settingid:"kf_9700_1410331097630",
	  	itemid:"",
	  	uid:"",
	  	uname:"",
	  	orderid:"<",
	  	orderprice:"",
	  	userlevel:""
	} 
	</script>
	<script src="" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/global.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/base.css">
	<script src="index_files/userinfo.php" charset="utf-8" async="async" type="text/javascript"></script>
	<script data-requiremodule="lang" src="/assets/js/zh_cn.js" charset="utf-8" async="async" type="text/javascript"></script><script data-requiremodule="chatManage" src="/assets/js/chat.js" charset="utf-8" async="async" type="text/javascript"></script><script data-requiremodule="Window" src="/assets/js/nt2.js" charset="utf-8" async="async" type="text/javascript"></script></head>
	<body>
		<div class="wrap Wrap">
			<!-- <div class="navtop">
				<div class="navtop_box">
									<div class="login_bar">

					</div>
									<div class="navtop_info">沛于己，时在行!</div>
				</div>
			</div> -->
			<div class="header" style="border-bottom: 1px solid #7ac143;">
				<div class="heard_warp clearfix">
					<div class="logo">
						<a href="/"></a>
						<img src="/assets/images/re_index_logo.png" width="100px">
					</div>
					<div class="header_bar HeaderBar">
						<ul>
							<li><a class="this" href="/" style="color:#222222;">首页</a></li>
							<li><a class="" href="/home/service" style="color:#222222;">品牌理念</a></li>
							<li><a class="" href="/home/productlist" style="color:#222222;">产品</a></li>
							<li><a class="" href="/home/comment" style="color:#222222;">论坛</a></li>
							<li><a class="" href="/home/brand" style="color:#222222;">品牌活动</a></li>
							
						</ul>
						<div class="shoping_car">
							<a class="ShoppingCarLink" href=""></a>
						</div>
					</div>
					
				</div>
			</div>
<div class="main">
				
	<div class="index_main">
		<div class="banner BannerSlider">
			<ul class="product_slides_btn SlidesStop">
				<?php foreach($sliders as $key=>$slider):?>
				<li class="btn0 <?php echo $key==0?'this':'';?>">
					<a href="javascript:;"></a>
				</li>
				<?php endforeach;?>
			</ul>
			<ul style="height: 505.875px;" class="BannerBox">
				<?php foreach($sliders as $key=>$slider):?>
				<li class="<?php echo $key==0?'this':'';?>">
					<a href="<?php echo $slider->islink==0?'/home/essay?id='.$slider->id:$slider->link;?>">
						<img src="<?php echo $slider->thumbnail;?>" width="100%">
					</a>	
				</li>
				<?php endforeach;?>
			</ul>
			<a href="javascript:;" class="pic_pre BannerPre"><img src="/assets/images/a.png" width="100%;"></a>
			<a href="javascript:;" class="pic_next BannerNext"><img src="/assets/images/a.png" width="100%;"></a>
		</div>
		<div class="re_index_01">
			<div class="re_index_tittle">沛时生果汁</div>
			<div class="re_index_pro clearfix">
				<?php foreach($qingduanguoshus as $key=>$qdgs):?>
				<div class="re_index_pro_list" <?php if($key>2):?>style="margin-top: 30px;"<?php endif;?>>
					<a href="<?php echo $qdgs->islink==0?'/home/essay?id='.$qdgs->id:$qdgs->link;?>" class="re_index_pro_a">
						<div class="re_index_pro_tit"><?php echo $qdgs->title;?></div>
						<div class="re_index_pro_box">
							<ul>
								<li class="re_index_pro_img"><img src="<?php echo $qdgs->thumbnail;?>" height="137px" width="250px"></li>
								<li class="re_index_pro_info"><?php echo $qdgs->summary;?></li>
							</ul>
						</div>
					</a>
					<!-- <div class="re_index_pro_btn"><a href="<?php echo $qdgs->islink==0?'/home/essay?id='.$qdgs->id:$qdgs->link;?>">查看详情</a></div> -->
				</div>
				<?php endforeach;?>
			</div>
		</div>
		<?php if(isset($santianbianmei[0])):?>
		<div class="re_index_02">
			<div class="re_index_02_three">
				<div class="re_index_02_tit">"沛时"轻断食果蔬汁<span>3</span>天变美计划</div>
				<!-- <p>每月定时轻断食，严格控制热量摄入，每天600~800卡路里的冷压果蔬汁餐单，为身体提供必须营养和能量的同时，消耗掉身体多余的糖分和脂肪，以健康的方式控制体重，获得好身材。</p> -->
				<p class="pt10 pb10"><?php echo $santianbianmei[0]->content;?></p>
				<img src="<?php echo $santianbianmei[0]->thumbnail;?>">
			</div>
		</div>
		<?php endif;?>
		<?php if(isset($meiriliuping[0])):?>
		<div class="re_index_03"><img src="<?php echo $meiriliuping[0]->thumbnail;?>" width="100%"></div>
		<?php endif;?>
		<div class="re_index_04" style="border-bottom: 1px solid #aaaaaa;">
			<div class="re_index_04_cont" >
				<div class="re_index_04_box">
					<div class="re_index_nice">
						<div class="re_index_nice_t"><a href=""><img src="/assets/images/re_index_03.png"></a></div>
						<div class="re_index_nice_b">
							<div class="re_index_nice_box ReindexBox">
								<ul>
									<?php foreach($peishizuoce as $key=>$pszc):?>
									<li class="<?php echo $key==0?'this':'';?>">
										<a href="<?php echo $qdgs->islink==0?'/home/essay?id='.$qdgs->id:$qdgs->link;?>">
											<img src="<?php echo $pszc->thumbnail;?>">
										</a>
									</li>
									<?php endforeach;?>
								</ul>
							</div>
						</div>
					</div>
					<div class="re_index_04_gks">
						<div class="re_index_gks_t">
						<?php if(isset($bufenpinglunyoushang[0])):?>
							<?php if($bufenpinglunyoushang[0]->islink==1):?>
							<a href="<?php echo $bufenpinglunyoushang[0]->link;?>"><img src="<?php echo $bufenpinglunyoushang[0]->thumbnail;?>"></a>
							<?php else:?>
							<img src="<?php echo $bufenpinglunyoushang[0]->thumbnail;?>">
							<?php endif;?>
						<?php endif;?>
						</div>
						<div class="re_index_gks_b">
							<ul class="clearfix mt10">
							<?php foreach($qinduanshi as $qds):?>
								<li>
									<div class="comments_list_gks">
										<a class="comments_list_img" href=""><img alt="玛格丽特公主 " src="<?php echo $qds->thumbnail?>"></a>
										<a class="comments_list_avatar" href=""><img src="<?php echo $qds->authorAvatar;?>"></a>
									</div>
									<div class="comments_list_text"><?php echo $qds->content?></div>
									<div class="comments_list_name"><?php echo $qds->summary?></div>
								</li>
							<?php endforeach;?>	
								<!-- <li class="ml10 mr10">
									<div class="comments_list_gks">
										<a class="comments_list_img" href=""><img alt="玛格丽特公主 " src="/assets/images/re_index_06.jpg"></a>
										<a class="comments_list_avatar" href=""><img src="/assets/images/546b16a0aae5b.jpg"></a>
									</div>
									<div class="comments_list_text">第二次用HJ，依然辣么舒服，喝hj主要想排毒，很喜欢这次的暖身款 下月再见咯[拜拜] @"沛时" …</div>
									<div class="comments_list_name">Iam方美丽同學 </div>
								</li>
								<li>
									<div class="comments_list_gks">
										<a class="comments_list_img" href=""><img alt="玛格丽特公主 " src="/assets/images/re_index_07.jpg"></a>
										<a class="comments_list_avatar" href=""><img src="/assets/images/55506fc62adee.jpg"></a>
									</div>
									<div class="comments_list_text">#Kelly萌·life#Better me with "沛时"#空瓶记#完美收官 @"沛时"。</div>
									<div class="comments_list_name">Kelly萌 </div>
								</li> -->

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="index_content_03 TranTop" style="margin-top:50px;">
			<h2>品牌活动</h2>
			<ul class="clearfix">
				<?php foreach($pinpaihuodong as $pphd):?>
				<li>
					<a href="<?php echo $qdgs->islink==0?'/home/essay?id='.$qdgs->id:$qdgs->link;?>">
						<img src="<?php echo $pphd->thumbnail;?>">
						<img src="/assets/images/3.png" class="pngbox" width="320px;">
						<div class="blog_info">
							<p class="blog_data"><?php echo date("Y/m/d",strtotime($pphd->time));?></p>
							<p class="blog_tit"><?php echo $pphd->title;?></p>
						</div>
					</a>
				</li>
				<?php endforeach;?>
				
			</ul>
			
		</div>
	</div>
	<script type="text/javascript">
	var cwidth=$('.CommentsSilder  li').width(parseInt($(document).width()/3));
	$('.BannerBox').css('height',$(document).width()*720/1920);
	$('.CommentsSilderBox').height($(document).width()*640/1920);
	</script>
	<script type="text/javascript">

	$(function(){
		//首页图片
			var num =1,
				list = $('.CommentsSilder  li'),
				len = list.length,
				liwidth = cwidth.width(),
				aDiv = $('.CommentsSilderBox'),
				aUl = $('.CommentsSilder'),
				_aUl = $('.CommentsSilder_2'),
				boxwidth = function(){
					aUl.css('width',liwidth*len);
					_aUl.css({
						'width':aUl.width(),
						'left' : -liwidth*len
					});
					
				}();

				$(".PicNext").click(function(){
					if (!$('.CommentsSilderBox ul').is(':animated')) {
						var ulleft = aUl.position().left;
						var _ulleft = _aUl.position().left;
						var maxleft = -liwidth*(len-4);
						
						if(ulleft == -liwidth*(len-3)){

							_ulleft = liwidth*3;
							_aUl.css('left',_ulleft);
						}

						if(ulleft < maxleft || ulleft >0){

							$('.CommentsSilder_2').animate({'left':_ulleft-liwidth},'slow').html(aUl.html());

						}

						if(_ulleft == -liwidth*(len-3)){

							ulleft = liwidth*3;
							aUl.css('left',ulleft);
						}
						if(ulleft <=  $(document).width() && ulleft > -liwidth*len){

							aUl.animate({'left':ulleft-liwidth},'slow');

						}
					}
					

					
				});

				$(".PicPre").click(function(){
					if (!$('.CommentsSilderBox ul').is(':animated')) {
						var ulleft = aUl.position().left;
						var _ulleft = _aUl.position().left;
						var  maxleft= $(document).width();
						if(ulleft == 0){

							_ulleft = -liwidth*len;
							_aUl.css('left',_ulleft);
						}

						if(_ulleft < maxleft){

							$('.CommentsSilder_2').animate({'left':_ulleft+liwidth},'slow').html(aUl.html());

						}

						if(_ulleft == 0){

							ulleft = -liwidth*len;
							aUl.css('left',ulleft);
						}
						if(ulleft >= -liwidth*len && ulleft < $(document).width()){

							aUl.animate({'left':ulleft+liwidth},'slow');

						}
					}
					

					
				});
				
				var pTimer = null;
				var pNum = 0;
				var pLen = $('.ProImg > img').length;
				pTimer = setInterval(function(){
					$('.ProImg > img').removeClass('this').eq(pNum).addClass('this');
					pNum++;
					if(pNum > pLen-1){
						pNum = 0;
					}
					
				},3000);
		//nice
		var reNum = 0;
		var reLen = $('.ReindexBox li').length;
		var reTime = setInterval(reFun,2000);
		function reFun(){
			reNum++;
			if(reNum == reLen){
				reNum = 0;
			}
			$('.ReindexBox li').removeClass('this');
			$('.ReindexBox li:eq('+reNum+')').addClass('this');
		};
		$('.ReindexBox').on('mouseover',function(){
			clearInterval(reTime)
		})
		$('.ReindexBox').on('mouseleave',function(){
			reTime = setInterval(reFun,2000);
		})
	})
	</script>
			</div>
				    <div class="footer" style="border-bottom: 1px solid #aaaaaa;">
							<div class="footer_logo" >
								<?php if(isset($cidibushang[0])):?>					
									<img src="<?php echo $cidibushang[0]->thumbnail;?>" type="image/svg+xml" width="100px" >
								<?php endif;?>
							</div>
							<div class="footer_info">
								<!-- <div class="eq_code">
									<?php if(isset($cidibuzuo[0])):?>
										<?php echo $cidibuzuo[0]->content;?>
									<?php endif;?>
								</div> -->
								<div class="about_we">
										<?php if(isset($cidibuzhong[0])):?>
											<?php echo $cidibuzhong[0]->content;?>
										<?php endif;?>
										<span style="font-size:16px; color:#666666;">7x12小时专心服务，请通过任意方式联系我们</span>
                                    <div style="margin-right:-400px; margin-top:-100px; " >
										<!--<?php if(isset($cidibuzuo[0])):?>
											<?php echo $cidibuzuo[0]->content;?>
										<?php endif;?>-->
										<span style="float:left; margin-left:680px; color:#222222;">大型合作：market@newperse.cn</span><br/>
										<span style="float:left; margin-left:680px; color:#222222;">微信公众号：persejuice</span><br/>
										<span style="float:left; margin-left:680px; color:#222222;">客服热线：4006-801-201</span><br/>
									</div>
								</div>


								
								<!-- <div class="better_me" style="margin-top:-26px;">
									<?php if(isset($cidibuyou[0])):?>
										<?php echo $cidibuyou[0]->content;?>
									<?php endif;?>
								</div> -->
							</div>
						</div>
						<div class="friendly_link">
							<ul>
								<li><a href="/home/aboutus" style="color: #666666; font-size:16px;">关于沛时</a></li>
								<li><a href="/home/contactus" style="color: #666666; font-size:16px;">联系我们</a></li>
								<li><a href="/home/help" style="color: #666666; font-size:16px;">帮助中心</a></li>
								<li><a href="/home/brand" style="color: #666666; font-size:16px;">品牌活动</a></li>
								<!-- <li><a href="http://www.heyjuice.cn/Delivery/index"></a></li> -->
							</ul>
							<div class="f12 mt30 mb10" style="width:950px; margin-left:auto; margin-right:auto; margin-top:10px; color:#aaaaaa;">
			               	    <p>
			               	    	<?php if(isset($dibu[0])):?>
										<?php echo $dibu[0]->content;?>
									<?php endif;?>
								</p>
	                       	</div>
						</div>
					</div>
		<!-- 弹出层 -->
		<div class="mask_pro MarkWrap"></div>

		<script type="text/javascript" charset="utf-8">
		  $(function() {
		      $("img.lazy").lazyload({effect: "fadeIn"});
		  });
		</script>


	</body></html>