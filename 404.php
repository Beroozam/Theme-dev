<?php get_header(); ?>
    <div class="clear"></div>
<?php include("inc/slider.php");?>
    <div class="welearn-container">
        <div class="welearn-post">
            <div class="ourpost">
                <h3>مطالب پیشنهادی</h3>
                <div class="demo">
                    <ul>

                        <?php
                        $q3=new WP_Query(
                            array("category_name"=>"important_posts","posts_per_page"=>3)
                        );
                        while($q3->have_posts())
                        {
                            $q3->the_post();
                            ?>

                            <li><?php the_post_thumbnail(); ?><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a><span>
                                    <?php if(function_exists('the_views')) { the_views(); } ?>
                            </span></li>

                        <?php
                        }
                        ?>


                    </ul>
                </div>
            </div>
            <div class="ads_in"><?php dynamic_sidebar( 'artabaz_middle_ads' ); ?></div>
            <div class="clear"></div>

           متاسفانه صفحه مورد نظر شما یافت نشد...



            <nav class="post">
                <?php wp_pagenavi();  ?>
            </nav>
        </div>
        <?php get_sidebar("index"); ?>
    </div>
    </div>
    <div class="clear"></div>
<?php get_footer(); ?>