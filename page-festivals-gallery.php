<?php get_header(); ?>

<div class="main-content-single" role="main">
        <div class="content">
            <a id="content"></a>
            <div class="page-banner">
                <img class="banner-image" src="<?php echo get_template_directory_uri();?>/images/Events-Gallery-Header-1024x383.webp" aria-hidden="true"/>

                <div class="image-floating-text">
                    <p>A corporate program of</p>
                    <figure>
                        <img src="http://35.183.106.246/wp-content/uploads/2022/11/EmpowerNL-Logo.webp" alt="Empower NL Logo" class="floating-img">
                    </figure>
                </div>
                <h1 class="center">Gallery | festivals  & Fun Events</h1>
            </div>
        </div>
        <div class="small-body">
            <h2 style="text-align: left">Festivals & Fun</h2>
            <p>Photo Albums</p>
            <?php 

                $oldest_year = date("Y");

                $args = array(
                    'post_type' => 'Gallery',
                    'meta_key' => 'date',
                    'orderby' => 'meta_value',
                    'order' => 'ASC',
                    'posts_per_page' => 1
                );

                $custom_query = new WP_Query( $args );

                if ( $custom_query->have_posts() ) {
                    while($custom_query->have_posts()){
                        $custom_query->the_post();
                        $date_string = get_post_meta( get_the_ID(), 'date', true ); // retrieves the value of the 'date' custom field
                        $date_object = new DateTime( $date_string ); // creates a new DateTime object from the date string
                        $oldest_year = $date_object->format( 'Y' ); // retrieves the year value as a four-digit string
                    }
                    wp_reset_postdata();
                }


                // echo '<p>' . $oldest_year . " - " . date("Y") . '</p>';

            for($year = date("Y"); $year >= $oldest_year; $year--){
                $args = array(
                    'post_type' => 'Gallery',
                    'meta_query' => array(
                        'relationship' => 'AND',
                        array(
                            'key' => 'date',
                            'value' => $year,
                            'compare' => 'LIKE',
                            'orderby' => 'DESC'
                        ),
                        array(
                            'key' => 'category',
                            'value' => 'festivals',
                            'compare' => 'LIKE'
                        )
                    )
                );

                $custom_query = new WP_Query( $args );

                if ( $custom_query->have_posts() ) {
                    ?><h3 style="text-align: left; color: rgb(85,85,85)"><?php echo $year;?></h3>
                    <figure class="year-container">
                        <?php
                            while ( $custom_query->have_posts() ) {
                                $custom_query->the_post();
                                $image = get_field('image');
                                if( $image ) {
                                    echo "<figure class='gallery-image'>";
                                        echo '<img src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '">';
                                        echo '<figcaption class="gallery-image-caption" aria-hidden="true">' . get_field('caption') . '</p>';
                                    echo "</figure>";
                                }
                            }
                            wp_reset_postdata();
                            ?></figure><?php
                        }
                    }?>
        </div>

<?php get_footer(); ?>