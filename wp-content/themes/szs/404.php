<html>
  <head>
    <title>404</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
  </head>
<body <?php body_class() ?>>
  
    <div class="container-404">
      <div class="title-404">
        <h2>404</h2>
        <h3>Sorry, page not found.</h3>
      </div>
      <a href="<?php echo site_url() ?>" class="btn-404"><i class="fa fa-home"></i> Go Home</a>
    </div>

  <?php wp_footer() ?>
  </body>
</html>