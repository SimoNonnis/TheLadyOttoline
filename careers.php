<?php

/*Template Name: Carrers Page*/

get_header();

?>



<section class=" copy-only-section copy-only-section--skin">
  <h2 class="u-margin-t-flush  [ page-title ]"><?php echo get_the_title(); ?></h2>
  <p class="p-with-padding-bottom">
    We're always on the look out for positive, passionate people to join our team. Our current vacancies are listed below - please send your CV to
    <a class="u-textBreak" href="mailto:info@theladyottoline.com?subject=The Lady Ottoline Career Enquiry">info@theladyottoline.com</a>
    with the position in the subject line.  
  </p> 
  
  <section>
    
  <?php if( have_rows('careers') ): ?>
    <?php while( have_rows('careers') ): the_row(); 
    
    $job_image        = get_sub_field('job_image');
    $job_title        = get_sub_field('job_title');
    $job_copy         = get_sub_field('job_copy');
    $job_email        = get_sub_field('job_email');
    $job_email_subj   = get_sub_field('job_email_subj');
    
  ?>

    <article class="media-obj">
      <div class="media-obj__img-div">
        <img src="<?php echo $job_image['sizes']['235x235']; ?>" alt="<?php echo $job_image['alt']; ?>">
      </div>
      <div class="media-obj__body">
        <h3 class="u-margin-t-flush  [ page-title ] media-obj-body__title"><?php echo $job_title; ?></h3>
         
          <?php echo $job_copy; ?>

        <a class="btn btn--topSection borderDouble button-dark" href="mailto:<?php echo $job_email; ?>?subject=<?php echo $job_email_subj; ?>">send your cv</a>
      </div>
      
    </article>

    <?php endwhile; ?>

  <?php else : ?>
  <article class="media-obj">
    <p class="u-margin-t-flush u-textUpperCase">No Available positions at the moment.</p>
  </article>
  <?php endif; ?>

  </section>



 
</section>
 







<?php get_footer(); ?>