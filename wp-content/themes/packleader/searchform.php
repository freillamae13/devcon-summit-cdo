<form action="/" method="get">
    <fieldset>
        <input type="text" name="s" id="search" placeholder="<?php _e('Search…','misfitlang'); ?>" value="<?php the_search_query(); ?>">
        <input type="submit">
		<i class="fa fa-search"></i>
    </fieldset>
</form>