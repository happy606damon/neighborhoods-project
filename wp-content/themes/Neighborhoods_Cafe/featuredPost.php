<?php $rootFolder = get_bloginfo('template_directory');?>
    <!-- GET FEATURED POST -->
     <?php
        $my_query = new WP_Query(
            array(
                'post_type' => 'post',
                'category_name' => 'Featured',
                'posts_per_page' => 1, 
                'order_by' => 'date',
                'order' => 'DESC' //vs. ASC
            )
        ); 
    ?>
        
    <?php if( $my_query->have_posts() )
        {
            while( $my_query->have_posts() )
            {
                $my_query->the_post(); ?>
                    <!--ADD BLOG TITLE AND DATE-->
                    <h5><?php the_time('F'); ?>&nbsp;<?php the_time('Y'); ?> - <a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                    <!--ADD THE EXCERPT-->
                    <h6>
                        <?php the_excerpt();?>
                        <a href="<?php the_permalink(); ?>">Read More&nbsp;&gt;&gt;</a>
                    </h6>
                <?php 
            }
        } 
        else  //GET LATEST POST
        {
            wp_reset_query(); ?>
                <?php  
            $my_query = new WP_Query(
                array(
                    'post_type' => 'post',
                    'category_name' => '',
                    'posts_per_page' => 2, 
                    'order_by' => 'date',
                    'order' => 'DESC' //vs. ASC
                )
            ); 
            ?>
            <?php if( $my_query->have_posts() ): while( $my_query->have_posts() ): $my_query->the_post(); ?>
                    <!--ADD BLOG TITLE AND DATE-->
                    <h5><?php the_time('F'); ?>&nbsp;<?php the_time('Y'); ?> - <a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                    <!--ADD THE EXCERPT-->
                    <h6>
                        <?php the_excerpt();?>
                        <a href="<?php the_permalink(); ?>">Read More&nbsp;&gt;&gt;</a>
                    </h6>
            <?php endwhile; endif;
        }
        ?>

     <?php wp_reset_query(); ?> 