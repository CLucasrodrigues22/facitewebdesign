<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
include_once 'includes/logoDetalhe.php';
?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <?php if ($logoInfo->id != '') : ?>
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="inicio#hero">Início</a></li>
          <li>Portfólio - <?= $logoInfo->cliente ?></li>
        </ol>
        <h2><?= $logoInfo->cliente ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <?php foreach ($imagens as $img) { ?>
              <img src="facite42-pa/front/assets/image/portfolio/logotipo/<?= $logoInfo->id . "/" . $img->imagem ?>" class="img-fluid" style="width: 1200px;height: 700px;">
            <?php } ?>
          </div>

          <div class="portfolio-info">
            <h3>Informações do Projeto</h3>
            <ul>
              <li><strong>Cliente</strong>: <?= $logoInfo->cliente ?></li>
              <li><strong>Serviço</strong>: <?= $logoInfo->servico ?></li>
              <li><strong>Data do projeto</strong>: <?= $logoInfo->lancamento ?></li>
              <li><strong>Direção de arte</strong>: <?= $logoInfo->direcao ?></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2><?= $logoInfo->cliente ?></h2>
          <h5><?= $logoInfo->subtitulo ?></h5><br>
          <p>
            <?= $logoInfo->descricao ?>
          </p>
        </div>

      </div>
    </section>
  <?php endif; ?>

</main><!-- End #main -->

<?php
include_once 'layouts/footer.php';
?>