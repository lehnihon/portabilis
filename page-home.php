<?php
get_header(); ?>
<div id="banner">
  <div class="wrap-title wow animated fadeInUp banner-home">
    <h1><?php the_field('home_banner_titulo'); ?></h1>
    <div class="big subtitle"><?php the_field('home_banner_subtitulo'); ?></div>
    <div class="action">
      <a href="https://conteudos.portabilis.com.br/home-site" class="btn-base btn-azul" title="Quero conhecer">Quero conhecer</a>
    </div>
    <img class="img-fluid d-none" src="/wp-content/uploads/2019/07/banner-principal-home-1.png" alt="Conheça a Portabilis">
  </div>
</div>
<div id="page" class="pad-home">
  <div class="div-banner">
  </div>
  <div class="section-a">
    <div class="container">
      <div class="row no-gutters justify-content-center title-home">
        <div class="col-lg-7 col-sm-12">
          <h2 class="wow animated fadeInUp">O que a Portabilis faz?</h2>
          <p class="subtitle text-center wow animated fadeInUp" data-wow-delay="0.25s">A Portabilis ajuda que os municípios tenham uma gestão mais precisa e eficiente através do uso de tecnologia e dados nas áreas da educação e da assistência social.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 offset-lg-1 col-sm-6 mb-4 mb-sm-0 wow animated zoomIn">
          <img width="300" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/home-educacao.jpg"; ?>" />
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 align-self-center wow animated fadeInRight" data-wow-delay="0.25s">
          <h3>Na educação</h3>
          <p>Guiamos os gestores através de dados reais, superando a falta de informação, facilitando a tomada de decisão e viabilizando que as metas pedagógicas sejam cada vez mais alcançáveis e possíveis.</p>
          <a href="<?php echo home_url( '/ieducar' ); ?>" class="btn-baseb btn-blue" title="">Saiba mais</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-b section-padding section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-2 col-sm-6 mb-4 mb-sm-0 wow animated zoomIn" data-wow-delay="0.25s">
          <h3>Ensino remoto, sem deixar ninguém pra trás</h3>
          <p>Nós te ajudamos a estabelecer uma estratégia de ensino remoto equitativa e eficiente.</p>
          <a href="https://conteudos.portabilis.com.br/ensino-remoto" target="_blank"  class="btn-baseb btn-blue" title="">Quero conhecer</a>
        </div>
        <div class="col-lg-4 offset-lg-1 col-sm-6 wow animated fadeInLeft">
          <img class="img-fluid" src="/wp-content/themes/portabilis-master/assets/img/publicacoes.png" />
        </div>
      </div>
    </div>
  </div>
  <div class="section-a">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-1 col-sm-6 order-sm-1 order-2 wow animated fadeInLeft">
          <img class="img-fluid" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/assistencia-social.png" />
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 mb-4 mb-sm-0 order-sm-2 order-1 wow animated zoomIn" data-wow-delay="0.25s">
          <h3>Na assistência social</h3>
          <p>Auxiliamos os gestores do SUAS no acompanhamento da evolução e emancipação das famílias atendidas nos serviços socioassistenciais, gerando dados para otimizar os fluxos e projetos da secretaria.</p>
          <a href="<?php echo home_url( '/sas' ); ?>" class="btn-baseb btn-blue" title="">Saiba mais</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-b section-padding section-margin">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 offset-lg-1 col-sm-6 pr-lg-3 align-self-center wow animated fadeInLeft">
          <h2>Por que educação e assistência social? </h2>
        </div>
        <div class="col-lg-6 col-sm-6  wow animated fadeInRight" data-wow-delay="0.25s">
          <p>Ao longo dos anos, descobrimos que aspectos socioassistenciais impactam e interferem na aprendizagem dos alunos em sala de aula. Por isso investimos nessas duas áreas, para produzir, sistematizar e usar os dados destas duas áreas para orientar ambas políticas públicas.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-a">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-1 col-sm-6 mb-4 mb-sm-0 wow animated zoomIn align-self-center">
          <img width="380" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/home-intersetorialidade.jpg"; ?>" />
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 wow animated fadeInRight" data-wow-delay="0.25s">
          <h3>Intersetorialidade</h3>
          <p>Sabemos da importância da visão socioassistencial e que a intersetorialidade pode ajudar a direcionar e adaptar os processos pedagógicos, sob os aspectos das populações em situação de vulnerabilidade e risco social, que estão quase  em sua totalidade nas redes públicas de ensino.</p>
          <a href="http://portabil.is/intersetorialidade" class="btn-baseb btn-blue" title="">Saiba mais</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-c section-padding">
    <div class="container">
      <div class="row justify-content-center wow animated fadeInUp"">
        <div class="col-lg-9">
          <h2>Vamos bater um papo sobre as suas dificuldades?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 offset-lg-2 txt-right wow animated fadeInLeft" data-wow-delay="0.25s">
          <a href="<?php echo home_url( '/fale-conosco' ); ?>" class="btn-basec btn-white" title="mande uma mensagem para gente">Mande uma mensagem pra gente</a>
        </div>
        <div class="col-lg-4 col-sm-6 text-left txt-left  wow animated fadeInRight" data-wow-delay="0.5s">
          <ul>
            <li>sem compromisso</li>
            <li>gratuito</li>
            <li>personalizado para seu município</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="section-d section-padding">
    <div class="container">
      <div class="row wow animated fadeIn">
        <div class="col-lg-8 col-sm-6">
          <h2>Conteúdos incríveis</h2>
          <p class="subtitle">Acesse gratuitamente nossos materiais sobre educação e assistência social no nosso blog.</p>
        </div>
        <div class="col-lg-4 col-sm-6 txt-right">
          <br>
          <a href="<?php echo home_url( '/blog' ); ?>" class="btn-baseb btn-blue" title="Conheça os nossos materiais">Conheça os nossos materiais <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
      <div class="row wow animated fadeIn blog-posts-ajax">

      </div>
    </div>
  </div>
</div>
<script>
$.ajax({
    type:'POST',
    url: '<?php echo "https://blog.portabilis.com.br/wp-admin/admin-ajax.php"; ?>',
    data: {
    action: 'portabilisBlogMais',
    id: '0'
    },
    success: function(data){
      page = parseInt(data[0].id)+1;
      var article = '';
      for(var i = 0; i < data.length; i++){
        article = '<div class="col-lg-3 col-sm-6"><article><span style="margin-bottom:15px" class="category">'+data[i].category+'</span>'+data[i].img+'<p style="margin-top:15px">'+data[i].excerpt+'</p><a href="'+data[i].url+'" class="btn-base btn-whitec" title="Saiba mais">Leia mais sobre</a></article></div>';
        $('.blog-posts-ajax').append(article);
      }
    }
});
</script>
<!-- Modal -->
<div class="modal fade" id="cta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php
        echo do_shortcode(get_field('fale_conosco_formulario', false, false));
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
