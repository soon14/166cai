    <!DOCTYPE HTML>
    <html>
        <head>
            <meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <link rel="stylesheet" href="<?php echo getStaticFile('/caipiaoimg/v1.1/styles/global.min.css');?>"/>
<style>
 body { background-color: transparent;}
</style>
        </head>
        <body>
        	<script>
			window.easemobim = window.easemobim || {};
			easemobim.config = {
			    //是否隐藏小的悬浮按钮
			    hide: true,		
			    //自动连接
			    autoConnect: true    
			};
			</script>
			<script src='//kefu.easemob.com/webim/easemob.js'></script>
            <!--top begin-->
            <div class="top_bar" style="display:block;">
			  <div class="wrap_in">
			    hi，欢迎来到166彩票！
			    <!-- <a href="/mdownload" class="deskApp" target="_self"><img src="<?php echo getStaticFile('/caipiaoimg/v1.1/img/home-gif.gif');?>" width="106" height="26" alt="166彩票桌面版下载"></a> -->
			    <div class="user_info">
			      <div class="my-home"><s class="split-line"></s><a href="###" class="not-login"><i class="icon-font">&#xe62d;</i>我的彩票<i class="icon-font icon-arrow">&#xe62a;</i></a></div>
			      <a class="btn-ss btn-specail register" target="_blank" href="/main/register?ysj">免费注册</a><a class="login" target="_blank" href="/main/login">登录</a>
			    </div>
			  </div>
			</div>
            <!--top end-->

            <!--header begin-->
            <div class="header">
			  <div class="wrap header-inner">
			    <div class="logo">
			    	<h1 class="logo-txt"><span class="logo-txt-name">166彩票</span><span class="logo-txt-slogan">为生活添彩</span></h1>
			    	<a href="" target="_self" class="logo-img"><img src="<?php echo getStaticFile('/caipiaoimg/v1.1/images/logo/logo-166.png');?>" srcset="<?php echo getStaticFile('/caipiaoimg/v1.1/images/logo/logo-166@2x.svg');?> 2x" width="280" height="70" alt="166彩票网"></a>
			    	<a href="/activity/welcometo166" target="_blank" class="logo-active"><img src="<?php echo getStaticFile('/caipiaoimg/v1.1/img/logo/logo-active.png');?>" width="194" height="70" alt="你预约，我护航"></a>
			    </div>
			    <div class="aside">
			    	<a href="http://kefu.easemob.com/webim/im.html?tenantId=38338" target="_blank" class="btn online-service"><i class="icon-font">&#xe634;</i>在线客服</a>
			    	<p class="telphone"><i class="icon-font">&#xe633;</i>400-690-6760</p>
			    </div>
			  </div>
			</div>
            <!--header end-->

            <!--nav begin-->
            <div class="nav">
			  <div class="wrap_in">
			    <div class="nav-ticket">全部彩种<i class="icon-font icon-arrow">&#xe62a;</i>
			      <div class="lottery-categorys">
			        <ul class="lottery-categorys-a">
			          <li>
			            <a target="_blank" href="/ssq" class="item-a nav-ssq">
			              <div class="lottery-img">
			                <svg width="120" height="120">
			                  <image xlink:href="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.svg');?>" src="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.png');?>" width="120" height="120"></image>
			                </svg>
			              </div>
			              <p class="cont"><span class="title"><strong>双色球</strong><s>2元可中1000万</s></span></p>
			            </a>
			          </li>
			          <li>
			            <a target="_blank" href="/dlt" class="item-a nav-dlt">
			              <div class="lottery-img">
			                <svg width="120" height="120">
			                  <image xlink:href="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.svg');?>" src="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.png');?>" width="120" height="120"></image>
			                </svg>
			              </div>
			              <p class="cont"><span class="title"><strong>大乐透</strong></span></p>
			            </a>
			            <a href="/dlt" class="arrow-tag nav-dlt-tag"><?php if($dltPool){ echo $dltPool. '亿奖池';}else{ echo '3元可中1600万';}?></a>
			          </li>
			          <li>
			            <a target="_blank" href="/jczq/hh" class="item-a nav-jczq">
			                <div class="lottery-img">
			                <svg width="120" height="120">
			                  <image xlink:href="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.svg');?>" src="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.png');?>" width="120" height="120"></image>
			                </svg>
			              </div>
			              <p class="cont"><span class="title"><strong>竞彩足球</strong></span></p></a>
			              <a target="_blank" href="jczq/dg" class="arrow-tag nav-jclq-tag">单关固赔</a>
			          </li>
			          <li>
			            <a target="_blank" href="/jclq/hh" class="item-a nav-jclq">
			                <div class="lottery-img">
			                <svg width="120" height="120">
			                  <image xlink:href="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.svg');?>" src="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.png');?>" width="120" height="120"></image>
			                </svg>
			              </div>
			                <p class="cont"><span class="title"><strong>竞彩篮球</strong><s>69%返奖率</s></span></p>
			            </a>
			          </li>
			          <li>
			            <a target="_blank" href="/jxsyxw" class="item-a nav-jxsyxw">
			              <div class="lottery-img">
			                 <svg width="120" height="120">
			                  <image xlink:href="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.svg');?>" src="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.png');?>" width="120" height="120"></image>
			                </svg>
			              </div>
			              <p class="cont"><span class="title"><strong>新11选5</strong></span></p>
			            </a>
			            <a target="_blank" href="/jxsyxw" class="arrow-tag nav-syxw-tag" style="left:115px;">热卖中...</a>
			          </li>
			          <li>
			            <a target="_blank" href="/ks" class="item-a nav-ks">
			                <div class="lottery-img">
			                <svg width="120" height="120">
			                  <image xlink:href="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.svg');?>" src="<?php echo getStaticFile('/caipiaoimg/v1.1/img/lottery-logo.png');?>" width="120" height="120"></image>
			                </svg>
			              </div>
			              <p class="cont"><span class="title"><strong>经典快3</strong></span></p>
			            </a>
			            <a target="_blank" href="/ks" class="arrow-tag nav-jclq-tag">摇骰子赢大奖</a>
			          </li>
			        </ul>
			        <ul class="lottery-categorys-b">
			          <li class="other">
			              <p>数字彩</p>
			              <div class="tlist-m">
			                  <a target="_blank" href="/fcsd">福彩3D</a><a target="_blank" href="/qlc">七乐彩</a><a target="_blank" href="/pls">排列三</a><a target="_blank" href="/qxc">七星彩</a><a target="_blank" href="/plw">排列五</a>
			              </div>
			          </li>
			          <li class="other has-hideitem">
			              <p>高频彩</p>
			              <div class="tlist-m tlist-m-l">
			                  <a href="/hbsyxw" target="_blank" style="margin-right: 0px;padding-right: 0px;">惊喜11选5</a>
			                  <a href="/syxw" target="_blank">老11选5<span class="arrow-tag nav-syxw-tag">热</span></a>
			                  <a href="/jxks" class="main-color-s" target="_blank">红快3</a>
			                  <a href="/jlks" target="_blank" class="main-color-s">易快3<span class="arrow-tag nav-syxw-tag">火热</span></a>
			              </div>
			              <div class="hover-item" style="width:180px"><a href="/klpk" target="_blank">快乐扑克<span class="arrow-tag">停售</span></a><a href="<?php echo $baseUrl; ?>gdsyxw">乐11选5<span class="arrow-tag">人气最旺</span></a></div>
			          </li>
			          <li class="other last"><p>竞技彩</p><div class="tlist-m"><a target="_blank" href="/sfc">胜负彩</a><a target="_blank" href="/rj">任选九</a><a target="_blank" href="/gjc">冠军彩</a><a target="_blank" href="/gjc/gyj">冠亚军彩</a></div></li>
			        </ul>
			      </div>
			    </div>
			    <ul class="nav-main clearfix">
			      <li><a target="_blank" href="/">首页</a></li>
			      <li><a target="_blank" href="/hall">彩票大厅</a></li>
			      <li><a target="_blank" href="/hemai">合买<i class="icon-font icon-arrow">&#xe62a;</i></a>
                                  <div class="nav-main-list"><ul><li><a target="_blank" href="/gendan" target="_blank">跟单</a></li></ul></div>
                              </li>
			      <li>
			     	 <a target="_blank" href="/kaijiang">全国开奖<i class="icon-font icon-arrow">&#xe62a;</i></a>
			     	 <div class="nav-main-list"><ul><li><a target="_blank" href="/kaijiang/ssq" target="_blank">开奖详情</a></li></ul></div>
			      </li>
			      <li><a target="_blank" href="/chart">走势图</a></li>
			      <li>
			        <a target="_blank" href="/info">资讯中心<i class="icon-font icon-arrow">&#xe62a;</i></a>
			        <div class="nav-main-list"><ul><li><a href="/academy" target="_blank">彩票学院</a></li><li><a href="/activity/fiveLeague" target="_blank">五大联赛</a></li></ul></div>
			      </li>
			      <li>
			        <a target="_blank" rel="nofollow" href="<?php echo $this->config->item('api_info')?>">赛事数据<i class="icon-font icon-arrow">&#xe62a;</i></a>
			        <div class="nav-main-list">
			          <ul>
			            <li><a rel="nofollow" href="<?php echo $this->config->item('api_bf')?>jingcai" target="_blank">比分直播</a></li><li><a href="<?php echo $this->config->item('api_odds')?>complex/jc" target="_blank">赔率中心</a></li>
			            <li><a rel="nofollow" href="<?php echo $this->config->item('api_info')?>" target="_blank">足球数据</a></li><li><a href="<?php echo $this->config->item('api_info')?>lanqiu" target="_blank">篮球数据</a></li>
			          </ul>
			        </div>
			      </li>
			      <li class="nav-phone">
			        <a href="/activity/newmode" target="_blank">
			          <i class="icon-font">&#xe61c;</i>手机彩票<div class="qrcode"><h2>免费下载手机客户端</h2><p>彩店出票 领奖无忧</p><img src="<?php echo getStaticFile('/caipiaoimg/v1.1/img/qrcode.png');?>" width="94" height="94" alt=""></div>
			        </a>
			      </li>
			    </ul>
			  </div>
			</div>
            <!--nav end-->
        <script src="<?php echo getStaticFile('/caipiaoimg/v1.1/js/jquery-1.8.3.min.js');?>" type="text/javascript"></script>
        <script type="text/javascript">
    var $_mydomain = "166cai.cn";
    document.domain = $_mydomain;
    $(function(){
        // 导航快速菜单
        $(".nav-ticket").hover(
            function () {
                var cate = $(this).find(".lottery-categorys");
                $(this).addClass('nav-ticket-hover');
                cate.show();
                cate.hover(function () {
                    $(this).show();
                }, function () {
                    $(this).hide();
                })
                $(window.parent.document).find("#ifr_nav").removeClass('flip-up').addClass('flip-down');
            }, function () {
                $(this).removeClass('nav-ticket-hover').find(".lottery-categorys").hide();
                $(window.parent.document).find("#ifr_nav").removeClass('flip-down').addClass('flip-up');
        });

        // 赛事数据下拉
        var mainLi = $('.nav-main > li');
        var mainLiA = $('.nav-main > li > a');
        var mainNavList = $('.nav-main-list');
        mainLiA.on('mouseover', function(){
            if(!$(this).parent('li').hasClass('customer')){
                $(this).parent('li').addClass('hover');
                $(window.parent.document).find("#ifr_nav").removeClass('flip-up').addClass('flip-down');   
            }
        }).on('mouseout', function(){
            $(this).parent('li').removeClass('hover');
            $(window.parent.document).find("#ifr_nav").removeClass('flip-down').addClass('flip-up');
        })
        mainNavList.on('mouseover', function(){
            $(this).parent('li').addClass('hover');
            $(window.parent.document).find("#ifr_nav").removeClass('flip-up').addClass('flip-down');
        }).on('mouseout', function(){
            $(this).parent('li').removeClass('hover');
            $(window.parent.document).find("#ifr_nav").removeClass('flip-down').addClass('flip-up');
        })
    })
</script>
        
