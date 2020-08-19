<?php get_header(); ?>
<?php include('inc/slider.php') ?>
        <div class="welearn-container">
            <div class="welearn-post">
                <div class="ourpost">
                    <h3>مطالب پیشنهادی</h3>
                    <div class="demo">
                        <ul>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt=""><a href="#"> تماس های رایگان با LINE: Free Calls & Messages v4.1.0 </a><span>بازدید : 404</span></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt=""><a href="#"> تماس های رایگان با LINE: Free Calls & Messages v4.1.0 </a><span>بازدید : 404</span></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt=""><a href="#"> تماس های رایگان با LINE: Free Calls & Messages v4.1.0 </a><span>بازدید : 404</span></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt=""><a href="#"> تماس های رایگان با LINE: Free Calls & Messages v4.1.0 </a><span>بازدید : 404</span></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt=""><a href="#"> تماس های رایگان با LINE: Free Calls & Messages v4.1.0 </a><span>بازدید : 404</span></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt=""><a href="#"> تماس های رایگان با LINE: Free Calls & Messages v4.1.0 </a><span>بازدید : 404</span></li>
                        </ul>
                    </div>
                </div>
                <div class="ads_in"><img src="<?php echo get_template_directory_uri(); ?>/images/ads.jpg" alt=""></div>
                <div class="clear"></div>
                
                <?php 
                    while(have_posts()){
                        the_post();
                ?>
                    <article class="post">
                    <header>
                        <div class="post-title">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                    </header>
                   
                    <div class="post-content">
                       <?php the_content(""); ?>
                    </div>
                    <footer>
                        <div> <a href="#" onmouseover="tooltip.pop(this,'#sub1<?php the_ID(); ?>',{position:0,effect:'slide'})"><span class="fa fa-user fa-2x"></span></a>
                            <div style="display:none">
                                <div id="sub1<?php the_ID(); ?>">نویسنده: <?php the_author(); ?></div>
                            </div>
                        </div>
                        <div> <a href="#" onmouseover="tooltip.pop(this,'#sub2<?php the_ID(); ?>',{position:0,effect:'slide'})"><span class="fa fa-sitemap fa-2x"></span></a>
                            <div style="display:none">
                                <div id="sub2<?php the_ID(); ?>"><?php the_category(","); ?></div>
                            </div>
                        </div>
                        <div> <a href="#" onmouseover="tooltip.pop(this,'#sub3<?php the_ID(); ?>',{position:0,effect:'slide'})"><span class="fa fa-calendar fa-2x"></span></a>
                            <div style="display:none">
                                <div id="sub3<?php the_ID(); ?>"><?php echo get_the_date("Y/m/d"); ?></div>
                            </div>
                        </div>
                        <div> <a href="#" onmouseover="tooltip.pop(this,'#sub4<?php the_ID(); ?>',{position:0,effect:'slide'})"><span class="fa fa-comments-o fa-2x"></span></a>
                            <div style="display:none">
                                <div id="sub4<?php the_ID(); ?>"><?php echo get_comments_number(); ?></div>
                            </div>
                        </div>
                        <div> <a href="#" onmouseover="tooltip.pop(this,'#sub5<?php the_ID(); ?>',{position:0,effect:'slide'})"><span class="fa fa-tags fa-2x"></span></a>
                            <div style="display:none">
                                <div id="sub5<?php the_ID(); ?>"><?php the_tags(''); ?></div>
                            </div>
                        </div>
                        <div class="more-link"> <a href="<?php the_permalink(); ?>">ادامه مطلب</a> </div>
                    </footer>
                </article>
                <?php                         
                 }
                ?>
                <nav class="post">
                    <?php wp_pagenavi(); ?>
                </nav>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <div class="clear"></div>
    <?php get_footer(); ?>
</body>

</html>