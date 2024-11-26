<?php get_header() ; ?>



<?php get_header();?>

<?php
while(have_posts()){
    the_post(); ?>






<?php }
?>
<section

      class="p-4 bg-white"
    > 
    <div class="p-4">
    <?php the_post_thumbnail(); ?>     

      </div>
      <div class="-mx-6 flex flex-wrap">
      <h1 class="bg-gray-700 text-gray p-8 "><?php  the_title(); ?></h1>
<hr>
        <div class="flex-1 px-6">
        <?php  the_content(); ?>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>