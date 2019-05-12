<form class="searchbar" action="<?php echo home_url('/');?>" method="get">
    <input class="search_input" type="text" name="s" placeholder="نام قاری را وارد کنید" value="<?php the_search_query(); ?>">
    <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
</form>