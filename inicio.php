<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
include_once 'includes/faqRec.php';
include_once 'includes/sites.php';
include_once 'includes/faqRec.php';
include_once 'includes/avaliacao.php';
include_once 'includes/servicos.php';
?>

<section id="inicio">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
          <h1 data-aos="fade-up"><span class="typed-words"></span></h1>
          <h2>Criamos seu site mostrando a essência da sua marca
            ao mundo, com profissionais que amam o que fazem.
          </h2>
          <a href="orcamento" class="btn-get-started scrollto">Faça seu orçamento</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="assets/img/inicio.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section>

<main id="main">

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h1 style="text-align: initial;">Porque ter um site profissional?</h1>
      </div>
      <div class="row">
        <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item" data-aos="fade-up">
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                <h4>Visibilidade</h4>
                <p><strong>Se ter um site ajuda a sua marca ou ideia a ser conhecida,
                    imagina um site profissional!</strong> Mostre sua empresa ao mundo com toda a qualidade e profissionalismo
                  que ela tem, facilitando para os seus clientes a te encontrarem nesse
                  mar de informações que é a internet, com a gente, a sua empresa terá a visibilidade que ela merece.
                </p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
              <a class="nav-link" data-toggle="tab" href="#tab-2">
                <h4>Credibilidade</h4>
                <p><strong>Quem confia em quem não conhece?</strong> Não basta ter um site para ser visto, você precisa gerar confiança
                  em quem o acessa.
                  Em um site profissional você mostra que tem qualidade e sabe o que está fazendo,
                  gerando confiança, em seus cliente e fornecedores.
                </p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
              <a class="nav-link" data-toggle="tab" href="#tab-3">
                <h4>Aumento de vendas</h4>
                <p><strong>Porque seu cliente quer comprar de quem ele conhece e confia!</strong>
                  Tenha uma máquina de vendas para a sua empresa, com o seu site
                  profissional totalmente pensado na experiência dos seus usuários,
                  fica muito mais fácil do seu cliente comprar de você e te indicar,
                  impulsione a sua vendas e conquiste o espaço no mercado que você merece.
                </p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
              <a class="nav-link" data-toggle="tab" href="#tab-4">
                <h4>Planejamento e resultados</h4>
                <p><strong>Só chega lá quem se prepara!</strong>
                  Com um site profissional tenha sempre em mãos os dados do seu site,
                  para que você possa traçar estratégias efetivas para sua empresa e
                  produto, a partir de informações reais dos seus clientes.
                </p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <figure>
                <img src="assets/img/clientes.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-2">
              <figure>
                <img src="assets/img/credibilidade.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-3">
              <figure>
                <img src="assets/img/vendas.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-4">
              <figure>
                <img src="assets/img/resultado.png" alt="" class="img-fluid">
              </figure>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->



  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" style="margin-bottom: 3%;">

      <div class="section-title" data-aos="fade-up">
        <h2>Serviços</h2>
        <p>Confira todos os serviços em que somos especializados.</p>
      </div>

      <div class="row">

        <?php foreach ($servicos as $servico) { ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><img src="facite42-pa/front/assets/image/servico/<?= $servico->imagem ?>" alt=""></div>
              <h4 class="title"><a href=""><?= $servico->titulo ?></a></h4>
              <p class="description"><?= $servico->descricao ?></p>
            </div>
          </div>
        <?php } ?>

      </div>

    </div>
    <div class="col-12" style="text-align: center;">
      <a href="orcamento" class="btn btn-success">Pedir Orçamento</a>
    </div>
  </section>
  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Portfólio de <strong>Sites</strong></h2>
        <p>Veja abaixo o resultado de muito trabalho e dedicação em nossos serviços.</p>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($sites as $site) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item" style="width: 515px;height: 355px;">
            <div class="portfolio-wrap">
              <img src="facite42-pa/front/assets/image/portfolio/site/<?= $site->imagem ?>" class="img-fluid" style="width: 393px;height: 262px;">
              <div class="portfolio-info">
                <h4><?= $site->nomeSite ?></h4>
                <p><?= $site->categoria ?></p>
              </div>
              <div class="portfolio-links">
                <a href="<?= $site->link ?>" title="Visitar Site" target="__blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>

  </section>
  <!-- End Portfolio Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row" data-aos="zoom-in">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>Controle total para seu negócio</h3>
          <p>Criamos a melhor plataforma para gerenciar conteúdo para a sua empresa. Tenha um painel administrativo onde você poderá ter autonomia para estar atualizando <strong>imagens</strong>, <strong>textos</strong>, <strong>vídeos</strong> e muito mais.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="btn btn-success" href="orcamento">Faça seu orçamento</a>
        </div>
      </div>

    </div>
  </section>
  <!-- End Cta Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Avaliações</h2>
        <p>Veja o que nossos clientes tem para dizer sobre nossos serviços</p>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

        <?php foreach ($avaliacoes as $avaliacao) { ?>
          <div class="testimonial-item">
            <p style="height: 215px; text-align: center;">
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?= $avaliacao->descricao ?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="facite42-pa/front/assets/image/avaliacao/<?= $avaliacao->imagem ?>" class="testimonial-img" style="height: 90px;">
            <h3><?= $avaliacao->cliente ?></h3>
            <h4><?= $avaliacao->empresa ?></h4>
          </div>
        <?php } ?>

      </div>

    </div>
  </section>
  <!-- End Testimonials Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Perguntas Frequentes</h2>
      </div>
      <?php foreach ($faqs as $faq) { ?>
        <ul class="faq-list">
          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" href="#faq2" class="collapsed"><strong><?= $faq->pergunta ?></strong><i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                <?= $faq->resposta ?>
              </p>
            </div>
          </li>
        </ul>
      <?php } ?>
    </div>
  </section>

</main>
<script src="assets/js/typed.js"></script>
<script>
  var typed = new Typed('.typed-words', {
    strings: ["Sua marca", "Sua empresa", "Sua ideia", "Como você nunca viu!"],
    typeSpeed: 60,
    backSpeed: 60,
    backDelay: 1400,
    startDelay: 800,
    loop: true,
    showCursor: true
  });
</script>
<?php
include_once 'layouts/footer.php';
?>