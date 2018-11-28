<?php include 'inc/inc.seo.php'; ?>
</head>
<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php include 'inc/inc.header.php'; ?>

  <main class="clientes internas">
    <div class="slider">
      <div class="slide1">
        <img src="img/banner/clientes.jpg" class="img-responsive">
        <div class="carousel-caption">
          <div class="container">
              <div class="box">
                  <div class="content">                            
                    <h1 class="pretitle">Clientes</h1>
                  </div>
                </div>
            </div>                        
        </div>
      </div>
    </div> <!-- FIM Slider -->
    <section class="container p20">
      <div class="row p20">
       <?
            $files = glob("img/clientes/*.*");
            for ($i=0; $i<count($files); $i++)
            {
              $num = $files[$i];
              $name = $num;
              $name2   = array('img/clientes/', '.jpg','.png', ' - ');
              $replace   = array(' ', ' ',' ');
              $final =  str_replace($name2, $replace, $name);
              $thumb = explode('img/clientes/', $num);
              $thumb = $thumb[1];
              $tamanho = getimagesize($num);
              $text = str_replace('-', ' ', $final);
              $text = explode('.', $text);
              $text = $text[0];
               echo '
               <div class="col-md-2">
                
                  <img class="img-responsive" src="'.$num.'" alt="'.$text.'" title ="'.$text.'"/>
                
              </div> <!-- col-6 / end -->
              ';
          }
          ?>

      
      </div>
    </section>
    <?php include 'inc/inc.footer.php'; ?>
    <?php include 'inc/inc.js.php'; ?>



</body>

</html>
