<!-- /footer -->
<footer class="footer">
	<div class="inner">
		<div class="foot-menu">
			<ul id="menu-footermenu" class="foot-nav">
				<li class="menu-item">
					<a href="/about-us">关于我们</a>
				</li>
				<li class="menu-item">
					<a href="/products">产品展示</a>
				</li>
				<li class="menu-item">
					<a href="/cases">案例展示</a>
				</li>
				<li class="menu-item">
					<a href="/recruitment">职位招聘</a>
				</li>
				<li class="menu-item">
					<a href="/contact">联系我们</a>
				</li>
			</ul>
		</div>
		<div class="copyright">
			<p>Copyright &#169; <?php echo date("Y"); ?> <a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a> 版权所有.</p>
		</div>
	</div>
</footer>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.form.min.js"></script>
<script type="text/javascript">/*  */
	var _wpcf7 = {"loaderUrl":"<?php bloginfo('template_url'); ?>/images/ajax-loader.gif","sending":"\u53d1\u9001\u4e2d\u3002\u3002\u3002"};
	/*  */</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
<!--[if lte IE 6]>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/DD_belatedPNG.js"></script>
<script type="text/javascript">DD_belatedPNG.fix('.bx-wrapper .bx-prev,.bx-wrapper .bx-next,#btn-so,#search-box #searchform #searchsubmit,.banner-shadow,.row-scroll .bx-controls a');</script>
<![endif]-->

<div class="cs-div cs-bar" style="top: 200px; right: 0px;"> 
	<span id="cs-close">X</span>
	<div class="cs-inner">
		<ul>
			<li>
				<h2>技术支持</h2>
				<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1668417448&amp;site=qq&menu=yes">
					<img border="0" src="http://wpa.qq.com/pa?p=2:1668417448:47" alt="点击这里给我发消息" title="点击这里给我发消息" /></a>
			</li>

			<li>
				<h2>售后服务</h2>
				<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1668417448&amp;site=qq&menu=yes">
					<img border="0" src="http://wpa.qq.com/pa?p=2:1668417448:47" alt="点击这里给我发消息" title="点击这里给我发消息" /></a>
			</li>
		<ul>
	</div>
	<div class="cs-btm"></div>
</div>

		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery(function(){
					jQuery(".cs-div").css({"top":200+jQuery(window).scrollTop(),"right":"0"});
					jQuery(window).scroll(function(){
						var offsetTop=200+jQuery(window).scrollTop()+"px";
						jQuery(".cs-div").animate({top:offsetTop,"right":"0"},{duration:500,queue:false})});
					jQuery(window).resize(function(){var offsetTop=200+jQuery(window).scrollTop()+"px";
													 jQuery(".cs-div").animate({top:offsetTop,"right":"0"},{duration:500,queue:false})});
					jQuery("#cs-close").click(function(){
						jQuery(".cs-inner").toggle();jQuery(".cs-div").toggleClass("cs-bar");
					});
				});
			});
		</script>
	</body>
</html>