<?php
  $css_file = (!empty($css_file))?$css_file:'blue';
  $header = X_ADMIN_CDN . (!empty($header)?$header:'themes/10/imgs/'.$css_file.'_bg.jpg');
    if(!empty($logo_type) && $logo_type == 2){
    $logo = X_ADMIN_CDN . (!empty($logo_img)?$logo_img:'themes/10/imgs/logo.jpg');
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo X_ADMIN_CDN;?>themes/8/css/bespider.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      header {
          background-image: url('<?php echo $header;?>');
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php if($logo_type == 2){ ?><img src="<?php echo $logo;?>"><?php }else{ echo $logo; }?></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <?php
              get_menu($pages,$theme_type,$domain);
            ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <?php if((isset($p['header']) && $p['header']==1) || $p['name']=='home'){ ?>
        <header class="bg header" id="header">

          <div class="header--text">
            <?php if(!empty($header_text)) {?>
                <h1><?php echo $header_text;?></h1>
            <?php }else{ ?>
                <h1>WelCome To <?php echo $title;?></h1>
            <?php } ?>
          </div>
        </header>
      <?php } ?>
