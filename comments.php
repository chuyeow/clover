<?php
include_once('gravatar.php');

if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die('Please do not load this page directly. Thanks!');

  // If there's a post password and it doesn't match the cookie
  if (!empty($post->post_password) &&
      $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) :
?>

<p><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
<?php
  return;
endif;
?>

<h4 id="comments"><?php comments_number('', '', '%' );?> Comments &amp; TrackBacks (<?php if ( comments_open() ) : ?><a href="#commentReply"><?php _e("Add yours"); ?></a><?php endif; ?>)</h4>

<?php if ($comments) : ?>

<?php foreach ($comments as $comment) : ?>

  <?php if( preg_match('#(<trackback />|<pingback />)#', $comment->comment_content) ) { ?>

  <a href="#comment-<?php comment_ID() ?>"><img src="<?php bloginfo('url'); ?>/images/icons/icon_trackback.gif" alt="TrackBack icon" title="An icon the following is a TrackBack excerpt. It also serves as an anchor link to an individual TrackBack excerpt." width="20" height="18" class="trackbackIcon" /></a>

  <div class="trackback" id="comment-<?php comment_ID() ?>">
    <?php if ($comment->comment_approved == '0') : ?>
    <em>Your comment is awaiting moderation.</em><br />
    <?php endif; ?>

    <?php comment_text() ?>
    <p>Read more in <?php comment_author_link() ?></p>
    <p class="trackbackFooter">Pinged from <cite><?php comment_author_link() ?></cite> on <?php comment_date() ?> <?php comment_time() ?> <?php edit_comment_link(__("Edit TrackBack"), ' |'); ?></p>
  </div>

  <?php } else { ?>

  <a href="#comment-<?php comment_ID() ?>"><img src="<?php bloginfo('url'); ?>/images/icons/icon_commentsman.gif" alt="Paper doll icon" title="An icon representing the person who posted the following comment. It also serves as an anchor link to an individual comment." width="20" height="29" class="commentIcon" /></a>

  <div class="comment" id="comment-<?php comment_ID() ?>">

    <div class="gravatar"><img src="<?php echo gravatar('R', 40, 'http://blog.codefront.net/images/default-avatar.png'); ?>" alt="<?php echo $comment->comment_author; ?>'s Gravatar" /></div>

    <?php if ($comment->comment_approved == '0') : ?>
    <em>Your comment is awaiting moderation.</em><br />
    <?php endif; ?>

    <?php comment_text() ?>

    <p class="commentFooter">Posted by: <cite><?php comment_author_link() ?></cite> on <?php comment_date() ?> <?php comment_time() ?> <?php edit_comment_link(__("Edit comment"), ' |'); ?></p>

  </div>

  <?php } ?>

<?php endforeach; /* End foreach comment */?>

<?php else : ?>
  <p>There are no comments yet. Somebody say something!</p>
<?php endif; ?>

<p>You can subscribe to the <a href="<?php bloginfo('comments_rss2_url'); ?>"><abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post</a>.</p>

<!-- Links to next and previous entries. -->
<div class="relMenu">
  <?php next_post('&laquo; %', '', 'yes'); ?> | <a href="<?php bloginfo('url'); ?>">Main</a> | <?php previous_post('% &raquo;', '', 'yes'); ?>
</div>


<?php if (comments_open()) : ?>
<h4 id="commentReply">Post a comment</h4>

<?php if (get_option('comment_registration') && !$user_ID) : ?>

<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<div class="commentForm">
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

  <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
  <input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" />

<?php if ($user_ID) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout</a></p>

<?php else : ?>

<div id="user_details">
  <p>
    <label for="author">Name</label> <?php if ($req) _e('(required)'); ?><br />
    <input type="text" name="author" id="author" class="textarea" value="<?php echo $comment_author; ?>" size="28" tabindex="1" />
  </p>

  <p>
    <label for="email">E-mail</label> <?php if ($req) _e('(required, but never displayed)'); ?><br />
    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="28" tabindex="2" />
  </p>

  <p>
    <label for="url">Website</label><br />
    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="28" tabindex="3" />
  </p>
</div>

<?php endif; ?>

  <p>You can format your comments using <acronym title="Extensible Hypertext Markup Language">XHTML</acronym>. Your email address will not be displayed or used for nefarious purposes.</p>

  <p>Only following tags are allowed:<br /><span class="monospaced"><?php echo allowed_tags(); ?></span></p>

  <p>
    <label for="comment">Your Comment</label><br />
    <textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea>
  </p>

  <p><input name="submit" id="submit" type="submit" tabindex="6" value="Submit Comment" /></p>

<?php do_action('comment_form', $post->ID); ?>

</form>
</div>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p>Sorry, this entry is no longer accepting comments. If you have something you really want to say, you can <a href="<?php bloginfo('url'); ?>/contact/">write me</a>.</p>
<?php endif; ?>