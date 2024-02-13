<section id="<?php echo $p['name'];?>">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section--heading">
            <h1><?php echo html_entity_decode($p['title']);?></h1>
          </div>
        </div>
      </div>

      <div class="row">
        <form class="contact--form">
          <div class="">
            <span class=""><i class="fa fa-user fa-2x"></i></span>
            <input type="text" name="" value="" placeholder="Enter Name.." required>
          </div>
          <div class="">
            <span class=""><i class="fa fa-envelope fa-2x"></i></span>
            <input type="email" name="" value="" placeholder="Enter Email.." required>
          </div>
          <div class="">
            <span class=""><i class="fa fa-phone-square fa-2x"></i></span>
            <input type="tel" name="" value="" placeholder="Enter Phone.." required>
          </div>
          <div class="">
            <span class=""><i class="fa fa-comments fa-2x"></i></span>
            <textarea name="name" placeholder="Enter Comment.." required></textarea>
          </div>
          <div class="text-right">
            <button type="submit" name="button" class="sub--btn">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <footer>
    <p class="text-center">Copyright (c) 2017 <?php echo $title; ?> - All Rights Reserved.</p>
  </footer>
