<form method="get" class="searchform" action="<?php echo home_url(); ?>">
<fieldset>
	<input type="text" value="<?php the_search_query(); ?>" name="s" /><button type="submit" name="searchsubmit" value="<?php _e('Search', 'purple_pro') ?>"><span></span></button>
</fieldset>
</form>