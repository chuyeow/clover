<?php

// Including gravatar plugin directly because plugin support is busted in this nightly.
include('gravatar.php');

if ('wp-comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die ('Please do not load this page directly. Thanks!');

if ( !empty($post->post_password) && $_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) :
?>
<p><?php _e('Enter your password to view comments.'); ?><p>
<?php
  return;
endif;
?>

<!-- You can start editing here. -->

<h4 id="comments">Comments &amp; TrackBacks (<?php if ( comments_open() ) : ?><a href="#commentReply"><?php _e("Add yours"); ?></a><?php endif; ?>)</h4>
  <p>The paper doll icon that precedes each comment is an idea conceived by <a href="http://vantan.org/" title="Read Vanessa Tan's weblog">Vanessa Tan</a>.</p>

<?php if ( $comments ) : ?>

<?php foreach ($comments as $comment) : ?>

  <?php if( preg_match('#(<trackback />|<pingback />)#', $comment->comment_content) ) { ?>

  <a href="#comment-<?php comment_ID() ?>"><img src="<?php bloginfo('url'); ?>/images/icons/icon_trackback.gif" alt="TrackBack icon" title="An icon the following is a TrackBack excerpt. It also serves as an anchor link to an individual TrackBack excerpt." width="20" height="18" class="trackbackIcon" /></a>

  <div class="trackback" id="comment-<?php comment_ID() ?>">
    <?php comment_text() ?>
    <p>Read more in <?php comment_author_link() ?></p>
    <p class="trackbackFooter">Pinged from <?php comment_author_link() ?> on <?php comment_date() ?> <?php comment_time() ?> <?php edit_comment_link(__("Edit TrackBack"), ' |'); ?></p>
  </div>

  <?php } else { ?>

  <a href="#comment-<?php comment_ID() ?>"><img src="<?php bloginfo('url'); ?>/images/icons/icon_commentsman.gif" alt="Paper doll icon" title="An icon representing the person who posted the following comment. It also serves as an anchor link to an individual comment." width="20" height="29" class="commentIcon" /></a>

  <div class="comment" id="comment-<?php comment_ID() ?>">

    <div class="gravatar"><img src="<?php echo gravatar('R', 40, 'http://blog.codefront.net/images/default-avatar.png'); ?>" alt="<?php echo $comment->comment_author; ?>'s Gravatar" /></div>

    <?php comment_text() ?>

    <p class="commentFooter">Posted by: <?php comment_author_link() ?> on <?php comment_date() ?> <?php comment_time() ?> <?php edit_comment_link(__("Edit comment"), ' |'); ?></p>

  </div>

  <?php } ?>

<?php endforeach; ?>

<?php else : ?>
  <p><?php _e('No comments yet.'); ?></p>
<?php endif; ?>

<p>You can subscribe to the <?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post')); ?>.</p>

<?php if( is_single() ) { ?>
<div class="relMenu">
  <?php next_post('&laquo; %', '', 'yes'); ?> | <a href="/">Main</a> | <?php previous_post('% &raquo;', '', 'yes'); ?>
</div>
<?php } ?>

<?php if ( comments_open() ) : ?>
<h4 id="commentReply">Post a comment</h4>

<div class="commentForm">
<form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

  <p>
    <label for="author"><?php _e('Name'); ?></label> <?php if ($req) _e('(required)'); ?><br />
    <input type="text" name="author" id="author" class="textarea" value="<?php echo $comment_author; ?>" size="28" tabindex="1" />
    <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" />
    <input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" />
  </p>

  <p>
    <label for="email"><?php _e('E-mail'); ?></label> <?php if ($req) _e('(required, but never displayed)'); ?><br />
    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="28" tabindex="2" />
  </p>

  <p>
    <label for="url"><?php _e('<acronym title="Uniform Resource Locator">URL</acronym>'); ?></label><br />
    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="28" tabindex="3" />
  </p>

  <p><?php _e("You can format your comments using <acronym title=\"Extensible Hypertext Markup Language\">XHTML</acronym>. Your email address will not be displayed or used for nefarious purposes."); ?></p>

  <p>Only following tags are allowed:<br /><span class="monospaced"><?php echo allowed_tags(); ?></span></p>

  <p>If you have a lot to say, you can <a title="Click to enlarge the comments textarea" href="javascript:(function(){var i,x; for(i=0;x=document.getElementsByTagName(%22textarea%22)[i];++i) x.rows += 5; })()">enlarge the comments textarea</a> (only works in IE and Mozilla, sorry).</p>

  <p>
    <label for="comment"><?php _e('Your Comment'); ?></label><br />
    <textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea>
  </p>

  <p>
    <label for="anti-spam">Today's anti-spam measures are brought to you by the letter <strong>R</strong>.
    Please enter it here:</label> <input type="text" name="anti-spam" id="anti-spam" size="3" tabindex="5" />
  </p>

  <p><input name="submit" id="submit" type="submit" tabindex="6" value="<?php _e('Post'); ?>" /></p>
</form>
</div>

<?php else : // Comments are closed ?>
<p><?php _e('Sorry, this entry is no longer accepting comments. If you have something you really want to say, you can <a href="/contact/">write me</a>.'); ?></p>
<?php endif; ?>
