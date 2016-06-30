<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="telephone=no" name="format-detection">
<meta name="keywords" content="HeyJuice,轻断食果汁,纤体,冷榨蔬果汁,轻断食蔬果汁,HeyJuice轻断食蔬果汁,果汁,果蔬汁,轻断食果蔬汁,冷榨果汁">
<meta name="description" content="轻断食果蔬汁HeyJuice，3天变美计划。营养学家设计的冷压鲜榨果蔬汁餐单，每天6瓶连续3天，排出体内毒素，激发细胞修复力，减去多余脂肪、美颜、身体变轻盈，充满青春活力！新鲜水果与蔬菜冷压鲜榨，全程冷链免费送达。">
<title>沛时，生于科技回归自然</title>
<script src="index_files/v.htm" charset="utf-8"></script><script src="/assets/js/ntkfstat.js" charset="utf-8" async="" type="text/javascript"></script><script type="text/javascript" src="/assets/js/base.js"></script>
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
<script src="index_files/userinfo.php" charset="utf-8" async="async" type="text/javascript"></script><script data-requiremodule="lang" src="/assets/js/zh_cn.js" charset="utf-8" async="async" type="text/javascript"></script><script data-requiremodule="chatManage" src="/assets/js/chat.js" charset="utf-8" async="async" type="text/javascript"></script><script data-requiremodule="Window" src="/assets/js/nt2.js" charset="utf-8" async="async" type="text/javascript"></script></head>
<body>
	<div class="wrap Wrap">
		<!-- <div class="navtop">
			<div class="navtop_box">
								<div class="login_bar">
					
				</div>
								<div class="navtop_info">沛于己，时在行！</div>
			</div>
		</div> -->
		<div class="header ">
			<div class="heard_warp clearfix">
				<div class="logo">
					<a href="/"></a>
					<img src="/assets/images/re_index_logo.png" width="100px">
				</div>
				<div class="header_bar HeaderBar">
					<ul>
						<li><a class="" href="/" style="color:#222222;">首页</a></li>
						<li><a class="this" href="/home/service" style="color:#222222;">品牌理念</a></li>
						<li><a class="" href="/home/productlist" style="color:#222222;">产品</a></li>
						<li><a class="" href="/home/brand" style="color:#222222;">品牌活动</a></li>
						<li><a class="" href="/home/comment" style="color:#222222;">论坛</a></li>
					</ul>
					<div class="shoping_car">
						<a class="ShoppingCarLink" href="http://www.heyjuice.cn/ShoppingCar">
																				</a>
					</div>
				</div>
				
			</div>
		</div>
			<div class="about_nav" style="border-top: 1px solid #7ac143;">
				<a href="/home/service" class="">品牌信念</a>
				<a href="/home/productservice" style="color:#8ac354;"> 产品工艺</a>
				<a href="/home/hpp" class=""> HPP技术</a>
			</div>
								<div class="main">
			
<div class="technics_main">
	<div class="product_content_1">
		<h2><?php echo $productservicebig[0]->title;?></h2>
		<p><?php echo $productservicesmall[0]->title;?></p>
		<ul>
			<?php foreach($productservice1 as $ps):?>
			<li>
				<img style="display: inline;" src="<?php echo $ps->thumbnail;?>" class="lazy" data-original="/Public/Home/images/product_icon_01.png" alt="">
				<div>
					<h3><?php echo $ps->title;?></h3>
					<?php echo $ps->content;?>
				</div>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
	<?php if(count($productservice2)>0):?>
	<div class="technics_content_1">
		<img style="display: inline;" src="<?php echo $productservice2[0]->thumbnail;?>" class="lazy" data-original="images/pro_banner.jpg" alt="" width="100%">
	</div>
	<?php endif;?>
	<?php if(count($productservice3)>0):?>
	<div class="technics_content_2">
		<img class="lazy" src="<?php echo $productservice3[0]->thumbnail;?>" alt="" width="100%">
		<h2><?php echo $productservice3[0]->title;?></h2>	
	</div>
	<div class="technics_content_7">
	    <p><?php echo $productservice3[0]->content;?></p>
	</div>
	<?php endif;?>
	<?php if(count($productservice4)>0):?>
	<div class="technics_content_3">
		<img class="lazy" src="<?php echo $productservice4[0]->thumbnail;?>" alt="" width="100%">
		<p><img src="/assets/images/product_icon_w.png"></p>
		<h2><?php echo $productservice4[0]->title;?></h2>
	</div>
	<div class="technics_content_4">
		<p><?php echo $productservice4[0]->content;?></p>
	</div>
	<?php endif;?>
	<?php if(count($productservice5)>0):?>
	<div class="technics_content_5">
		<img class="lazy" src="<?php echo $productservice5[0]->thumbnail;?>" alt="" width="100%">
		<span><img src="/assets/images/product_icon_hpp.png"></span>
		<h2><?php echo $productservice5[0]->title;?></h2>
		<p><?php echo $productservice5[0]->content;?></p>
		<a href="/home/hpp">了解详情</a>
	</div>
	<?php endif;?>
	<?php if(count($productservice6)>0):?>
	<div class="technics_content_6">
		<img class="lazy" src="<?php echo $productservice6[0]->thumbnail;?>" alt="" width="100%">
		<p><?php echo $productservice6[0]->title;?></p>
	</div>
	<div class="technics_content_8">
		<p><?php echo $productservice6[0]->content;?></p>
	</div>
	<?php endif;?>
</div>
		</div>
				<div class="footer" style="border-bottom: 1px solid #aaaaaa;">
							<div class="footer_logo" >
								<?php if(isset($cidibushang[0])):?>					
									<img src="<?php echo $cidibushang[0]->thumbnail;?>" type="image/svg+xml" width="100px" >
								<?php endif;?>
							</div>
							<div class="footer_info">
								
								<div class="about_we">
										<?php if(isset($cidibuzhong[0])):?>
											<?php echo $cidibuzhong[0]->content;?>
										<?php endif;?>
										<span style="font-size:16px; color:#666666;">7x12小时专心服务，请通过任意方式联系我们</span>
                                    <div style="margin-right:-400px; margin-top:-100px; " >
										
										<span style="float:left; margin-left:680px; color:#222222;">大型合作：market@newperse.cn</span><br/>
										<span style="float:left; margin-left:680px; color:#222222;">微信公众号：persejuice</span><br/>
										<span style="float:left; margin-left:680px; color:#222222;">客服热线：4006-801-201</span><br/>
									</div>
								</div>
							</div>
						</div>
						<div class="friendly_link">
							<ul>
								<li><a href="/home/aboutus" style="color: #666666; font-size:16px;">关于沛时</a></li>
								<li><a href="/home/contactus" style="color: #666666; font-size:16px;">联系我们</a></li>
								<li><a href="/home/help" style="color: #666666; font-size:16px;">帮助中心</a></li>
								<li><a href="/home/brand" style="color: #666666; font-size:16px;">品牌活动</a></li>
								<li><a href="http://www.heyjuice.cn/Delivery/index"></a></li>
							</ul>
							<div class="f12 mt30 mb10" style="width:950px; margin-left:auto; margin-right:auto; margin-top:10px;">
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