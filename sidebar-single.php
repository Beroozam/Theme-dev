<aside class="left-sidebar">
                
                
                
                <?php dynamic_sidebar('behrouz_sidebar_2'); ?>
                
                <section class="sidebox">
                    <h3>پر بازدیدترین ها</h3>
                    <ul>
                        <?php
                            $q3 =new WP_Query( 
                                array(
                                    "posts_per_page"=>10,
                                    "meta_key" => "views",
                                    "orderby" => "meta_value_num",
                                    "order" => "DESC"
                                )
                            );
                            while($q3->have_posts()){
                                $q3->the_post();
                        ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php
                            wp_reset_postdata();        
                            };
                        ?>
                    
                    </ul>
                </section>

                <?php dynamic_sidebar( "behrouz_sidebar_3" ) ?>
                
                
            </aside>