<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($post_title); ?> <?php echo ($site_name); ?> </title>
		<meta name="keywords" content="<?php echo ($post_keywords); ?>" />
		<meta name="description" content="<?php echo ($post_excerpt); ?>">
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
	
		<style>
			#article_content img{height:auto !important}
		</style>
        <link href="/themes/laoyao/Public/css/slippry/slippry.css" rel="stylesheet">
	</head>
<body>
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
<div class="pageBox">
	<div class="row">	
<?php if($_REQUEST["id"]==1){ $home_slides=sp_getslide("aboutus_ads"); $home_slides=empty($home_slides)?null:$home_slides; }else{ $home_slides=sp_getslide("contactus_ads"); $home_slides=empty($home_slides)?null:$home_slides; } ?>
<div id="homesliderads">
	<?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a><?php endforeach; endif; ?>
</div>

        <div class="contain-wrapper">
            <div class="leftbox">
            	<div class="p-box mb10">
                    <h2>Products</h2>
                    <div class="pro-cates">
                        <?php
 $term_id=3; $terms=sp_get_child_terms($term_id); foreach($terms as $val){ $child_id=$val['term_id']; $termss = sp_get_child_terms($child_id); $urlp = leuu('portal/list/index',array('id'=>$val['term_id'])); if(!empty($termss)){ echo '<div class=listyle><h3 class=hasChilds><a href="'.$urlp.'">'.$val['name'].'</a><i class="fa fa-caret-down"></i></h3>'; echo '<div class=lichild><ul>'; foreach($termss as $cval){ $urlc = leuu('portal/list/index',array('id'=>$cval['term_id'])); echo '<li><a href="'.$urlc.'">'.$cval['name'].'</a></li>'; } echo '</ul></div>'; }else{ echo '<div class=listyle><h3><a href="'.$urlp.'">'.$val['name'].'</a></h3>'; } echo '</div>'; } ?>
                    </div>
                </div>
                
                <div class="p-box">
                    <h2>Contact Us</h2>
                    <div class="contcs">
                        <ul>
                        	<li>
                            	<i class="fa fa-phone-square"></i>
                                <span>+86-15825425125</span>
                            </li>
                            <li>
                            	<i class="fa fa-envelope"></i>
                                <span>hkorion#hkorion.com</span>
                            </li>
                            <li>
                            	<i class="fa fa-fax"></i>
                                <span>+86-059525652521</span>
                            </li>
                            <li>
                            	<i class="fa fa-map-marker"></i>
                                <span>JinJiang,Quanzhou,Fujian Province.JinJiang,Quanzhou,Fujian Province.JinJiang,Quanzhou,Fujian Province.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="rightbox">

                <h2>
                    <i class="fa fa-tags"></i><?php echo ($post_title); ?>
                    <span>
                        Current : <a href="/index.php">Home</a> / <?php echo ($post_title); ?>
                    </span>
                </h2>
                <div id="article_content">
                <?php echo ($post_content); ?>
                </div>
                
                <?php echo hook('comment',array( 'post_id'=>$id, 'post_table'=>'posts', 'post_title'=>$post_title ));?>
            </div>
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