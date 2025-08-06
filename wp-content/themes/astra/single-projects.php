<?php get_header(); ?>

<div class="single-project" style="max-width: 800px; margin: 40px auto; padding: 20px;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
            <div style="margin-bottom:20px;">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <div style="margin-bottom:15px;">
            <strong>Client Name:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'client_name', true)); ?>
        </div>

        <div style="margin-bottom:15px;">
            <strong>Completion Date:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'completion_date', true)); ?>
        </div>

        <div style="margin-bottom:15px;">
            <strong>Technology Used:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'technology_used', true)); ?>
        </div>

        <div style="margin-bottom:20px;">
            <strong>Project URL:</strong>
            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'project_url', true)); ?>" target="_blank">
                <?php echo esc_html(get_post_meta(get_the_ID(), 'project_url', true)); ?>
            </a>
        </div>

        <div>
            <?php the_content(); ?>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
