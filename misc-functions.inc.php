<?php
/**
 * Purpose: Miscellanous functions.
 */

// Returns total number of words in all posts.
function get_post_word_count() {
    global $wpdb, $tableposts;
        $words = $wpdb->get_results("SELECT post_content FROM $tableposts WHERE post_status = 'publish'");
        foreach ($words as $word) {
                $post = strip_tags($word->post_content);
                $post = explode(' ', $post);
                $count = count($post);
                $totalcount = $count + $oldcount;
                $oldcount = $totalcount;
        }
        echo number_format($totalcount);
}

// Returns total number of words in all comments.
function get_comment_word_count() {
    global $wpdb, $tablecomments;
        $words = $wpdb->get_results("SELECT comment_content FROM $tablecomments WHERE comment_approved = '1'");
        foreach ($words as $word) {
                $comment = strip_tags($word->comment_content);
                $comment = explode(' ', $comment);
                $count = count($comment);
                $totalcount = $count + $oldcount;
                $oldcount = $totalcount;
        }
        echo number_format($totalcount);
}

// Returns total number of posts.
function get_post_count() {
    global $wpdb, $tableposts;
        $request = "SELECT COUNT(*) FROM $tableposts WHERE post_status = 'publish'";
        echo $wpdb->get_var($request);
}

// Returns total number of comments.
//function get_comment_count($all_posts = true) {
//    global $wpdb, $tablecomments, $id;
//        $request = "SELECT COUNT(*) FROM $tablecomments WHERE comment_approved = '1'";
//        if (!$all_posts) { $request .= " WHERE comment_post_ID=$id"; }
//    echo $wpdb->get_var($request);
//}
?>
