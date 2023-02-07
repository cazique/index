
<section id='miscelanea'>

    <?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'meta_key' => 'slider1',
        'meta_value' => 'on'
    );
     
    $the_query = new WP_Query( $args );?>

    <?php if( $the_query->have_posts() ): ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div id="miscelanea-1">

                    <article>
                    
                        <div class="img" style="background-image:url(<?php echo catch_that_image();?>)"></div>
                        <a href="<?php the_permalink(); ?>" tittle="<?php the_title(); ?>">   
                            <div class="overlay"></div>
                        </a> 

                        <?php edit_post_link( __( 'Editar')); ?>
                        <div class="container-header">

                            <?php $category = get_the_category();?>
                            <a href="<?php echo get_category_link($category[0]->term_id); ?>" class='category-header'>
                                <?php echo $category[0]->cat_name; ?> 
                            </a>

                            <a href="<?php the_permalink(); ?>" class='view-header'>Ver artículo</a>
                            <div class="container-header-2">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="entry">
                                    <?php echo excerpt(25);?>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>

        <?php endwhile; ?>

        <?php endif; ?>
     
        <?php wp_reset_query();?>

        <?php 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'meta_key' => 'slider2',
            'meta_value' => 'on'
        );

        $the_query = new WP_Query( $args );?>

        <?php if( $the_query->have_posts() ): ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div id="miscelanea-2">

                    <article>

                    <div class="img" style="background-image:url(<?php echo catch_that_image();?>)"></div>
                    <a href="<?php the_permalink(); ?>" tittle="<?php the_title(); ?>">   
                        <div class="overlay"></div>
                    </a> 

                        <?php edit_post_link( __( 'Editar')); ?>
                        <div class="container-header">

                            <?php $category = get_the_category();?>
                            <a href="<?php  echo get_category_link($category[0]->term_id); ?>" class='category-header'>
                                <?php echo $category[0]->cat_name; ?> 
                            </a>

                            <a href="<?php the_permalink(); ?>" class='view-header'>Ver artículo</a>
                            <div class="container-header-2">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                        </div>
                    </article>

                </div>

        <?php endwhile; ?>

        <?php endif; ?>
     
        <?php wp_reset_query();?>

        <?php 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'meta_key' => 'slider3',
            'meta_value' => 'on'
        );

        $the_query = new WP_Query( $args );?>

        <?php if( $the_query->have_posts() ): ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div id="miscelanea-3">

                <article>

                <div class="img" style="background-image:url(<?php echo catch_that_image();?>)"></div>
                <a href="<?php the_permalink(); ?>" tittle="<?php the_title(); ?>">   
                    <div class="overlay"></div>
                </a>   

                    <?php edit_post_link( __( 'Editar')); ?>
                    <div class="container-header">
                        <a href="<?php the_permalink(); ?>" class='view-header'>Ver artículo</a>
                        <div class="container-header-2">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                    </div>
                </article>

            </div>

        <?php endwhile; ?>

        <?php endif; ?>
     
        <?php wp_reset_query();?>

        <?php 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'meta_key' => 'slider4',
            'meta_value' => 'on'
        );

        $the_query = new WP_Query( $args );?>

        <?php if( $the_query->have_posts() ): ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div id="miscelanea-4">

                <article>

                <div class="img" style="background-image:url(<?php echo catch_that_image();?>)"></div>
                <a href="<?php the_permalink(); ?>" tittle="<?php the_title(); ?>">   
                    <div class="overlay"></div>
                </a> 

                    <?php edit_post_link( __( 'Editar')); ?>
                    <div class="container-header">
                        <a href="<?php the_permalink(); ?>" class='view-header'>Ver artículo</a>
                        <div class="container-header-2">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                    </div>
                </article>

            </div>

        <?php endwhile; ?>

        <?php endif; ?>
     
        <?php wp_reset_query();?>


</section>
