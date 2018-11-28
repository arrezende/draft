<?php
# ------------------ #
# Author: Ubika Brasil #
# ------------------ #
header("Content-Type: text/html; charset=utf-8", true);

# ----------------------------------------
# Catch actual page
# ----------------------------------------
$activePage = basename($_SERVER['REQUEST_URI']);

# ----------------------------------------
# Cases
# ----------------------------------------
switch($activePage)
{
  # ----------------------------------------
  case "home":
    $title       = "Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeHome = 'active';
  break;
  # ----------------------------------------
  case "sobre-nos":
    $title       = "Sobre Nós | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeSobre = 'active';
  break;
  case "contato":
    $title       = "Entre em Contato | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeContato = 'active';
  break;
  case "clientes":
    $title       = "Clientes | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeCliente = 'active';
  break;
  case "projetos-para-industria-alimenticia":
    $title       = "Projetos para Indústria de Alimentos | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeCliente = 'active';
  break;
  # ----------------------------------------
  case "index.php":
    $title       = "Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeHome = 'active';
  break;
  case "prevencao-e-combate-a-incendio":
    $title       = "Projetos para prevenção e combate a incêndio (PPCI) | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "engenharia-arquitetura":
    $title       = "Engenharia e Arquitetura | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projetos-de-engenharia-civil-e-arquitetura":
    $title       = "Projetos de Engenharia Civil e Arquitetura | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projetos-para-industria-quimica":
    $title       = "Indústrias Químicas | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projetos-de-equipamentos":
    $title       = "Projetos de Equipamentos Especiais | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projetos-multidisciplinares":
    $title       = "Projetos Multidisciplinares | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projetos-eletricos":
    $title       = "Projetos Elétricos e Projetos de Automação | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projetos-estruturais":
    $title       = "Projetos Estruturais | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "desenho-e-projeto-de-tubulacao-industrial":
    $title       = "Desenho e projeto de tubulação industrial | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "eletricos-industriais":
    $title       = "Projetos Elétricos | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "eletricos":
    $title       = "Projetos Elétricos | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "eletromecanica":
    $title       = "Projetos de Eletromecânica | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "galpao-comercial":
    $title       = "Projeto de Galpão Comercial | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "galpao-metalico":
    $title       = "Projeto de Galpão Metálico | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "industria-textil":
    $title       = "Projeto Indústria Têxtil | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "industria":
    $title       = "Projetos para Indústria | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projetos-mecanicos":
    $title       = "Projetos Mecânicos | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "prevencao-e-combate-a-incendio":
    $title       = "Projetos para prevenção e combate a incêndio (PPCI) | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-de-estacao-de-tratamento-de-esgoto-sanitario-e-industrial":
    $title       = "Projeto de estação de tratamento de esgoto sanitário e industrial | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-de-fabrica-e-de-instalacoes-industriais-layout":
    $title       = "Projeto de Fábrica e de Instalações Industriais Layout/Arranjo Físico | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-de-instalacoes-industriais":
    $title       = "Projeto de instalações industriais | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-de-plataformas-para-acessibilidade":
    $title       = "Projeto de plataformas para acessibilidade | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-industria-de-alimentos":
    $title       = "Projeto de indústria de alimentos | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-industria-de-cosmeticos":
    $title       = "Projeto de indústria de cosméticos | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-mecanicos-em-3d":
    $title       = "Projetos mecânicos em 3D | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-mini-estacao-de-tratamento-de-agua":
    $title       = "Projeto mini estação de tratamento de água | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-para-agua-de-reuso":
    $title       = "Projeto para água de reuso | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-para-equipamentos-de-elevacao-e-transporte-de-carga":
    $title       = "Projeto para equipamentos de elevação e transporte de carga | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
    break;
  case "projeto-para-equipamentos-eletricos":
    $title       = "Projetos de equipamentos elétricos | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-para-industria-de-borracha":
    $title       = "Projeto para indústrias de borracha | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-para-industria-de-farmaceutica":
    $title       = "Projetos para indústria farmacêutica | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-para-industria-de-laticinios":
    $title       = "Projeto para indústrias de laticínios | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-para-maquinas-industriais":
    $title       = "Projetos para máquinas industriais | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projeto-tecnico-de-combate-a-incendio":
    $title       = "Projeto técnico de combate a incêndio (PPCI) | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "seguranca-em-projetos-eletricos-nr10":
    $title       = "Segurança em projetos elétricos NR10 | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projetos-seguranca-industrial":
    $title       = "Segurança Industrial | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "tubulacao-industrial":
    $title       = "Projeto de tubulação industrial | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  case "projetos-de-utilidades-industriais":
    $title       = "Projetos de Utilidades Industriais | Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeProjetos = 'active';
  break;
  default:
    $title       = "Draft Projetos Industriais";
    $description = "";
    $keywords    = "";
    $canonical   = "";
    $activeHome = 'active';

  break;
}
?>
<!doctype html>
<html lang="pt-BR">
<!--
# ~~~~~~~~~~~~~~~~~~ #
# Author: Ubika Brasil #
# ~~~~~~~~~~~~~~~~~~ #
-->
<head>

  <!-- Sempre checar se está OK daqui para baixo -->
  
  <!-- Title -->
  <title><?=$title?></title>
  <!-- Charset -->
  <meta charset="UTF-8">
  <!-- Meta Tags -->
  <meta name="description" content="<?=$description?>">
  <meta name="keywords" content="<?=$keywords?>">
    <!-- Canonical -->
  <link rel="canonical" href="<?=$canonical?>" />
    <!-- OpenGraph -->
  <meta property="og:region" content="Brasil">
  <meta property="og:title" content="<?=$title?>">
  <meta property="og:type" content="article">
  <meta property="og:description" content="<?=$description?>">
  <meta property="og:site_name" content="<?=$title?>">
  <meta property="og:keywords" content="<?=$keywords?>">
  <meta property="og:canonical" content="<?=$canonical?>">

  <meta name="author" content="Ubika Brasil">
  <meta name="fone" content="11 3673-7056 | 11 3864-6282" />
  <meta name="city" content="São Paulo"/>

  <!-- Daqui para baixo é padrão, não mexer -->

  <meta name="country" content="Brasil"/>
  <meta name="geo.region" content="-BR" />
  <meta name="copyright" content="Copyright " />
  <meta name="geo.position" content="-23.539351;-46.681925"> 
  <meta name="geo.placename" content="São Paulo-SP"> 
  <meta name="geo.region" content="SP-BR">
  <meta name="ICBM" content="-23.539351;-46.681925">
  <meta name="robots" content="index,follow">
  <meta name="rating" content="General">
  <meta name="revisit-after" content="2 days">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <!-- CDN -->
