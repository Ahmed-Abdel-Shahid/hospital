

<?php get_header(); ?>





<main
       
      >
        <div
          class="z-10 mx-auto mt-32 max-w-6xl px-6 py-6 text-white md:px-8 md:py-8"
        >
          <div class="space-y-4">
            <h1 class="font-poppin text-5xl text-white"> <?php the_archive_title(); ?> </h1>
            <p class="font-poppin text-xl text-white">
            <?php the_archive_description(); ?>            </p>
          </div>
        </div>
      </main>
    </div>
    <section
      class="mx-auto max-w-6xl px-6 py-10 font-poppin text-lg text-gray-800 md:px-8"
    > 

 <div class="bg-gray-200 py-16">
      <div
        class="mx-auto mb-6 max-w-6xl px-6 text-center font-poppin text-3xl font-semibold text-gray-900 md:px-8 xl:text-left"
      >
        All posts archive
      </div>
      <div
        class="mx-auto flex max-w-6xl items-center justify-center px-6 font-poppin md:px-8"
      >
        <!-- Resice the preview panel to check the responsiveness -->

        <!-- Component Start -->
        <div
          class="grid max-w-6xl grid-cols-1 gap-4 md:grid-cols-2 md:gap-2 xl:grid-cols-4"
        >
        <?php
while(have_posts()){
    the_post();?>
          <!-- Tile 1 -->
          <div class="flex flex-col rounded-lg bg-white p-4">
            <div class="h-40 rounded-lg">
              <a href="<?php the_permalink(); ?>
              "> <img
                class="block h-full w-full rounded-lg object-cover"
                src="<?php the_post_thumbnail_url(); ?>"
                alt=""
              /></a>
             
            </div>
            <div class="mt-4 flex flex-col items-start">
              <a href="<?php the_permalink(); ?>"><h4 class="text-xl font-semibold text-gray-800"><?php the_title(); ?></h4></a>
              
              <p class="text-sm text-gray-700">
              <?php echo wp_trim_words(get_the_content(),16) ; ?>              </p>
              <div
                class="mt-3 flex w-full justify-between rounded bg-rose-800 p-2 text-xs font-medium text-white"
              >
                <a class="hover:text-gray-300" href=""><div><?php the_author_posts_link(); ?></div></a>
               <div><?php the_time("d/m/y"); ?></div>
                <a class="hover:text-gray-300" href=""><div><?php echo get_the_category_list(); ?></div></a>
              </div>
              <a
                class="mt-3 rounded bg-cyan-800 p-2 text-xs font-medium leading-none text-white hover:bg-cyan-900"
                href=" <?php the_permalink(); ?> ">reed more</a
              >
            </div>
          </div>
          <?php  }
?>
      
        
   
        <!-- Component End  -->
      </div>
    </div>
  
</section>
<div class="p-4 text-center ">
<?php echo paginate_links(); ?>
</div>

    <?php get_footer(); ?>
