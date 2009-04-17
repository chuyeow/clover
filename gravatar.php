<?php
function gravatar($rating = false, $size = false, $default = false, $border = false) {
  global $comment;
  $out = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($comment->comment_author_email);
  if($rating && $rating != '')
    $out .= "&amp;rating=".$rating;
  if($size && $size != '')
    $out .="&amp;size=".$size;
  if($default && $default != '')
    $out .= "&amp;default=".urlencode($default);
  if($border && $border != '')
    $out .= "&amp;border=".$border;
  echo $out;
}
?>
