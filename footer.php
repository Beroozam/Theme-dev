<footer class="footer-nav">
        <div class="main-footer">
            
                
            <?php dynamic_sidebar('behrouz_sidebar_4'); ?>
            
            <?php dynamic_sidebar('behrouz_sidebar_5'); ?>
            
            <div class="support">
                <h5>حامیان ما</h5>
                <ul>
                    <?php
                        $q =new WP_Query( 
                            array(
                                "posts_per_page"=>24,
                                "post_type" => "support"
                            )
                        );
                        while($q->have_posts()){
                            $q->the_post();
                    ?>
                        <li><a href="<?php echo get_the_content(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_post_thumbnail(array(40,40)); ?></a></li>
                    <?php
                        wp_reset_postdata();        
                        };
                    ?>
                </ul>
            </div>
            <div class="footer-bot" role="contentinfo">
                <div class="copyright">
                    <p>تمام حقوق وب سایت متعلق به آکادمی وی لرن می باشد</p>
                </div>
                <div class="ui"> طراحی شده توسط آکادمی وی لرن </div>
            </div>
        </div>
        <?php wp_footer(); ?>
    </footer>