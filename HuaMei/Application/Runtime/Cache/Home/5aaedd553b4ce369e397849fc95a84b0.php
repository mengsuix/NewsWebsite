<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
        <title>华美眼视光</title>
		<link rel="icon" href="http://localhost/HuaMei/Application/Home/View/images/logo.ico" type="image/x-icon">
        <link rel="stylesheet" href="/HuaMei/Public/Home/css/index.css" type="text/css">
        <script type="text/javascript" src="/HuaMei/Public/Home/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="/HuaMei/Public/Home/js/index.js"></script>
    </head>
     <style>
			.pagination ul {
    display: inline-block;
    margin-bottom: 0;
    margin-left: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
    box-shadow: 0 1px 2px rgba(0,0,0,0.05);
}
.pagination ul li {
  display: inline;
 
}

.pagination ul li.rows {
    line-height: 30px;
    padding-left: 5px;
}
.pagination ul li.rows b{color: #f00}

.pagination ul li a, .pagination ul li span {
    float: left;
    padding: 4px 12px;
    line-height: 20px;
    text-decoration: none;
    background-color: #fff;
    background: url('../images/bottom_bg.png') 0px 0px;
    border: 1px solid #d3dbde;
    /*border-left-width: 0;*/
    margin-left: 2px;
    color: #08c;
}
.pagination ul li a:hover{
    color: red;
    background: #0088cc;
}
.pagination ul li.first-child a, .pagination ul li.first-child span {
    border-left-width: 1px;
    -webkit-border-bottom-left-radius: 3px;
    border-bottom-left-radius: 3px;
    -webkit-border-top-left-radius: 3px;
    border-top-left-radius: 3px;
    -moz-border-radius-bottomleft: 3px;
    -moz-border-radius-topleft: 3px;
}
.pagination ul .disabled span, .pagination ul .disabled a, .pagination ul .disabled a:hover {
color: #999;
cursor: default;
background-color: transparent;
}
.pagination ul .active a, .pagination ul .active span {
color: #999;
cursor: default;
}
.pagination ul li a:hover, .pagination ul .active a, .pagination ul .active span {
background-color: #f0c040;
}
.pagination ul li.last-child a, .pagination ul li.last-child span {
    -webkit-border-top-right-radius: 3px;
    border-top-right-radius: 3px;
    -webkit-border-bottom-right-radius: 3px;
    border-bottom-right-radius: 3px;
    -moz-border-radius-topright: 3px;
    -moz-border-radius-bottomright: 3px;
}
.pagination ul li.current a{color: #f00 ;font-weight: bold; background: #ddd}
		
		</style>
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
                	<img src="/HuaMei/Public/Home/images/head-logo.png">
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
                	<img src="/HuaMei/Public/Home/images/head-tel.png">
                </div>
                <div class="head-erwm">
                	<img src="/HuaMei/Public/Home/images/head-erwm.jpg">
                </div>
            </div>
        </div>
        <!--logo-->
        <div class="head-nav_bg">
        	<div class="nav_bg">
            	<div class="nav c">
                	<ul>
                    	<li ><a href="http://localhost/HuaMei/index.php/Home/Index/index">网站首页</a></li>
                    	<li ><a href="http://localhost/HuaMei/index.php/Home/Gyhm/gsjj">关于华美</a></li>
                    	<li ><a href="http://localhost/HuaMei/index.php/Home/Qita/jmsxj">角膜塑形镜</a></li>
                    	<li ><a href="http://localhost/HuaMei/index.php/Home/Cpzx/cp">产品中心</a></li>
                        <li class="link"><a href="http://localhost/HuaMei/index.php/Home/Liufan/zjtd">专家团队</a></li>
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
            	<img src="/HuaMei/Public/Home/images/ny_banner.jpg">
            </div>
        </div>
        <!--专家团队-->
        <div class="min c">
        	<div class="dqwz c">
            	<span>当前位置：</span>
                <a href="#">首页</a>
                <span> > </span>
                <a href="#">专家团队</a>
            </div>
            <div class="min_left c">
            	<div class="min_fl_head">
                	<h4>
                    	<span>专家团队</span>
                        <strong>Expert team</strong>
                        <i></i>
                    </h4>
                </div>
                <div class="min_fl_foot">
                	<i><img src="/HuaMei/Public/Home/images/min_fl_foot_t1.jpg"></i>
                    <h6>400-119-3311</h6>
                    <p>全国统一免费咨询电话</p>
                    <span>电话：029-89236661 </span>
                    <span>手机：18192394787</span>
                </div>
            </div>
            <div class="min_right c">
            	<div class="zjtd">  
                	<ul>
                        <?php if(is_array($zjtd)): $i = 0; $__LIST__ = $zjtd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        	<a href="#">
                            	<span><img src="/HuaMei/Uploads/<?php echo ($vo["pic"]); ?>"></span>
                                <p><?php echo ($vo["name"]); ?></p>
                                <i><?php echo ($vo["introduce"]); ?></i>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    	<!--<li>-->
                        	<!--<a href="#">-->
                            	<!--<span><img src="/HuaMei/Public/Home/images/cpzx_t1.jpg"></span>-->
                                <!--<p>王紫龙</p>-->
                                <!--<i></i>-->
                            <!--</a>-->
                        <!--</li>-->
                    	<!--<li>-->
                        	<!--<a href="#">-->
                            	<!--<span><img src="/HuaMei/Public/Home/images/cpzx_t1.jpg"></span>-->
                                <!--<p>王紫龙</p>-->
                                <!--<i></i>-->
                            <!--</a>-->
                        <!--</li>-->
                    </ul>
                </div>
                <!--翻页-->
               <!--  <div class="fylj">
                    <a class="a1" href="#">&nbsp;</a>
                    <a class="link" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">7</a>
                    <a class="a2" href="#">&nbsp;</a>
                </div> -->
				<div class="pagination">
				　　<ul>
						<li><?php echo ($show); ?></li>
					</ul>
			</div>
            </div>
			
        </div>
        <!--底部-->
        <div class="foot_bg">
        	<div class="foot">
            	<div class="foot_fl">
                	<img src="/HuaMei/Public/Home/images/foot_logo.png">
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
                	<span><img src="/HuaMei/Public/Home/images/foot_erwm.jpg"></span>
                    <i><img src="/HuaMei/Public/Home/images/foot_dh.png"></i>
                </div>
            </div>
        </div>
        <!--在线服务-->
        <div class="zxfw">
        	<div class="in_zxkf">
            	<a href="#"><img src="/HuaMei/Public/Home/images/in_zxkf.jpg"></a>
            </div>
            <div class="in_zxdh">
                <p>
                    18192394787<br/>
                    400-119-3311
                </p>   
                <span><img src="/HuaMei/Public/Home/images/in_zxdh.jpg"><span>
            </div>
        	<div class="in_zxkf">
            	<a href="#"><img src="/HuaMei/Public/Home/images/in_tsjy.jpg"></a>
            </div>
            <div class="in_erwm"> 
                <span><img src="/HuaMei/Public/Home/images/in_erwm.jpg"></span>
                <strong><img src="/HuaMei/Public/Home/images/head-erwm.jpg"></strong>
            </div>
            <div class="in_zxdh">
                <p>
                    18192394787<br/>
                    400-119-3311
                </p>   
                <span><img src="/HuaMei/Public/Home/images/in_jmwm.jpg"><span>
            </div>
        </div>
        <script type="text/javascript" src="/HuaMei/Public/Home/js/scrolltopcontrol.js"></script>
    </body>
</html>