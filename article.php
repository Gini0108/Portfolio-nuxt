<?php


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sjors van Holst - <?=$title?></title>

    <meta charset="utf-8">
    <?=$article->getMeta()?>
    <meta name="author" content="Sjors van Holst">
    <!-- <meta name="description" content="SHOULD FIX THIS!!"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />

    <script>
      function selectImage() {
        var viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        var viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

        if (viewportWidth < viewportHeight) document.getElementById("bannerImage").src = "assets/images/Univisium/min/<?=$img_source?>"
        else document.getElementById("bannerImage").src = "assets/images/Napoléon/min/<?=$img_source?>"
      }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119006854-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119006854-2');
    </script>
  </head>

  <body class="background" onload="selectImage()" onresize="selectImage()">
    <div class="navbar flex-container desktop-row mobile-column">
      <div class="header">
        Sjors van Holst
      </div>
      <a class="desktop-only align-left" href="https://sjorsvanholst.nl">
        <div class="item test">
          return to main
        </div>
      </a>
    </div>

    <div class="content">
      <div class="cell rounded">
        <!-- <img id="bannerImage" class="banner rounded" alt="" title=""> -->
        <div class="mobile-divider-small desktop-divider-small"></div>
        <div class="line center"></div>
        <h1><?=$article->getTitle()?></h1>
        <div class="line center"></div>
        <div class="mobile-divider-small desktop-divider-small"></div>
        <?=var_dump($article->getcontent())?>
      </div>
    </div>
  </body>
</html>
