<?php get_header(); ?>
        <div class="welearn-container">
            <div class="welearn-post">
                <?php
                    
                    if(have_posts()){
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
                        
                        <div> <a href="#" onmouseover="tooltip.pop(this,'#sub3<?php the_ID(); ?>',{position:0,effect:'slide'})"><span class="fa fa-calendar fa-2x"></span></a>
                            <div style="display:none">
                                <div id="sub3<?php the_ID(); ?>"><?php echo get_the_date("Y/m/d"); ?></div>
                            </div>
                        </div>
                
                    </footer>
                </article>
                <?php
                    }
                ?>
                <div class="clear"></div>
                
                
                
                <?php 
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                ?>
            </div>
            
            
            <?php get_sidebar("page"); ?>
        </div>
        
    </div>

    <div class="clear"></div>
    
    <?php get_footer(); ?>
</body>

</html>