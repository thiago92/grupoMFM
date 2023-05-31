<?php
// Template name: Home 
get_header(); 
?> 
<section class="secaoSobreOGrupo mt-5">
    <div class="container">
        <div class="row">
          <div class="col-md-6 radius wow fadeInLeftBig" data-wow-duration="0.8s" data-wow-delay="0.6s">
			  <?php $imagem = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
            <img class="radius" src="<?php echo $imagem; ?>" alt="" width="100%">
          </div>
          <div class="col-md-6 pt-4 wow fadeInLeftBig text-white" data-wow-duration="0.8s" data-wow-delay="0.6s">
            <h2 class="title1"><strong><?php echo get_the_title(); ?></strong></h2>
            <p class="historia">
              <?php the_content(); ?>
            </p>
          </div>
        </div>
    </div>
</section>

<div class="linhaTracejada container linha mt-5 wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.6s"></div>

<section class="mb-5" >
  <div class="container wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.6s">
    <h2 class="title2">Conheça as empresas do Grupo:</h2>
  </div>
  <div class="container empresas wow fadeInRightBig" data-wow-duration="0.8s" data-wow-delay="0.6s">
    <div class="row">
      <div class="col-md-3 col-6">
        <a href="https://www.idealine.com.br/" target="_blank"><img class="zoomImg" src="<?php bloginfo("template_url");?>/img/logo-idealine.png" alt=""></a>
      </div>
      <div class="col-md-3 col-6">
        <a href="https://madumfm.com.br/" target="_blank"><img class="zoomImg" src="<?php bloginfo("template_url");?>/img/logo-madu.png" alt=""></a>
      </div>
      <div class="col-md-3 col-6">
        <a href="https://stermax.com.br/" target="_blank"><img class="zoomImg" src="<?php bloginfo("template_url");?>/img/logo-stermax.png" alt=""></a>
      </div>
      <div class="col-md-3 col-6">
        <a href="https://metalplano.com.br/" target="_blank"><img class="zoomImg" src="<?php bloginfo("template_url");?>/img/logo-metal.png" alt=""></a>
      </div>
    </div>
  </div>
</section>
    
<?php get_footer(); ?>