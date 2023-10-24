<section id="<?php echo $p['name'];?>">

  <div class="preview--img" id="pre--img">
    <img src="" alt="">
    <i class="fa fa-times fa-2x" onclick="$('#pre--img').removeClass('d--flex').hide('slow');"></i>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section--heading">
          <h1><?php echo html_entity_decode($p['title']);?></h1>
        </div>
      </div>
    </div>
    <div class="row gallery">

      <?php
      $gallery = (isset($p['data']) && !empty($p['data']))?json_decode($p['data'],true):array();
      $thumbs = isset($gallery['thumbs'])?$gallery['thumbs']:array();
      $images = isset($gallery['images'])?$gallery['images']:array();


      foreach ($thumbs as $k => $v){
        echo '<div class="col-md-4 col-sm-4 col-xs-12"><div class="gal--img"><img src="'.X_ADMIN_CDN . $v.'" alt="" class="img-responsive img-rounded"><div class="gal--img__hover"><i class="fa fa-3x fa-eye"></i></div></div></div>';
      }?>
    </div>
  </div>
</section>
