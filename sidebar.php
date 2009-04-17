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
    <h4 class="menuTitle">Subscribe</h4>
    <div class="buttons">
      <a href="http://feeds.feedburner.com/riab" style="border: 0;"><img src="http://feeds.feedburner.com/~fc/riab?bg=99CCFF&amp;fg=444444&amp;anim=0" height="26" width="88" alt="Subscribe to the feed" /></a>
    </div>
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">I Wrote</h4>
    <a href="http://sitepoint.com/books/firefox1/"><img src="<?php bloginfo('url'); ?>/images/firefox-secrets.jpg" alt="Firefox Secrets" title="Firefox Secrets" class="button" /></a>
  </div>

  <div class="menuSection">
    <a href="http://weblog.workingwithrails.com/2008/1/3/december-hackfest-winners-announced"><img src="<?php bloginfo('url'); ?>/images/rails-hackfest-winner.gif" alt="Rails Hackfest winner December, October and September 2007" title="Rails Hackfest winner" /></a>
    <img src="<?php bloginfo('url'); ?>/images/rails-core-contributor.gif" alt="Rails Core Contributor" />
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

<!--<script type="text/javascript">--><!--
google_ad_client = "pub-1462485125439310";
google_ad_width = 160;
google_ad_height = 600;
google_ad_format = "160x600_as";

google_ad_channel ="";
google_ad_type = "text";
google_color_border = "336600";
google_color_bg = "FFFFFF";
google_color_link = "666666";
google_color_url = "669900";
google_color_text = "666666";
//--><!--</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>-->
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">Trivia</h4>

    <div class="menuItem">
      <?php echo get_post_count(); ?> entries and <?php echo get_post_word_count(); ?> words.
    </div>
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">I Work For</h4>
    <div class="menuItem">
      <a href="http://www.wego.com/">Wego - the Travel Search Engine</a>
    </div>
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">Subscribe</h4>
    <div class="buttons">
      <a href="http://feeds.feedburner.com/riab"><img src="http://feeds.feedburner.com/~fc/riab?bg=99CCFF&amp;fg=444444&amp;anim=0" height="26" width="88" alt="Subscribe to the feed" /></a>
      <a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('url'); ?>/images/buttons/rss2.gif" alt="RSS 2.0 feed" title="RSS 2.0 feed" class="button" /></a>
      <a href="<?php bloginfo('atom_url'); ?>"><img src="<?php bloginfo('url'); ?>/images/buttons/atom.png" alt="Atom 0.3 feed" title="Atom 0.3 feed" class="button" /></a>
    </div>
  </div>

  <div class="menuSection">
    <h4 class="menuTitle">Copyright</h4>
    <p class="menuItem"><a href="http://creativecommons.org/licenses/by-nc-sa/2.0/"><img alt="Creative Commons License" src="<?php bloginfo('url'); ?>/images/somerights20.gif" /></a></p>
  </div>
</div>