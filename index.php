<?php get_header() ; ?>






<section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>All posts </h2>
        <br>
      </div>
      <div class="row">
      <?php
$the_query = new wp_query(array(
"post_type" => "post",

));

while($the_query ->have_posts()) {
  $the_query ->the_post(); ?>


        <div class="col-sm-6 col-md-4 mx-auto ">
          <div class="box ">
            <div class="img-box">
<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="#"></a>

            </div>
            <div class="detail-box">
          
              <h5><a href="<?php the_permalink(); ?>"> <?php  the_title(); ?></a></h5>
           
              <p>
              <?php echo wp_trim_words(get_the_content() , 9) ; ?>  
              </p>
             
              <a class="" href=""><div><?php echo get_the_category_list(); ?></div></a>

              <a class="hover:text-gray-300" href=""><div><?php the_time("d/m/y"); ?></div></a>
              <a class="hover:text-gray-300" href=""><div><?php the_author_posts_link(); ?></div></a>

              <a
              href="<?php the_permalink(); ?>"
              class="inline-flex items-center rounded-lg bg-rose-800 px-3 py-2 text-center text-sm font-medium text-white hover:bg-rose-900"
            >
              Read more
              <span class="ml-1.5 text-xl">&rarr;</span>
            </a>
            </div>
          </div>
        </div>
<?php } ?>
      </div>


      
      <div class="btn-box">
     
      </div>
    </div>
  </section>










<?php get_footer(); ?>
