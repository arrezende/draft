<?php include 'inc/inc.seo.php'; ?>
</head>
<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php include 'inc/inc.header.php'; ?>

  <main class="intenas-contato internas">
    <div class="slider">
      <div class="slide1">
        <img src="img/banner/contato.jpg" class="img-responsive">
        <div class="carousel-caption">
          <div class="container">
              <div class="box">
                  <div class="content">                            
                    <h1 class="pretitle">Contato</h1>
                  </div>
                </div>
            </div>                        
        </div>
      </div>
    </div> <!-- FIM Slider -->
    <section class="container p20">
      <div class="row p20">
        <div class="col-md-5">
        
        <h2 class="sub-title">Nossa Localização</h2>
        <ul class="no-list">
          <li><i class="fa fa-home"></i> Estrada Pedreira do Itapeti, Nº 100<br>Condomínio Aruã - Quadra 84, Lote 01</li>
          <li><i class="fa fa-home"></i> Cidade Parquelândia - Mogi Das Cruzes/SP </li>
          <li><i class="fa fa-phone"></i> 11 2545 - 5564 | 2546 - 5637</li>
          <!-- <li><i class="fa fa-envelope"></i> Vendas: <a href="mailto:vendas@vianovaplast.com.br">vendas@vianovaplast.com.br</a></li> -->
         </ul>
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14638.5145110293!2d-46.2570609!3d-23.4738567!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf7304dfa10a7fb05!2sDraft+Projetos!5e0!3m2!1spt-BR!2sbr!4v1513615515020"  height="200" frameborder="0" style="border:0;width:100%;margin-top:3%;position:relative;" allowfullscreen></iframe>
        </div>

        <div class="col-md-7">
           <form class="form_contato" action="contato_envia.php?act=contato"  method="post">
              <input type="text" placeholder="Nome" name="txt_nome">
              <input type="text" placeholder="E-mail" name="txt_email">
              <input type="text" placeholder="Telefone" name="txt_telefone">
              
              <!--<input type="text" placeholder="Assunto" name="txt_assunto">-->
                <textarea placeholder="Mensagem" name="area_msg"></textarea>
              <input type="submit" value="Enviar">
           </form>
        </div><!-- /.col-md-6 -->
      </div>
    </section>
    <?php include 'inc/inc.footer.php'; ?>
    <?php include 'inc/inc.js.php'; ?>



</body>

</html>
