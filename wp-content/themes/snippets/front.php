<?php
/*
 * The front page template file
 * If the user has selected a static page for their homepage, this is what will appear.
 * Template Name: Front Page
 */
?>
<?php get_header(); ?>
  <?php the_content(); ?>
  <ul class="slides" style="list-style: none;">
    <?php $count = 1;
    $project = array(
      'post_type' => 'WordpressHooks',
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'ASC',
    );
    $the_query1 = new WP_Query( $project );
    if( $the_query1->have_posts() ):
      while( $the_query1->have_posts() ) : $the_query1->the_post(); ?>
        <li>
          <h2 style="margin-bottom: 0px;"><?php echo $count.') ' ?><?php the_title(); ?></h2>
          <div id="code-<?php echo get_the_ID(); ?>">
            <!-- <pre><code>&lt;?php <?php //echo get_field('code'); ?> ?&gt;</code></pre> -->
            <pre><code><?php highlight_string(get_field('code')); ?></code></pre>
          </div>
          <button class="btn" data-clipboard-action="copy" data-clipboard-target="#code-<?php echo get_the_ID(); ?>">Copy</button>
        </li>
      <?php $count++; 
      endwhile; 
    endif; ?>
  </ul>
<?php get_footer(); ?>