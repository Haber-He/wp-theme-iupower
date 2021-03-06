<?php get_header(); ?>

  <div id="sliderbox">
   <div id="slidebanner">
    <div class="banner-shadow"></div>
    <div class="bx-wrapper" style="max-width: 100%;">
     <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 400px;">
      <ul id="slideshow" style="width: auto; position: relative;">
        <li style="float: none; list-style: none; position: absolute; width: 1900px; z-index: 50; display: block;">
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/banner01.jpg" /></a>
        </li>
        <li style="float: none; list-style: none; position: absolute; width: 1900px; z-index: 0; display: none;">
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/banner02.jpg" /></a>
        </li>
        <li style="float: none; list-style: none; position: absolute; width: 1900px; z-index: 0; display: none;">
            <a href="#">
              <img src="<?php bloginfo('template_url'); ?>/images/banner03.jpg" />
            </a>
        </li>
        <li style="float: none; list-style: none; position: absolute; width: 1900px; z-index: 0; display: none;">
            <a href="#">
              <img src="<?php bloginfo('template_url'); ?>/images/banner04.jpg" />
            </a>
        </li>
      </ul>
     </div>
     <div class="bx-controls bx-has-pager">
      <div class="bx-pager bx-default-pager">
       <div class="bx-pager-item">
        <a href="" data-slide-index="0" class="bx-pager-link active">1</a>
       </div>
       <div class="bx-pager-item">
        <a href="" data-slide-index="1" class="bx-pager-link">2</a>
       </div>
       <div class="bx-pager-item">
        <a href="" data-slide-index="2" class="bx-pager-link">3</a>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="outside"> 
    <span id="slider-prev"><a class="bx-prev" href="" style="display: inline; opacity: 0.16590642039119227;">上一张</a></span> 
    <span id="slider-next"><a class="bx-next" href="" style="display: inline; opacity: 0.16590642039119227;">下一张</a></span>
   </div>
  </div>
  
  <div class="announce">
    <div class="inner">
        <?php
            $yourcat = get_category_by_slug('news-company');
            $cat_id = $yourcat->term_id;
            
            if ( !empty($cat_id) ):
                $cat_name = $yourcat->name;
                $cat_links = get_category_link($cat_id);
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'cat'           => $cat_id,
                    'numberposts'   => 10,
                    'orderby'       => 'date',
                    'order'         => 'DESC'
                );
                $posts = query_posts($args);
            //the_post_thumbnail()
        ?> 
   
        <h3><a href="<?php echo $cat_links; ?>"><?php echo $cat_name; ?></a></h3>
        <ul id="newsbar" style="width: auto; position: relative; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(0, -96px, 0);">
            <?php 
                foreach( $posts as $post ) : setup_postdata( $post );
            ?>
                <li style="float: none; list-style: none; position: relative; width: 450px;" class="bx-clone">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <?php endif;?>

        <div class="weibo-box">
            关注我们：
            <div class="wb-follow-button">
            </div>
        </div>
    
     </div>
    </div>

   </div>
  </div>
      
  <div class="inner container"> 
  <!--      
           <section class="row-fluid inner col-md-3 col-md-4 fadeInDown wow" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
    <div> 
     <a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/responsive.png" alt="" /></a>
     <h3>生产和销售</h3>
     <p>我们设计开发的响应式WordPress高级企业主题，完美自适应各种手机、平板等常用移动终端设备和桌面平台的不同分辨率屏幕显示，保证用户在各平台获得一致的浏览操作体验。</p>
    </div>
    <div> 
     <a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/wordpress.png" alt="" /></a>
     <h3>方案设计</h3>
     <p>国内专业提供WordPress网站定制开发服务的技术团队，我们拥有多年的高端企业建站开发经验，帮助客户创建专业的标准化网站设计开发方案，快速实现企业在线营销推广。</p>
    </div>
    <div> 
     <a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/grow.png" alt="" /></a>
     <h3>技术指导</h3>
     <p>简洁高效的规范化代码结构可以更好地保证网站的运行速度，并实现各终端的一致性访问；合理规范的搜索优化功能帮助企业更快地在线优化推广网站，快速提高网站的搜索引擎收录及排名。</p>
    </div>
    <div> 
     <a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/service.png" alt="" /></a>
     <h3>免费售后服务保障</h3>
     <p>我们为客户提供长期及时的在线售后服务支持、免费升级更新以及WordPress相关咨询，确保您的网站始终运行在最佳状态；实时在线沟通方式免去后顾之忧，替您节省网站维护成本。</p>
    </div> 
   </section> 