<?php include 'inc/inc.cdn.php'; ?>
  <!-- CSS -->
<?php include 'inc/inc.css.php'; ?>

<?php
#if ($activePage == 'PAGE_NAME_OR_FRIENDLY_URL')
#{
#  echo '  <!-- Unique -->'."\n";
#  echo '  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">'."\n";
#  echo '  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">'."\n";
#  echo '  <link rel="stylesheet" href="assets/3dcarousel/3dcarousel.css">'."\n";
#}
?>
  <!-- Scripts -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-108250624-1');
  </script>
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "DryCleaningOrLaundry",
    "name": "Lavanderia Royal",
    "image": "https://www.lavanderiaroyal.com.br/img/logo.png",
    "@id": "https://www.lavanderiaroyal.com.br/",
    "url": "https://www.lavanderiaroyal.com.br/",
    "telephone": "+551138646282",
    "address":
    {
      "@type": "PostalAddress",
      "streetAddress": "Rua Piracuama, 267",
      "addressLocality": "São Paulo",
      "postalCode": "05017-040",
      "addressCountry": "BR"
    },
    "geo":
    {
      "@type": "GeoCoordinates",
      "latitude": -23.5309512,
      "longitude": -46.6750812
    },
    "openingHoursSpecification":
    [{
      "@type": "OpeningHoursSpecification",
      "dayOfWeek":
      [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "07:30",
      "closes": "18:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "07:30",
      "closes": "18:00"
    }]
  }
</script>
 <script type="application/ld+json">
 {
   "@context": "http://schema.org",
   "@type": "Organization",
   "url": "https://www.lavanderiaroyal.com.br/",
   "contactPoint":
   [{
      "@type": "ContactPoint",
      "telephone": "+551136737056",
      "contactType": "customer service"
    },
    {
      "@type": "ContactPoint",
      "telephone": "+551138646282",
      "contactType": "customer service"
    }]
  }
</script>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>

