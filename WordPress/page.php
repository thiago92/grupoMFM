<?php get_header();?>

<div class="container mt-5 mb-5">
    <div class="row text-white">
        <div class="col-md-6">
            <?php $image =  get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>
            <img src="<?php echo $image;?>" alt="" class="w-100" />
        </div>
        <div class="col-md-6">
            <h1><?php the_title();?></h1>
            <?php the_content();?>
        </div>        
    </div>
</div>

<?php get_footer();?>