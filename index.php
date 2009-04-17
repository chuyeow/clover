<?php get_header(); ?>

<div id="content">

  <?php if (have_posts()) { ?>

    <?php while (have_posts()) : the_post(); ?>

  <div class="entry" id="post-<?php the_ID(); ?>">

    <h3 class="entryTitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link for this entry &quot;<?php the_title(); ?>&quot;"><img height="9" width="10" alt="" src="<?php bloginfo('url'); ?>/images/icons/icon_permalink.gif" /> <?php the_title(); ?></a></h3>

    <p class="entryDate"><?php if (function_exists('time_since')) { echo time_since(abs(strtotime($post->post_date_gmt . " GMT")), time()) . " ago"; } else { the_time('F jS, Y');} ?></p>

    <?php the_content('Read the rest of this entry &raquo;'); ?>

    <script src="http://feeds.feedburner.com/~s/riab?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>

    <div class="entryFooter">
      Posted by <?php the_author() ?> at <?php the_time('F j, Y'); ?> <acronym title="Singapore Time (GMT+0800)">SGT</acronym> | <a href="<?php the_permalink() ?>" title="Permanent Link for this entry &quot;<?php the_title(); ?>;"><img height="9" width="10" alt="" src="<?php bloginfo('url'); ?>/images/icons/icon_permalink.gif" /> Permalink</a> | <img height="9" width="10" alt="" src="<?php bloginfo('url'); ?>/images/icons/icon_comment.gif" /> <?php comments_popup_link('Comments and TrackBacks (0)', 'Comments and TrackBacks (1)', 'Comments and TrackBacks (%)'); ?> | Category: <?php the_category(', ') ?><!-- | Read X times--> <?php wp_link_pages(); ?><br />
      <?php edit_post_link('Edit entry'); ?>
    </div>

    <!--
    <?php trackback_rdf(); ?>
    -->
  </div>

    <?php endwhile; ?>

  <div class="relMenu">
    <?php posts_nav_link(' | ', __('&laquo; Previous Entries'), __('Next Entries &raquo;')); ?>
  </div>

<?php } else { ?>

  <p>Sorry, but you are looking for something that isn't here.</p>

<?php } ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>