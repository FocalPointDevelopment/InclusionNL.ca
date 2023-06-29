<?php

    get_header();
    if(!isset($current_slug)){
        $current_slug = add_query_arg( array(), $wp->request );
    }
    ?>

<div class="container">
    <div class="main-content-page" role="main">
        <a id="content"></a>

        <div class="small-body">
        <div class="content-header">
            <h1 class="center"><?php echo the_title();?></h1>
        </div>

        <?php

            if(isset($_GET['search_query']) && !empty($_GET['search_query'])){
                $search_query = $_GET['search_query'];
            }

            $args = array( 
                's' => $search_query
            );
            // the query
            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <!-- pagination here -->
                <p style="text-align: center;"><?php echo $the_query->found_posts;?> Results found</p>

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="search-result">
                        <div class="result-info">
							<?php $post_title = get_the_title();
								$stripped_title = str_replace('-', ' ', $post_title);
								$formatted_title = ucwords($stripped_title);
							?>

							<?php echo $formatted_title; ?>

                            <h2><a href="<?php the_permalink(); ?>"><?php echo $formatted_title; ?></a></h2>
                            <?php if( get_field('description') ): ?>
                                <?php
                                    $length = 15;
                                    $text = get_field('description');
                                    $words = explode(' ', $text);
                                    array_splice($words, $length);
                                    $brief = implode(' ', $words);
                                ?>
                                <p><?php echo $brief . '...' ?></p>
                            <?php else: ?>
                                <?php echo '<p>' . get_the_excerpt() . '</p>'; ?>
                            <?php endif; ?>

                                <a href="<?php the_permalink(); ?>">Read more</a>
                        </div>

                        <div class="result-image">
                            <?php if(get_field('featured_photo')) : ?>
                                <img src="<?php echo get_field('featured_photo'); ?>" aria-hidden="true">
                            <?php elseif(get_field('thumbnail')) : ?>
                                <img src="<?php echo get_field('thumbnail'); ?>" aria-hidden="true">
                            <?php elseif(get_field('image')) : ?>
                                <img src="<?php esc_url( get_field('image')['url'] ) ?>" aria-hidden="true">
                            <?php else : ?>
                                <img src="<?php echo get_theme_file_uri('/images/featured_image.png')?>" aria-hidden="true">
                            <?php endif; ?>
                        </div>

                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <div class="single-post">
                    <p><?php _e( 'No results match your query' ); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    </div>
    <?php

    get_footer();
?>