-->
      <section class="row-fluid col-lt">
        <?php 
            $page_id = 9;
            $page_data = get_page( $page_id ); ?>
        <h2><a href="<?php echo get_permalink( $page_id ); ?>"><?php echo $page_data->post_title; ?></a> <span><a href="<?php echo get_permalink( $page_id ); ?>" title="更多">更多&gt;&gt;</a></span></h2>
        <div class="stinner">
        <p>
            <img style="float: left; padding: 0 10px 0 0;" src="<?php bloginfo('template_url'); ?>/images/about.jpg" alt="" />
            <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $page_data->post_content)), 0, 600,"...",'utf-8'); ?>
        </p>
        </div>
    
        <div class="clearfix"></div>
        
        <div class="col-lt-2">

        <?php
            $yourcat = get_category_by_slug('news-company');
            $cat_id = $yourcat->term_id;
            
            if ( !empty($cat_id) ):
                $cat_name = $yourcat->name;
                $cat_links = get_category_link($cat_id);
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'cat'           => $cat_id,
                    'numberposts'   => 10,
                    'orderby'       => 'date',
                    'order'         => 'DESC'
                );
                $posts = query_posts($args);
            //the_post_thumbnail()
        ?>        

         <h2>
            <a href="<?php echo $cat_links; ?>"><?php echo $cat_name; ?></a>
            <span>
                <a href="<?php echo $cat_links; ?>" title="更多">更多&gt;&gt;</a>
            </span>
         </h2>
         <ul>
            <?php 
                foreach( $posts as $post ) : setup_postdata( $post );
            ?>
                <li>
                    <span><?php the_time('Y-m-d') ?></span>
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </li>
            <?php endforeach; ?>
         </ul>
         
         <?php endif;?>
        </div>

    <div class="col-lt-2 col-lt-2r">
        <?php
            $yourcat = get_category_by_slug('news-industry');
            $cat_id = $yourcat->term_id;
            
            if ( !empty($cat_id) ):
                $cat_name = $yourcat->name;
                $cat_links = get_category_link($cat_id);
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'cat'           => $cat_id,
                    'numberposts'   => 10,
                    'orderby'       => 'date',
                    'order'         => 'DESC'
                );
                $posts = query_posts($args);
            //the_post_thumbnail()
        ?>
         <h2>
            <a href="<?php echo $cat_links; ?>"><?php echo $cat_name; ?></a>
            <span>
                <a href="<?php echo $cat_links; ?>" title="更多">更多&gt;&gt;</a>
            </span>
         </h2>
         <ul>
            <?php 
                foreach( $posts as $post ) : setup_postdata( $post );
            ?>
                <li>
                    <span><?php the_time('Y-m-d') ?></span>
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </li>
            <?php endforeach; ?>
         </ul>
         
         <?php endif;?>
    </div>
   </section>
   
   <section class="row-fluid col-rt">
    <div>
     <h2>联系方式</h2>
     <div> 
      <a href="#"><img style="margin-bottom:10px;" src="<?php bloginfo('template_url'); ?>/images/contact-us.jpg" width="100%" alt="联系我们" title="联系我们" /></a>
      <br/> 
      <b style="font-size:14px;">全国服务热线：400-691-6800</b>
      <br/> 
      <strong>客户服务</strong>：133-5291-6377
      <br/> 
      <strong>技术支持</strong>：133-3296-7008
      <br/> 
      <strong>客服Q Q</strong>： 
      <a target="_blank" href="#" title="客服QQ:1668417448">1668417448</a>
      <br/> 
      <strong>电子邮箱</strong>： 
      <a target="_blank" href="mailto:Haber.He@qq.com">1668417448@qq.com</a>
      <br/> 
      <img src="<?php bloginfo('template_url'); ?>/images/qrcode.jpg" alt="微信扫一扫" class="fadeInLeft wow animated animated" width="100%" />
     </div>
    </div> 
   </section>
   <div class="clearfix"></div> 
        
        <section class="row-fluid pic-fluid inner">
            <?php
            
                $yourcat = get_category_by_slug('products');
 				$cat_id = $yourcat->term_id;
                
                if ( !empty($cat_id) ):
                    $cat_name = $yourcat->name;
                    $cat_links = get_category_link($cat_id);
                    
                    $args = array(
                        'cat'         => $cat_id,
                        'numberposts' => 8,
                        'orderby'     => 'date',
                        'order'       => 'DESC'
                    );
                    $posts = get_posts($args);
            ?>
                <h2> 
                    <a href="<?php echo $cat_links; ?>"><?php echo $cat_name; ?></a>
                    <span><a href="<?php echo $cat_links; ?>" title="更多">更多>></a></span>
                </h2>
                
                <ul class="piclist piclist-col4">
                    <?php 
                        foreach( $posts as $post ) : setup_postdata( $post );
                    ?>
                        <li> 
                            <a href="<?php the_permalink() ?>">
                                <div class="folio-thumb fadeInLeft wow" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                    <div class="mediaholder">
                                        <img src="<?php echo catch_the_image($post->ID); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="thumb" style="width: 286px; height: 200.2px;">
                                    </div>
                                    <div class="opacity-pic"></div>
                                </div>
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif;?>
        </section>
                
        <section class="row-fluid row-scroll inner">
        <?php
        
            $yourcat = get_category_by_slug('cases');
            $cat_id = $yourcat->term_id;
            
            if ( !empty($cat_id) ):
                $cat_name = $yourcat->name;
                $cat_links = get_category_link($cat_id);
                $cat_links = get_category_link($cat_id);
                
                $args = array(
                    'cat'         => $cat_id,
                    'orderby'     => 'date',
                    'order'       => 'DESC'
                );
                $posts = get_posts($args);
        ?>
            
            <h2><a href="<?php echo $cat_links; ?>"><?php echo $cat_name; ?></a></h2>
            <div id="ticker" class="pic-scroll-list" style="width: 1115%; position: relative; -webkit-transition: 0.8s; transition: 0.8s; -webkit-transform: translate3d(-2430px, 0, 0);">

                <?php 
                    foreach( $posts as $post ) : setup_postdata( $post );
                ?>
            
                <div class="slide bx-clone" style="float: left; list-style: none; position: relative; width: 288.75px; margin-right: 15px;"> 
                    <a href="<?php the_permalink() ?>">
                        <div class="folio-thumb fadeInLeft wow" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                            <div class="mediaholder">
                                <img src="<?php echo catch_the_image($post->ID); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="thumb" style="width: 288px; height: 201.6px;" />
                            </div>
                        <div class="opacity-pic"></div>
                        </div><h3><?php the_title(); ?></h3>
                    </a>
                </div>
                <?php endforeach; ?>
      
            </div>
       <?php endif; ?>
        </section>
        
        <div class="clearfix"></div>
    </div>
	
	<?php get_footer(); ?>