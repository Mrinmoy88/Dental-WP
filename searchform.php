<form role="search" method="get" class="pbmit-site-searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="form-control field searchform-s" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit"><?php echo esc_html_x('Search', 'submit button'); ?></button>
</form>
