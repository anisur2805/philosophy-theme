<?php
$source_video_file = "";
if ( function_exists( 'the_field' ) ) {
 $source_video_file = get_field( "source_file" );
}
?>

<article class="masonry__brick entry format-video" data-aos="fade-up">
    <?php if($source_video_file): ?>
  <div class="entry__thumb video-image">

    <a href="<?php echo esc_url($source_video_file); ?>?color=01aef0&title=0&byline=0&portrait=0" data-lity>
        <?php the_post_thumbnail( 'philosophy-home-squre' );?>
      </a>

    </div>
      <?php endif; ?>
<?php get_template_part( 'template-parts/common/post/summery' )?>
</article> <!-- end article -->