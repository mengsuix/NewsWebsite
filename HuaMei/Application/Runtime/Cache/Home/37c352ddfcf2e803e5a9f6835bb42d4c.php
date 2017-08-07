<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
        <title>无标题文档</title>
        <link rel="stylesheet" href="/HuaMei/Public/Home/css/index.css" type="text/css">
        <script type="text/javascript" src="/HuaMei/Public/Home/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="/HuaMei/Public/Home/js/jcarousellite.js"></script>
        <script type="text/javascript" src="/HuaMei/Public/Home/js/index.js"></script>
        <script type="text/javascript" src="/HuaMei/Public/Home/js/responsiveslides.min.js"></script>
		<script type="text/javascript">
		$(function () {
			// Slideshow 
			$("#slider").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 1000,
				timeout:5000,
				pager: true, 
				pauseControls: true,
				namespace: "callbacks"
			});
		});
		</script>
    </head>
    
    <body>
    	<!--head_top-->
    	<div class="head_topbg">
        	<div class="head_top">
            	<p>西安华美眼视光官网欢迎你</p>
                <span>早8：30-晚7:30(无节假日)</span>
                <ul>
                	<li><a href="#">关于华美</a></li>
                    <li>|</li>
                	<li><a href="#">在线咨询</a></li>
                    <li>|</li>
                	<li><a href="#">联系我们</a></li>
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
                <form name="form1" method="post" action="">
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
                    	<li class="link"><a href="/HuaMei/index.php/Home/Liufan/index.html">网站首页</a></li>
                        <li><a href="/HuaMei/index.php/Home/Liufan/ryzz.html">关于华美</a></li>
                        <li><a href="/HuaMei/index.php/Home/Liufan/jmsxj.html">角膜塑形镜</a></li>
                        <li><a href="/HuaMei/index.php/Home/Liufan/cpzx.html">产品中心</a></li>
                        <li><a href="/HuaMei/index.php/Home/Liufan/zjtd.html">专家团队</a></li>
                        <li><a href="/HuaMei/index.php/Home/Liufan/cgal.html">成功案例</a></li>
                        <li><a href="/HuaMei/index.php/Home/index/xwlb">新闻动态</a></li>
                        <li><a href="/HuaMei/index.php/Home/Liufan/lxwm.html">联系我们</a></li>
                        <li><a href="/HuaMei/index.php/Home/Liufan/jmwm.html">加盟我们</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--banner-->
        <div class="callbacks_container">       
            <ul class="rslides" id="slider">
                <li><a href=""><img src="/HuaMei/Public/Home/images/banner_1.jpg"  alt=""></a></li>
                <li><a href=""><img src="/HuaMei/Public/Home/images/banner_2.jpg"  alt=""></a></li>
                <li><a href=""><img src="/HuaMei/Public/Home/images/banner_3.jpg"  alt=""></a></li>
            </ul>
        </div>
        <!--产品中心-->
        <div class="in_cpzx">
        	<div class="in_cpzx_head">
            	<strong class="bg1"></strong>
                <span>产品中心</span>
                <strong class="bg2"></strong>
                <i>Product center</i>
            </div>
            <div class="in_cpzx_ct c">
            	<ul>
                	<li>
                    	<a href="#">
                        	<span><img src="/HuaMei/Public/Home/images/in_cp_t1.jpg"></span>
                            <p>全日本进口精密检测设备</p>
                            <i></i>
                        </a>
                    </li>
                	<li>
                    	<a href="#">
                        	<span><img src="/HuaMei/Public/Home/images/in_cp_t2.jpg"></span>
                            <p>美国、荷兰、日本全进口角膜塑形镜</p>
                            <i></i>
                        </a>
                    </li>
                	<li>
                    	<a href="#">
                        	<span><img src="/HuaMei/Public/Home/images/in_cp_t3.jpg"></span>
                            <p>超声波清洗器</p>
                            <i></i>
                        </a>
                    </li>
                	<li>
                    	<a href="#">
                        	<span><img src="/HuaMei/Public/Home/images/in_cp_t4.jpg"></span>
                            <p>日本进口目立康护理液</p>
                            <i></i>
                        </a>
                    </li>
                	<li>
                    	<a href="#">
                        	<span><img src="/HuaMei/Public/Home/images/in_cp_t5.jpg"></span>
                            <p>美国进口博视顿护理液</p>
                            <i></i>
                        </a>
                    </li>
                	<li>
                    	<a href="#">
                        	<span><img src="/HuaMei/Public/Home/images/in_cp_t6.jpg"></span>
                            <p>太阳镜</p>
                            <i></i>
                        </a>
                    </li>
                	<li>
                    	<a href="#">
                        	<span><img src="/HuaMei/Public/Home/images/in_cp_t7.jpg"></span>
                            <p>框架镜</p>
                            <i></i>
                        </a>
                    </li>
                	<li>
                    	<a href="#">
                        	<span><img src="/HuaMei/Public/Home/images/in_cp_t8.jpg"></span>
                            <p>隐形眼镜</p>
                            <i></i>
                        </a>
                    </li>
                	<li>
                    	<a href="#">
                        	<span><img src="/HuaMei/Public/Home/images/in_cp_t9.jpg"></span>
                            <p>叶黄素</p>
                            <i></i>
                        </a>
                    </li>
                	<li>
                    	<a href="#">
                        	<span><img src="/HuaMei/Public/Home/images/in_cp_t10.jpg"></span>
                            <p>弱视治疗仪</p>
                            <i></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--广告1-->
        <div class="in_banner_1">
        	<img src="/HuaMei/Public/Home/images/in_banner_1.png">
        </div>
        <!--成功案例-->
        <div class="in_cgal">
        	<div class="in_cgal_head">
            	<strong class="bg1"></strong>
                <span>成功案例</span>
                <strong class="bg2"></strong>
                <i>Successful cases</i>
            </div>
            <div class="carousel c">
                <a href="" class="prev" id="prev-02"></a>
                <div class="jCarouselLite" id="demo-02">
                    <ul>
                        <?php if(is_array($case)): $i = 0; $__LIST__ = $case;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        	<a href="/HuaMei/index.php/Home/index/cgal">
                            	<img alt="" src="/HuaMei/Uploads/<?php echo ($vo["pic"]); ?>" />
                                <p>
                                	<span ><?php echo ($vo["name"]); ?> <?php echo ($vo["age"]); ?> <?php echo ($vo["school"]); ?></span>

                                    <i><?php echo ($vo["zl"]); ?></i>
                                </p>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--<li>-->
                        	<!--<a href="#">-->
                            	<!--<img alt="" src="/HuaMei/Public/Home/images/in_al_t2.jpg" />-->
                                <!--<p>-->
                                	<!--<span>王怡然 6岁 刘砦小学</span>-->
                                    <!--<i>发现弱视2年余，08年在市二院就诊，戴镜一年多后视力由0.3提到0.4</i>-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                        	<!--<a href="#">-->
                            	<!--<img alt="" src="/HuaMei/Public/Home/images/in_al_t3.jpg" />-->
                                <!--<p>-->
                                	<!--<span>王怡然 6岁 刘砦小学</span>-->
                                    <!--<i>发现弱视2年余，08年在市二院就诊，戴镜一年多后视力由0.3提到0.4</i>-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                        	<!--<a href="#">-->
                            	<!--<img alt="" src="/HuaMei/Public/Home/images/in_al_t4.jpg" />-->
                                <!--<p>-->
                                	<!--<span>王怡然 6岁 刘砦小学</span>-->
                                    <!--<i>发现弱视2年余，08年在市二院就诊，戴镜一年多后视力由0.3提到0.4</i>-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                        	<!--<a href="#">-->
                            	<!--<img alt="" src="/HuaMei/Public/Home/images/in_al_t5.jpg" />-->
                                <!--<p>-->
                                	<!--<span>王怡然 6岁 刘砦小学</span>-->
                                    <!--<i>发现弱视2年余，08年在市二院就诊，戴镜一年多后视力由0.3提到0.4</i>-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</li>-->
                    </ul>
                </div>
                <a href="#" class="next" id="next-02"></a>
                <div class="clear"></div>   
            </div>
        </div>
        <!--几大问题-->
        <div class="in_jdwt_bg c">
        	<div class="in_jdwt">
            	<div class="in_jdwt_head">
                    <strong class="bg1"></strong>
                    <span>青少年近视矫正困扰家长的几大问题</span>
                    <strong class="bg2"></strong>
                    <i>Several major problems in the correction of adolescent myopia</i>
                </div>
                <div class="in_jdwt_ct c">
                	<div class="in_jdwt_ct_fl">
                    	<dl>
                        	<dt><img src="/HuaMei/Public/Home/images/in_jdwt_bg1.png"></dt>
                            <dd>
                            	<span>您孩子的近视还在加深吗？</span>
                                <i>学习生活不便、成绩直线下滑、近视度数每年以75度~150度的速度持续加深</i>
                            </dd>
                        </dl>
                    	<dl>
                        	<dt><img src="/HuaMei/Public/Home/images/in_jdwt_bg2.png"></dt>
                            <dd>
                            	<span>近视矫正就像无底洞，</span>
                                <i>按摩、功能眼镜、各种矫正仪..... 试过很多方法但都没有效果，治近视为什么总花冤枉钱？</i>
                            </dd>
                        </dl>
                    	<dl>
                        	<dt><img src="/HuaMei/Public/Home/images/in_jdwt_bg3.png"></dt>
                            <dd>
                            	<span>你想不手术就摘掉近视镜吗？</span>
                                <i>手术太痛苦，孩子还小，我们到底该怎么办？</i>
                            </dd>
                        </dl>
                    	<dl>
                        	<dt><img src="/HuaMei/Public/Home/images/in_jdwt_bg4.png"></dt>
                            <dd>
                            	<span>很多家长在眼镜店、医院的指导下给孩子戴上眼镜，但80%以上的学</span>
                                <i>生近视会持续加深恶化，只能接受近视度数持续加深的现实，却又无可奈何！</i>
                            </dd>
                        </dl>
                    	<dl>
                        	<dt><img src="/HuaMei/Public/Home/images/in_jdwt_bg5.png"></dt>
                            <dd>
                            	<span>市场上的角膜塑形镜品牌繁多！为什么单纯使用塑形镜近视度数仍然会加深？中国孩子</span>
                                <i>矫正近视的出路，究竟在哪里？</i>
                            </dd>
                        </dl>
                    </div>
                    <div class="in_jdwt_ct_fr">
                    	<img src="/HuaMei/Public/Home/images/in_jdwt_bg6.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!--华美眼视光-->
        <div class="in_hmys_bg">
        	<div class="in_hmys c">
            	<div class="in_hmys_head">
                    <strong class="bg1"></strong>
                    <span><b>华美眼视光</b> 轻松解决你的困惑</span>
                    <strong class="bg2"></strong>
                    <i>Easily solve your confusion</i>
                </div>
                <div class="in_hmys_ct">
                	<div class="ct_text1">
                    	<h4>先进的科学仪器<br/>权威的矫正方法</h4>
                        <p>
                        	华美眼视光全新引进日本尼德克全自动综合验光台、日本拓普康角膜内皮细胞分析仪等10余种全球先进的检查仪器，结合从美国引进国际先进的理念和眼视光中心模式，确保检查数据精准无误。
							近视患者每一次的检查，都能享受到全球先进仪器的精准检测服务。
                        </p>
                        <i><img src="/HuaMei/Public/Home/images/ysg_t1.jpg"></i>
                    </div>
                	<div class="ct_text2">
                    	<i><img src="/HuaMei/Public/Home/images/ysg_t2.png"></i>
                    	<h4>理想的矫正效果<br/>还孩子一个清晰的世界</h4>
                        <p>
                        	针对中国学生的实际用眼状况，从美国引进国际先进的理念和眼视光中心模式，专门设计研发了华美眼视光塑形组合，非手术即可摘掉眼镜“日防、内补、夜
							治”三位一体近视矫正方法，成功实现了矫正量大于用眼量，解决了近视矫正的关键难题。
                        </p>
                    </div>
                    <div class="clear"></div>
                    <div class="ct_text3">
                    	<span>
                        	<h4>多重安全检验<br/>丰富的验配经验</h4>
                            <p>
                            	专业矫正近视经验，10余万中国患者矫正近视，全球领先的欧美专家团全程技术支持。华美眼视光塑形组合是一种非手术、无创伤，安全有效的近视矫
								正方法。为了让中国孩子也能享受到世界级的视光服务，华美眼视光拥有丰富的验配经验，专门建立了一套多重的安全检验体系，保障清洁卫生，复查
								保障及时，到期及时更换等等，使近视矫正真正安全无忧。
                            </p>
                        </span>
                        <i><img src="/HuaMei/Public/Home/images/ysg_t3.png"></i>
                    </div>
                    <div class="ct_text4">
                    	<i><img src="/HuaMei/Public/Home/images/ysg_t3.png"></i>
                    	<span>
                        	<h4>个性化服务<br/>国际领先的客户服务体系</h4>
                            <p>
                            	整个服务针对不同的近视情况具体定制方案，为每位顾客提供专家一对一个性化服务。使近视矫正真正安全无忧，为客户提供百分百服务。
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!--广告2-->
        <div class="in_banner_2">
        	<img src="/HuaMei/Public/Home/images/in_banner_2.png">
        </div>
        <!--效果对比-->
    <div class="in_xgdb">
        	<div class="in_xgdb_head">
                <strong class="bg1"></strong>
                <span>各种近视矫正方法效果对比</span>
                <strong class="bg2"></strong>
                <i>Effect of myopia correction methods</i>
            </div>
            <div class="in_xgdb_ct">
                <table width="1200" border="1" style="text-align:center; border:1px solid #f7f7f7; font-size:14px; color:#535353;">
                    <tr style=" height:74px; background:#009cff; color:#fff; font-size:18px;">
                        <td width="179px" style="border:">&nbsp;</td>
                        <td width="222px">华美角膜塑形镜</td>
                        <td width="252px">框架眼镜</td>
                        <td width="256px">软性隐形眼镜</td>
                        <td width="269px">激光手术</td>
                    </tr>
                    <tr height="95px">
                        <td style="font-size:22px; color:#009cff;">适用人群</td>
                        <td>8-40岁人群</td>
                        <td>所有人群</td>
                        <td>18岁以上近视患者</td>
                        <td>18岁以上近视度数<br>稳定两年以上，<br>各项数据符合手术条件者</td>
                    </tr>
                    <tr height="95px">
                        <td style="font-size:22px; color:#009cff;">矫正效果</td>
                        <td>大多数近视患者600度<br>以内近视经过佩戴一周<br>裸眼视力达到0.8以上<br></td>
                        <td>只能起到矫正作用<br>长期佩戴度数增长</td>
                        <td>只能起到矫正作用<br>长期佩戴度数增长</td>
                        <td>在保证手术安全及操作到位的<br>情况下可实现摘掉眼镜的效果，<br>但手术后如长期恶性用眼度数还会增长</td>
                    </tr>
                    <tr height="95px">
                        <td style="font-size:22px; color:#009cff;">矫正原理</td>
                        <td>利用流体力学原理，通过眼<br>睑的自然压力改变角膜曲率</td>
                        <td>凹透镜矫正视力</td>
                        <td>凹透镜矫正视力</td>
                        <td>利用激光对角膜下基质层<br>进行切削，破坏角膜组织，<br>从而改变屈光度</td>
                    </tr>
                    <tr height="95px">
                        <td style="font-size:22px; color:#009cff;">控制效果</td>
                        <td>近视经过一周佩戴裸眼视力有<br>效提高。后期配合华美智能防护<br>镜使用可防止新的近视再次产生，<br>长期效果稳定</td>
                        <td>长期佩戴会导致度数增长<br>不适合青少年使用</td>
                        <td>无法控制近视度数加深</td>
                        <td>无法控制近视度数加深</td>
                    </tr>
                    <tr height="95px">
                        <td style="font-size:22px; color:#009cff;">安全性</td>
                        <td>安全性高于普通隐形眼镜，特别<br>是配合角膜塑形镜专用的华美双效<br>速洁护理系统，让佩戴更健康、<br>更安全<br></td>
                        <td>安全性高</td>
                        <td>长期或不规范佩戴易造成角膜<br>变薄及角膜组织脱落，引发角膜炎<br>存在安全隐患</td>
                        <td>存在手术风险，有较<br>多并发症，如：干眼症，<br>圆锥角膜等</td>
                    </tr>
                </table>
            </div>
        </div>
        <!--服务流程-->
        <div class="in_fwlc_bg">
        	<div class="in_fwlc">
            	<div class="in_fwlc_head">
                    <strong class="bg1"></strong>
                    <span>华美眼视光<b>服务流程</b></span>
                    <strong class="bg2"></strong>
                    <i>We have the advantage</i>
                </div>
                <div class="in_fwlc_ct">
                	<p>
                    	<span><img src="/HuaMei/Public/Home/images/in_fwlc_t1.jpg"></span>
                        <strong><b>01</b>. 电话预约</strong>
                    </p>
                    <i></i>
                	<p>
                    	<span><img src="/HuaMei/Public/Home/images/in_fwlc_t2.jpg"></span>
                        <strong><b>02</b>. 视力检查</strong>
                    </p>
                    <i></i>
                	<p>
                    	<span><img src="/HuaMei/Public/Home/images/in_fwlc_t3.jpg"></span>
                        <strong><b>03</b>. 专家会诊</strong>
                    </p>
                    <i></i>
                	<p>
                    	<span><img src="/HuaMei/Public/Home/images/in_fwlc_t4.jpg"></span>
                        <strong><b>04</b>. 试戴体验</strong>
                    </p>
                    <i></i>
                	<p>
                    	<span><img src="/HuaMei/Public/Home/images/in_fwlc_t5.jpg"></span>
                        <strong><b>05</b>. 定镜使用</strong>
                    </p>
                    <i></i>
                	<p>
                    	<span><img src="/HuaMei/Public/Home/images/in_fwlc_t6.jpg"></span>
                        <strong><b>06</b>. 定期复查</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--4大理由-->
        <div class="in_sdly">
        	<div class="in_sdly_head">
                <strong class="bg1"></strong>
                <span>选择我们的<b>4大理由</b></span>
                <strong class="bg2"></strong>
                <i>Choose our reason</i>
            </div>
            <div class="in_sdly_ct">  
            	<dl class="ct_text1">
                	<dt><i><img src="/HuaMei/Public/Home/images/in_sdly_t1.jpg"></i></dt>
                    <dd>
                    	<h4>我们拥有顶级的专家医疗团队</h4>
                        <p>华美眼视光汇集了数十位著名眼科专家，打造成为国内领先技术<br/>标准体系的角膜塑形镜专家团队</p>
                    </dd>
                </dl>
            	<dl class="ct_text2">
                	<dt><i><img src="/HuaMei/Public/Home/images/in_sdly_t2.jpg"></i></dt>
                    <dd>
                    	<h4>日本进口高端验光设备，国内领先验光技术</h4>
                        <p>我们的验光设备全部来自于日本最新的产品，全部采用高科技融<br/>合技术，每道流程都反复测试严格把关。</p>
                    </dd>
                </dl>
            	<dl class="ct_text3">
                	<dt><i><img src="/HuaMei/Public/Home/images/in_sdly_t3.jpg"></i></dt>
                    <dd>
                    	<h4>产品质量稳定，价格更具优势</h4>
                        <p>采用先进的设备精密控制，提高产品的质量。同时降低成本，<br/>价格更具优势，给客户更多服务。</p>
                    </dd>
                </dl>
            	<dl class="ct_text4">
                	<dt><i><img src="/HuaMei/Public/Home/images/in_sdly_t4.jpg"></i></dt>
                    <dd>
                    	<h4>完善的服务体系，提供百分之百满意的客户<br/>服务</h4>
                        <p>公司有完善得服务体系，我们的追求是：没有最好，只有更好；<br/>我们只提供百分之百满意的服务。</p>
                    </dd>
                </dl>
            </div>
        </div>
        <!--专业队伍-->
        <div class="in_zydw_bg">
        	<div class="in_zydw">
            	<div class="in_zydw_head">
                    <strong class="bg1"></strong>
                    <span>角膜塑形镜专业队伍</span>
                    <strong class="bg2"></strong>
                    <i>Professional team</i>
                </div>
                <div class="in_zydw_ct">
                	<ul>
                        <?php if(is_array($tame)): $i = 0; $__LIST__ = $tame;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        	<a href="/HuaMei/index.php/Home/index/zjtd">
                            	<i><img src="/HuaMei/Uploads/<?php echo ($vo["pic"]); ?>"></i>
                                <p>
                                	<span><?php echo ($vo["name"]); ?></span>
                                    <span><?php echo ($vo["position"]); ?></span>
                                    <strong><?php echo ($vo["introduce"]); ?></strong>
                                </p>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    	<!--<li>-->
                        	<!--<a href="#">-->
                            	<!--<i><img src="/HuaMei/Public/Home/images/in_ydw_t2.jpg"></i>-->
                                <!--<p>-->
                                	<!--<span>韩毅</span>-->
                                    <!--<span>验配师</span>-->
                                    <!--<strong>毕业于西安医学院眼视光专业，曾在西京医院眼科部门实习。专长：角膜塑型、RGP验配，屈光不正、近视、弱视、视功能检查</strong>-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</li>-->
                    	<!--<li>-->
                        	<!--<a href="#">-->
                            	<!--<i><img src="/HuaMei/Public/Home/images/in_ydw_t3.jpg"></i>-->
                                <!--<p>-->
                                	<!--<span>刘帆</span>-->
                                    <!--<span>摘戴师</span>-->
                                    <!--<strong>毕业于西安医学院眼视光专业，曾就职于西安麦迪格。专长：角膜塑型、RGP验配、摘戴与复查。</strong>-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</li>-->
                    	<!--<li>-->
                        	<!--<a href="#">-->
                            	<!--<i><img src="/HuaMei/Public/Home/images/in_ydw_t4.jpg"></i>-->
                                <!--<p>-->
                                	<!--<span>郑娅莉</span>-->
                                    <!--<strong>专注华美眼视光服务试戴体验，<br/>为客户提供百分百满意的服务</strong>-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</li>-->
                    	<!--<li>-->
                        	<!--<a href="#">-->
                            	<!--<i><img src="/HuaMei/Public/Home/images/in_ydw_t5.jpg"></i>-->
                                <!--<p>-->
                                	<!--<span>沈少敏</span>-->
                                    <!--<strong>专注华美眼视光服务试戴体验，<br/>为客户提供百分百满意的服务</strong>-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </div>
        <!--关于华美-->
        <div class="in_gyhm">
        	<div class="in_gyhm_head">
                <strong class="bg1"></strong>
                <span>关于华美</span>
                <strong class="bg2"></strong>
                <i>ABOUT  HUAMEI</i>
            </div>
            <dl class="in_gyhm_ct c">
            	<dt><img src="/HuaMei/Public/Home/images/in_gyhm_t1.jpg"></dt>
                <dd>
                	<p>
                    	西安华美眼视光科技有限公司是一家专注于青少年近视防控与矫正的专业公司。
                        公司重点开发销售青少年近视矫正和眼科卫生保健产品，并致力于眼视光领域
                        高科技产品的研发、推广工作。引进美国，日本，荷兰高端原装进口角膜塑形
                        镜，为每一个青少年量身定制有效控制近视并服务终生。我们公司的追求是：
                        没有最好，只有更好；我们的服务是：您的满意就是我们最大的心愿！
                    </p>
                    <a href="#">查看详情</a>
                </dd>
            </dl>
            <div class="in_gyhm_bt c">
            	<div class="in_hjsb">
                	<h5>环境设备</h5>
                    <ul>
                    	<li><a href="#"><img src="/HuaMei/Public/Home/images/in_hjsb_t1.jpg"></a></li>
                    	<li><a href="#"><img src="/HuaMei/Public/Home/images/in_hjsb_t2.jpg"></a></li>
                    	<li><a href="#"><img src="/HuaMei/Public/Home/images/in_hjsb_t3.jpg"></a></li>
                    	<li><a href="#"><img src="/HuaMei/Public/Home/images/in_hjsb_t4.jpg"></a></li>
                    </ul>
                </div>
            	<div class="in_zhry">
                	<h5>资质荣誉</h5>
                    <ul>
                    	<li><a href="#"><img src="/HuaMei/Public/Home/images/in_zhry_t1.jpg"></a></li>
                    	<li><a href="#"><img src="/HuaMei/Public/Home/images/in_zhry_t2.jpg"></a></li>
                    	<li><a href="#"><img src="/HuaMei/Public/Home/images/in_zhry_t3.jpg"></a></li>
                    	<li><a href="#"><img src="/HuaMei/Public/Home/images/in_zhry_t4.jpg"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--新闻--联系-->
        <div class="in_xwlx_bg">
        	<div class="in_xwlx c">
            	<div class="in_xwdt">
                	<h5>
                    	<span>新闻动态</span>
                        <i>NEWS CENTER</i>  
                    </h5>
                    <?php if(is_array($dt)): $i = 0; $__LIST__ = $dt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
                    	<dt>
                        	<a href="/HuaMei/index.php/Home/index/xwlb"><img src="/HuaMei/Uploads/<?php echo ($vo["pic"]); ?>"></a>
                        </dt>
                        <dd>
                        	<a href="/HuaMei/index.php/Home/index/xwlb">
                            	<h4><?php echo ($vo["title"]); ?></h4>
                                <p><?php echo ($vo["content"]); ?></p>
                            </a>
                       </dd>
                   </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--<dl>-->
                    	<!--<dt>-->
                        	<!--<a href="#"><img src="/HuaMei/Public/Home/images/in_xwdt_t2.png"></a>-->
                        <!--</dt>-->
                        <!--<dd>-->
                        	<!--<a href="#">-->
                            	<!--<h4>高度近视眼底病变有哪些临床表现</h4>-->
                                <!--<p>-->
                                	<!--高度近视的患者．随着眼球的转动，常在眼前出现黑影飘动，就像蚊蝇在飞舞，-->
                                    <!--用手去抓时又没有。这主要是由于玻璃体正常的胶体状结构发生液化的缘故，也-->
                                    <!--就是玻璃体液化所致。-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</dd>-->
                    <!--</dl>-->
                    <!--<dl>-->
                    	<!--<dt>-->
                        	<!--<a href="#"><img src="/HuaMei/Public/Home/images/in_xwdt_t3.png"></a>-->
                        <!--</dt>-->
                        <!--<dd>-->
                        	<!--<a href="#">-->
                            	<!--<h4>高度近视眼底病变有哪些临床表现</h4>-->
                                <!--<p>-->
                                	<!--高度近视的患者．随着眼球的转动，常在眼前出现黑影飘动，就像蚊蝇在飞舞，-->
                                    <!--用手去抓时又没有。这主要是由于玻璃体正常的胶体状结构发生液化的缘故，也-->
                                    <!--就是玻璃体液化所致。-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</dd>-->
                    <!--</dl>-->
                    <!--<dl>-->
                    	<!--<dt>-->
                        	<!--<a href="#"><img src="/HuaMei/Public/Home/images/in_xwdt_t4.png"></a>-->
                        <!--</dt>-->
                        <!--<dd>-->
                        	<!--<a href="#">-->
                            	<!--<h4>高度近视眼底病变有哪些临床表现</h4>-->
                                <!--<p>-->
                                	<!--高度近视的患者．随着眼球的转动，常在眼前出现黑影飘动，就像蚊蝇在飞舞，-->
                                    <!--用手去抓时又没有。这主要是由于玻璃体正常的胶体状结构发生液化的缘故，也-->
                                    <!--就是玻璃体液化所致。-->
                                <!--</p>-->
                            <!--</a>-->
                        <!--</dd>-->
                    <!--</dl>-->
                </div>
                <div class="in_lxwm">
                	<h5>
                    	<span>联系我们</span>
                        <i>Contact us</i>  
                    </h5>
                    <div class="in_wzdt">
                    	<img src="/HuaMei/Public/Home/images/in_wzdt.jpg">
                    </div>
                    <div class="in_lxwm_text">
                    	<h4>西安华美眼视光科技有限公司</h4>
                        <p>免费热线：400-119-3311</p>
                        <p>电话：029-89236661</p>
                        <p>手机：18192394787</p>
                        <p>公司QQ：1349918</p>
                        <p>地址：西安市长安区北长安街326号华美十字西北角长安三建综合楼三楼</span>
                        <p>
                        	乘车路线：600、215、323、19、217、229、K631、K616、239、408、918、917到航天大道<br/>
							西口站下车即可或地铁2号线凤栖原站D出口向北150米十字西北角
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--友情链接-->
        <div class="in_yqlj c">
        	<span>友情链接：</span>
            <a href="#">西安网邦网络公司</a>
            <a href="#">西安网邦网络公司</a>
            <a href="#">西安网邦网络公司</a>
            <a href="#">西安网邦网络公司</a>
            <a href="#">西安网邦网络公司</a>
            <a href="#">西安网邦网络公司</a>
            <a href="#">西安网邦网络公司</a>
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
                        	<a href="#">网站首页</a>
                        	<a href="#">关于华美</a>
                        	<a href="#">角膜塑形镜</a>
                        	<a href="#">产品中心</a>
                        	<a href="#">专家团队</a>
                        	<a href="#">新闻动态</a>
                        	<a href="#">联系我们</a>
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
<script>
		//------------------/*经典案例*/-----------------------------------
	$(document).ready(function(){
		$('#demo-02').jCarouselLite({
			btnPrev: '#prev-02',
			btnNext: '#next-02',
			auto: 3000,
    		speed:1000,
		});
	});
</script>