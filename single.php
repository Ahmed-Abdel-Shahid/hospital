<?php get_header() ; ?>


<?php
while(have_posts()){
    the_post();?>


<section
      class="p-4 bg-white"
    > 
    <div class="p-4">
    <?php the_post_thumbnail(); ?>     

      </div>
      
      <div class="-mx-6 flex flex-wrap">
      <h1 class=" p-8 "><?php  the_title(); ?></h1>

 <a class="" href=""><div> author <?php the_author_posts_link(); ?></div></a>
 <div><?php the_time("d/m/y"); ?></div>
                <a class="" href=""><div><?php echo get_the_category_list(); ?></div></a>
              </div>
         <div class="flex-1 px-6">
        <?php  the_content(); ?>
        </div>
      </div>
    </section>

<?php  }
?>

<div id="primary" class="content-area p-8">
    <main id="main" class="site-main p-8">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/post/content', get_post_format() );
        endwhile;

        // If comments are open then we can show the comments template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
    </main>
</div>





<?php get_footer(); ?>
