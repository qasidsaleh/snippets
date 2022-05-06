<?php
/*
 * Template Name: Page Speed Optimization
 */
?>
<?php get_header(); ?>
	<?php the_content(); ?>
  <ul class="slides" style="list-style: none;">
    <li>
      <h2 style="margin-bottom: 0px;"><?php the_title(); ?></h2>
      <div id="code-<?php echo get_the_ID(); ?>">
        <pre><code><?php highlight_string(get_field('code')); ?></code></pre>
      </div>
      <button class="btn" data-clipboard-action="copy" data-clipboard-target="#code<?php echo $count ?>">Copy</button>
    </li>
  </ul>
<?php get_footer(); ?>