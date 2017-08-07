<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
        <title>华美眼视光</title>
		<link rel="icon" href="http://localhost/HuaMei/Application/Home/View/images/logo.ico" type="image/x-icon">
        <link rel="stylesheet" href="http://localhost/HuaMei/Application/Home/View/css/index.css" type="text/css">
        <script type="text/javascript" src="http://localhost/HuaMei/Application/Home/View/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="http://localhost/HuaMei/Application/Home/View/js/index.js"></script>
    </head>
    
    <body>
    	<!--head_top-->
    	<div class="head_topbg">
        	<div class="head_top">
            	<p>西安华美眼视光官网欢迎你</p>
                <span>早8：30-晚7:30(无节假日)</span>
                <ul>
                	<li><a href="http://localhost/HuaMei/index.php/Home/Gyhm/gsjj">关于华美</a></li>
                    <li>|</li>
                	<li><a href="#">在线咨询</a></li>
                    <li>|</li>
                	<li><a href="http://localhost/HuaMei/index.php/Home/Qita/lxwm">联系我们</a></li>
                </ul>
            </div>
        </div>
        <!--logo-->
        <div class="head_logobg">
        	<div class="head_logo">
            	<div class="logo">
                	<img src="http://localhost/HuaMei/Application/Home/View/images/head-logo.png">
                </div>
                <div class="head_text">
                	<p>专注青少年近视矫正</p>
                    <p>为顾客提供卓越产品</p>
                </div>
                <form name="form1" method="post" enctype ="multipart/form-data" action="http://localhost/HuaMei/index.php/Home/Liufan/xwlb">
                    <input class="srk" type="text" name="textfield" id="textfield" placeholder="请输入内容">
                    <input class="anniu" type="submit" name="button" id="button" value="">
                </form>
                <div class="lxdh">
                	<img src="http://localhost/HuaMei/Application/Home/View/images/head-tel.png">
                </div>
                <div class="head-erwm">
                	<img src="http://localhost/HuaMei/Application/Home/View/images/head-erwm.jpg">
                </div>
            </div>
        </div>
        <!--logo-->
        <div class="head-nav_bg">
        	<div class="nav_bg">
            	<div class="nav c">
                	<ul>
                    	<li ><a href="http://localhost/HuaMei/index.php/Home/Index/index">网站首页</a></li>
                    	<li class="link"><a href="http://localhost/HuaMei/index.php/Home/Gyhm/gsjj">关于华美</a></li>
                    	<li ><a href="http://localhost/HuaMei/index.php/Home/Qita/jmsxj">角膜塑形镜</a></li>
                    	<li ><a href="http://localhost/HuaMei/index.php/Home/Cpzx/cp">产品中心</a></li>
                        <li><a href="http://localhost/HuaMei/index.php/Home/Liufan/zjtd">专家团队</a></li>
                        <li><a href="http://localhost/HuaMei/index.php/Home/Liufan/cgal">成功案例</a></li>
                        <li><a href="http://localhost/HuaMei/index.php/Home/Liufan/xwlb">新闻动态</a></li>
                    	<li ><a href="http://localhost/HuaMei/index.php/Home/Qita/lxwm">联系我们</a></li>
                    	<li ><a href="http://localhost/HuaMei/index.php/Home/Qita/jmwm">加盟我们</a></li>
                    </ul>
                </div>
            </div>
        </div>
		<!--内页banner-->
        <div class="ny_banner_bg">
        	<div class="ny_banner">
            	<img src="http://localhost/HuaMei/Application/Home/View/images/ny_banner.jpg">
            </div>
        </div>
        <!--关于华美-->
        <div class="min c">
        	<div class="dqwz c">
            	<span>当前位置：</span>
                <a href="#">首页</a>
                <span> > </span>
                <a href="#">关于华美</a>
            </div>
            <div class="min_left c">
            	<div class="min_fl_head">
                	<h4>
                    	<span>关于华美</span>
                        <strong>about us</strong>
                        <i></i>
                    </h4>
                </div>
                <ul class="min_fl_nav">
                	<li><a href="http://localhost/HuaMei/index.php/Home/Gyhm/gsjj">公司简介</a></li>
                	<li class="link"><a href="http://localhost/HuaMei/index.php/Home/Gyhm/hjsb">环境设备</a></li>
                	<li><a href="http://localhost/HuaMei/index.php/Home/Gyhm/ryzz">荣誉资质</a></li>
                </ul>
                <div class="min_fl_foot">
                	<i><img src="http://localhost/HuaMei/Application/Home/View/images/min_fl_foot_t1.jpg"></i>
                    <h6>400-119-3311</h6>
                    <p>全国统一免费咨询电话</p>
                    <span>电话：029-89236661 </span>
                    <span>手机：18192394787</span>
                </div>
            </div>
            <div class="min_right c">
            	<div class="hjsb">
                	<ul>
					<?php if(is_array($str)): foreach($str as $key=>$vo): ?><li>
                        	<a href="#"><img src="<?php echo ($vo["picurl"]); ?>"></a>
                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <!--翻页-->
                <div class="fylj">
                    <a class="a1" href="http://localhost/HuaMei/index.php/Home/Gyhm/hjsb?pg=<?php echo ($pg); ?>&quick=last">&nbsp;</a>
				<?php $__FOR_START_909__=1;$__FOR_END_909__=$pages;for($i=$__FOR_START_909__;$i <= $__FOR_END_909__;$i+=1){ ?><a class="<?php echo ($link["$i"]); ?>" href="http://localhost/HuaMei/index.php/Home/Gyhm/hjsb?pg=<?php echo ($i); ?>"><?php echo ($i); ?></a><?php } ?>
                    <a class="a2" href="http://localhost/HuaMei/index.php/Home/Gyhm/hjsb?pg=<?php echo ($pg); ?>&quick=next">&nbsp;</a>
                </div>
            </div>
        </div>
        <!--底部-->
        <div class="foot_bg">
        	<div class="foot">
            	<div class="foot_fl">
                	<img src="http://localhost/HuaMei/Application/Home/View/images/foot_logo.png">
                </div>
                <div class="foot_ct">
                	<dl>
                    	<dt>
                        	<a href="http://localhost/HuaMei/index.php/Home/Index/index">网站首页</a>
                        	<a href="http://localhost/HuaMei/index.php/Home/Gyhm/gsjj">关于华美</a>
                        	<a href="http://localhost/HuaMei/index.php/Home/Qita/jmsxj">角膜塑形镜</a>
                        	<a href="http://localhost/HuaMei/index.php/Home/Cpzx/cp">产品中心</a>
                        	<a href="http://localhost/HuaMei/index.php/Home/Liufan/zjtd">专家团队</a>
                        	<a href="http://localhost/HuaMei/index.php/Home/Liufan/xwlb">新闻动态</a>
                        	<a href="http://localhost/HuaMei/index.php/Home/Qita/lxwm">联系我们</a>
                        </dt>
                        <dd>
                        	<p>
                            	<span>版权所有@西安华美眼视光科技有限公司</span>
                                <i>技术支持：西安网邦网络公司</i>
                            </p>
                        	<p>
                            	<span>陕ICP备16010341号  华美眼视光</span>
                                <i>本站由西安网邦网络公司提供网络营销服务</i>
                            </p>
                        </dd>
                    </dl>
                </div>
                <div class="foot_fr">
                	<span><img src="http://localhost/HuaMei/Application/Home/View/images/foot_erwm.jpg"></span>
                    <i><img src="http://localhost/HuaMei/Application/Home/View/images/foot_dh.png"></i>
                </div>
            </div>
        </div>
        <!--在线服务-->
        <div class="zxfw">
        	<div class="in_zxkf">
            	<a href="#"><img src="http://localhost/HuaMei/Application/Home/View/images/in_zxkf.jpg"></a>
            </div>
            <div class="in_zxdh">
                <p>
                    18192394787<br/>
                    400-119-3311
                </p>   
                <span><img src="http://localhost/HuaMei/Application/Home/View/images/in_zxdh.jpg"><span>        	
            </div>
        	<div class="in_zxkf">
            	<a href="#"><img src="http://localhost/HuaMei/Application/Home/View/images/in_tsjy.jpg"></a>
            </div>
            <div class="in_erwm"> 
                <span><img src="http://localhost/HuaMei/Application/Home/View/images/in_erwm.jpg"></span>
                <strong><img src="http://localhost/HuaMei/Application/Home/View/images/head-erwm.jpg"></strong>        	
            </div>
            <div class="in_zxdh">
                <p>
                    18192394787<br/>
                    400-119-3311
                </p>   
                <span><img src="http://localhost/HuaMei/Application/Home/View/images/in_jmwm.jpg"><span>        	
            </div>
        </div>
        <script type="text/javascript" src="http://localhost/HuaMei/Application/Home/View/js/scrolltopcontrol.js"></script>
    </body>
</html>