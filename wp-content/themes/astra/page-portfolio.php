<?php
/* Template Name: Portfolio Page */
get_header(); ?>

<div class="portfolio-wrapper" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; padding: 20px;">
    <?php
    $args = array(
        'post_type' => 'projects',
        'posts_per_page' => -1
    );
    $projects = new WP_Query($args);
    if ($projects->have_posts()) :
        while ($projects->have_posts()) : $projects->the_post();
            $technology = get_post_meta(get_the_ID(), 'technology_used', true);
            $project_url = get_post_meta(get_the_ID(), 'project_url', true);
            ?>
            <div class="project-card" style="border:1px solid #ccc; padding:15px; border-radius:10px;">
                <?php if (has_post_thumbnail()) : ?>
                    <div><?php the_post_thumbnail('medium'); ?></div>
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <p><strong>Technology:</strong> <?php echo esc_html($technology); ?></p>
                <a href="<?php echo esc_url($project_url); ?>" target="_blank" style="color:blue; text-decoration:underline;">View Project</a>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo "<p>No projects found.</p>";
    endif;
    ?>
</div>

<?php get_footer(); ?>
