<?php
  $content_image = !empty($content_image)?X_ADMIN_CDN.$content_image:''.X_ADMIN_CDN.'themes/10/imgs/1.jpg';
?>

<section id="<?php echo $p['name'];?>">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="section--heading">
          <h1><?php echo html_entity_decode($p['title']);?></h1>
        </div>
      </div>

      <div class="about--sec">
        <div class="about--sec__img">
          <img src="<?php echo $content_image;?>" alt="" class="img-responsive">
        </div>
        <div class="about--sec__text">
          <p class="text-center"><?php echo html_entity_decode($p['data']);?></p>
        </div>
      </div>

    </div>
  </div>
</section>
