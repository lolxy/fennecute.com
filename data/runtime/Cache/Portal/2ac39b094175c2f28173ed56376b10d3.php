<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Online Message - <?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
<meta name="description" content="<?php echo ($site_seo_description); ?>">
	<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
	<?php $portal_index_lastnews="3"; $portal_hot_articles="3"; $portal_last_post="3"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/themes/laoyao/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/themes/laoyao/Public/images/favicon.ico" type="image/x-icon">
    <link href="/themes/laoyao/Public/static/font-awesome/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/themes/laoyao/Public/static/font-awesome/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/themes/laoyao/Public/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="/themes/laoyao/Public/js/respond.min.js"></script>
    <![endif]-->
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}
	</style>
	

<script src="http://api.map.baidu.com/api?v=1.3"></script>

<style>
img {
	max-width: none;
}
</style>
</head>
<body class="body-white">
<div class="wrapper">
<div class="pl20 pr20">
	<?php echo hook('body_start');?>
<div class="navbar">
     <div class="container">
     	<div class="logo-search clearfix">
           <div class="logo float-left">
           <a class="brand" href="/"><img src="/themes/laoyao/Public/images/logo.png"/></a>
           </div>
           <div class="search float-right">
                <form method="post" class="form" action="<?php echo U('portal/search/index');?>">
                     <input type="text" class="search-input" placeholder="Search" name="keyword" value="<?php echo I('get.keyword');?>"/>
                     <input type="submit" class="search-btns" value="Go" style="margin:0"/>
                </form>
           </div>
       </div>
       <div class="nav-collapse collapse" id="main-menu-box">
       	<?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret fa fa-lg'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
       </div>
     </div>
 </div>
<div class="clearfix"></div>
	<div class="section-map">
		<div id="mapCanvas" class="map-canvas no-margin" style="height: 400px;">
			<script type="text/javascript">
				var map = new BMap.Map("mapCanvas"); // 创建Map实例
				var point = new BMap.Point("118.5919640000", "24.8208650000"); // 创建点坐标
				map.centerAndZoom(point, 15); // 初始化地图,设置中心点坐标和地图级别。
				map.enableScrollWheelZoom(); //启用滚轮放大缩小
				//添加缩放控件
				map.addControl(new BMap.NavigationControl());
				map.addControl(new BMap.ScaleControl());
				map.addControl(new BMap.OverviewMapControl());

				var marker = new BMap.Marker(point); // 创建标注 
				map.addOverlay(marker); // 将标注添加到地图中
				var infoWindow = new BMap.InfoWindow("ORION<br/><span class=''>ADDRESS：Jinjiang,Quanzhou</span>"); // 创建信息窗口对象
				marker.openInfoWindow(infoWindow);
			</script>
		</div>
	</div>
	<div class="container-contact">
			<div class="left_box">
				<h3 class="section-title">Online Message</h3>
				<form class="form-light js-ajax-form" role="form" method="post" action="<?php echo U('api/guestbook/addmsg');?>">
					<div class="row">
						<div class="span-box">
							<div class="form-group">
								<label>Name:</label> 
                                <div class="inputs">
                                <input type="text" class="form-control" placeholder="Your name" name="full_name">
                                </div>
							</div>
						</div>
						<div class="span-box">
							<div class="form-group">
								<label>Email:</label> 
                                <div class="inputs">
                                <input type="email" class="form-control" placeholder="Email address" name="email">
                                </div>
							</div>
						</div>
					</div>
                    
                    <div class="row">
                        <div class="form-group">
                            <label class="cons">Content:</label>
                            <div class="inputs-text">
                            <textarea id="message" class="form-control" placeholder="Write you message here..." style="height: 100px;" name="msg"></textarea>
                            </div>
                        </div>
                    </div>

					<div class="row">
						<div class="span-box">
							<div class="form-group">
								<label>Code:</label> 
                                <div class="inputs">
                                <input type="text" class="form-control" placeholder="please enter the code" name="verify" autocomplete="off">
                                </div>
							</div>
						</div>
						<div class="span-box">
							<div class="form-group">
								<label>&nbsp;</label>
								<div class="inputs-code">
                                <?php echo sp_verifycode_img('length=4&font_size=16&width=150&height=34&use_noise=1&use_curve=0','style="cursor:pointer;vertical-align: top;" title="点击获取"');?>
                                </div>
							</div>
						</div>
					</div>
                    
					<div class="row btnbox">
                    	<button type="submit" class="btn btn-primary js-ajax-submit" data-wait="1500">Submit</button>
                    </div>
				</form>
			</div>
			<div class="right_box">
				<h3 class="section-title">Quick exchange</h3>
				<p>Click on the following QQ icon, free to add friends to discuss cooperation in real time</p>
				<div class="social-media">
					<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=479923197&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:479923197:51" alt="Click here to send me a message." title="Click here to send me a message." /></a> 
					<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=479923197&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:479923197:51" alt="Click here to send me a message." title="Click here to send me a message." /></a> 
					<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=479923197&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:479923197:51" alt="Click here to send me a message." title="Click here to send me a message." /></a>
				</div>
			</div>
   </div>
 </div>
	<?php echo hook('footer');?>
<div class="firend-link">
    <div class="links">
    	<span>Links:</span>
		<?php $links=sp_getlinks(); ?>
		<?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
	</div>
</div>

<div id="footer">
    <div class="contactBox">
    	<div class="icobox">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-skype"></i></a>
        <a href="#"><i class="fa fa-qq"></i></a>
        <a href="#"><i class="fa fa-weixin"></i></a>
       </div>
    </div>
    
	<div class="copyright">
    	<div class="contacts">
        	<p>
            	<span>Tel:+86-15852521542</span>
            	<span>Email:serivsce#163.com</span>
            </p>
            <p>
            	Address:Quanzhou,Fujian Province.
            </p>
        </div>
        <div class="banquan">
			Copyright Reserved by <a href="http://www.hkorion.com">hkorion.com</a>
        </div>
	</div>
</div>
<div id="backtotop">
	<i class="fa fa-arrow-circle-up"></i>
</div>
<?php echo ($site_tongji); ?>

</div>

	<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/public/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});


	var myNav = document.getElementById("main-menu").getElementsByTagName("a");
	for(var i=0;i<myNav.length;i++)
	{
	var links = myNav[i].getAttribute("href");
	var linkss = links.substr(10);
	var myURL = document.location.href;
	if(myURL.indexOf(linkss) == 0){
		 myNav[0].className="current";
		}else if(myURL.indexOf(linkss) != -1){
			myNav[0].className="";
			myNav[i].className="current";
			}
	}
	
$(function(){
	$('.dropdown>a .caret').addClass('fa-caret-down');
	$('.hasChild>a .caret').addClass('fa-caret-right');
	
	$('.hasChild').hover(function(){
		$(this).addClass('open');
		},function(){
			$(this).removeClass('open');
			});
		
	$('.hasChilds').eq(0).addClass('open');
	
	$('.hasChilds').click(function(){
		$(this).parents('.listyle').siblings().find('h3').removeClass('open');
		//$(this).siblings('.lichild').toggle();
		if($(this).hasClass('open')){
			$(this).removeClass('open');
			}else{
			$(this).addClass('open');
			}
		});
	})
</script>



</body>
</html>