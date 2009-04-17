<div id="menu">

  <div class="menuSection">
    <h4 class="menuTitle"><label for="s">Search</label></h4>
    <div class="menuItem">
      <form id="searchform" method="get" action="<?php echo $PHP_SELF; ?>">
        <div>
        <input type="text" name="s" id="s" size="15" />
        <input type="submit" name="submit" value="<?php _e('Search'); ?>" />
        </div>
      </form>
    </div>
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">Recent Entries</h4>
    <div class="menuItem">
      <ul>
        <?php get_archives('postbypost','5','html'); ?>
      </ul>
    </div>
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">Categories</h4>
    <div class="menuItem">
      <ul>
        <?php wp_list_cats('sort_column=name'); ?>
      </ul>
    </div>
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">Archives</h4>
    <div class="menuItem">
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </div>
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">Trivia</h4>

    <div class="menuItem">
      <?php echo get_post_count(); ?> entries and <?php echo get_post_word_count(); ?> words.
    </div>
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">Subscribe</h4>
    <div class="buttons">
      <a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('url'); ?>/images/buttons/rss2.gif" alt="RSS 2.0 feed" title="RSS 2.0 feed" class="button" /></a>
      <a href="<?php bloginfo('atom_url'); ?>"><img src="<?php bloginfo('url'); ?>/images/buttons/atom.png" alt="Atom 0.3 feed" title="Atom 0.3 feed" class="button" /></a>
    </div>
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">Copyright</h4>
    <p class="menuItem"><a href="http://creativecommons.org/licenses/by-nc-sa/2.0/"><img alt="Creative Commons License" src="<?php bloginfo('url'); ?>/images/somerights20.gif" /></a></p>
  </div>
</div>