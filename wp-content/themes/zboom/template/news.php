<?php get_header();

/**
 * Template Name: News
 */
?>

<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
            <div class="col-3-3">
            <div class="wrap-col">
                <?php 

                

                $left_cat = get_the_category_by_ID($zboom['left-side-cat']);

                $category = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'category_name' => $left_cat,


                ));

                while($category->have_posts()): $category->the_post()?>

                <p><?php the_title(); ?></p>


                <?php endwhile; ?>

            </div>
                
                

            </div>
            <div class="col-3-3">
                <div class="wrap-col">
                <?php 
                $right_cat = get_the_category_by_ID( $zboom['right-side-cat']);

                $rightcategory = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'category_name' => $right_cat,

                ));

                while($rightcategory->have_posts()) : $rightcategory->the_post()?>
                <p><?php the_title(); ?></p>

                <?php endwhile; ?>
            </div>

            </div>

        </div>
    </div>
</section>





<?php get_footer(); ?>