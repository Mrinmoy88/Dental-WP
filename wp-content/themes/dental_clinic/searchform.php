<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
    <div class="pbmit-header-search-btn">
        <label class="screen-reader-text" for="s"><?php _e('Search for:', 'your-textdomain'); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e('Search...', 'your-textdomain'); ?>" />
        <button type="submit" id="searchsubmit">
            <i class="pbmit-base-icon-search-1"></i>
        </button>
    </div>
</form>

