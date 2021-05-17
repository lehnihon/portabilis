<?php
get_header(); ?>
<div id="banner-oportunidade" class="bg-banner-oportunidades">
  <div class="wrap-title wow animated fadeInUp">
    <h1><?php the_field('oportunidade_banner_titulo'); ?></h1>
    <div class="action">
      <a href="#session-oportunidades" class="btn-base btn-azul" title="Oportunidades Disposníveis">Oportunidades Disponíveis</a>
    </div>
    <img class="img-fluid d-none" src="/wp-content/uploads/2019/07/portabilis-banner-principal-oportunidades.png" alt="Conheça nossas oportunidades">
  </div>
</div>
<div id="page" class="pad-ieducar pad-oportunidades">
  <div class="div-banner-oportunidade">
  </div>
  <div class="section-n">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 align-self-center">
          <h2 class="wow animated fadeInUp">Calma, não é só puff!</h2>
          <p class="wow animated fadeInUp mb-lg-0 mb-7">
            Se você pensa fora da caixa e acha que pode fazer a diferença com a gente, junte-se ao #TimePortabilis.<br><br>
            Aqui a criatividade, inovação, ideias e, principalmente, o esforço coletivo nos fazem atingir resultados de se orgulhar e que nos fazem crescer juntos todos os dias.
          </p>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <div class="row gallery">
            <?php
            $i = 0;
            $args = array(
              'post_type' => 'funcionario',
              'posts_per_page' => 999,
              'meta_key'			=> 'funcionario_ordenacao',
	            'orderby'			=> 'meta_value_num',
              'order' => 'ASC');
            $query = new WP_Query( $args );
            while ( $query->have_posts() ) : $query->the_post();
              if($i%6 == 0):
                $delay = 0;
              endif;
              $content = get_field('funcionario_cargo').'<br>';
              if(!empty(get_field('funcionario_linkedin'))):
                $content .= '<a target="_blank" href="'.get_field('funcionario_linkedin').'"><i class="fab fa-linkedin-in"></i></a>';
              endif;
              if(!empty(get_field('funcionario_twitter'))):
                $content .= '<a target="_blank" href="'.get_field('funcionario_twitter').'"><i class="fab fa-twitter"></i></a>';
              endif;
              if(!empty(get_field('funcionario_facebook'))):
                $content .= '<a target="_blank" href="'.get_field('funcionario_facebook').'"><i class="fab fa-facebook-f"></i></a>';
              endif;  
              if(!empty(get_field('funcionario_github'))):
                $content .= '<a target="_blank" href="'.get_field('funcionario_github').'"><i class="fab fa-github"></i></a>';
              endif;
            ?>
              <div class="col-sm-2 col-4 <?php if($i % 6 == 1 OR $i % 6 == 5): echo "down"; endif;?> <?php if($i % 6 == 3): echo "top"; endif;?>">
                <img class="img-fluid wow animated zoomIn pop" data-wow-delay="<?php echo $delay; ?>s" data-toggle="popover"  title="<?php echo the_title(); ?>" data-html="true" data-content='<?php echo $content; ?>' src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'funcionario-thumb'); ?>" />
              </div>
            <?php
              $delay += 0.125;
              $i++;
            endwhile;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-f section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-sm-12">
          <h2 class="mb-3 wow animated fadeInUp">Benefícios</h2>
          <p class="heart mb-3 wow animated fadeInUp"><i class="fas fa-heart"></i></p>
          <p class="subtitle wow animated fadeInUp">Cuidamos bem das pessoas que cuidam de outras pessoas.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3 wow animated zoomIn">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-hand-rock.png"; ?>" />
            <h4>Seja você mesmo</h4>
            <p>Escolhemos você assim, então não mude. Venha do seu jeito, não temos dress code!</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.125s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-health.png"; ?>" />
            <h4>Saúde em primeiro lugar</h4>
            <p>Plano de saúde, para você ficar com a saúde em dia.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.375s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-card.png"; ?>" />
            <h4>Um cartão só seu, para usar como quiser</h4>
            <p>Aqui prezamos pela liberdade, por isso você tem um cartão flexível com R$ 475,00 todo mês.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-money_2.png"; ?>" />
            <h4>Adiantamento de salário</h4>
            <p>Se as coisas não estiverem boas, você pode antecipar a sua grana e devolver devagarinho.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.125s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-gift.png"; ?>" />
            <h4>Sua fidelidade valorizada</h4>
            <p>A cada ano completado na empresa, você ganha um bônus que aumenta todo ano!</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.25s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-clock.png"; ?>" />
            <h4>Horário flexível</h4>
            <p>A hora não nos importa muito, mas sim os resultados que conquistamos.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.375s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-home-office.png"; ?>" />
            <h4>Home office</h4>
            <p>Você pode trabalhar com a gente de qualquer lugar do País (Talvez do mundo?).</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-hands.png"; ?>" />
            <h4>Ambiente diferenciado</h4>
            <p>Somos um time muito unido, divertido e que gosta de se ajudar!</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.125s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-book.png"; ?>" />
            <h4>Investimos na sua formação</h4>
            <p>Ajudamos você com aquele curso, livro ou evento que você quer para somar com o Time!</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.25s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-bithday.png"; ?>" />
            <h4>Aniversário em grande estilo</h4>
            <p>Nesse dia especial, você ganha um bônus de R$ 250 para curtir como quiser!</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.375s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ico-beer.png"; ?>" />
            <h4>Cerveja ou café?</h4>
            <p>Não importa, somos flex! Um ambiente agradável melhora a produtividade ;)</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn">
          <div class="resource-b d-flex">
            <h4 class="align-self-center">Quer trabalhar com a gente?</h4>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.125s">
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.25s">
        </div>
        <div class="col-sm-6 col-lg-3 wow animated zoomIn" data-wow-delay="0.375s">
        </div>
      </div>
    </div>
  </div>
  <div class="section-o section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <h2 class="wow animated fadeInUp">Nosso processo de seleção</h2>
          <p class="subtitle wow animated fadeInUp">Transparência acima de tudo!<br> Entenda como são as etapas do nosso processo seletivo.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 order-lg-1 order-sm-1 order-2 wow animated zoomIn">
          <div class="number">1</div>
          <h3>Comece a jornada</h3>
          <p>Para iniciar o seu processo, você faz sua inscrição exclusivamente pelo nosso site e recebe uma confirmação por e-mail. Se acreditarmos que você possui o perfil adequado para a vaga, promovemos você para a 2ª etapa.</p>
        </div>
        <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-3 order-3 wow animated zoomIn" data-wow-delay="0.125s">
          <div class="number">2</div>
          <h3>Mostre o que você sabe</h3>
          <p>Precisamos conhecer melhor suas aptidões e competências. Nesta etapa, você receberá uma avaliação técnica pertinente a área que você se candidatou. Se sua pontuação atender nossas expectativas, promovemos você para a 3ª etapa.</p>
        </div>
        <div class="col-lg-4 col-sm-6 order-lg-3 order-sm-2 order-1 wow animated zoomIn"  data-wow-delay="0.25s">
          <img width="450" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/oportunidade-stair.jpg"; ?>" />
        </div>
        <div class="col-lg-4 col-sm-6 order-lg-4 order-sm-4 order-4 wow animated zoomIn">
          <div class="number">3</div>
          <h3>Vamos nos conhecer melhor</h3>
          <p>Quase lá! Nesta fase, os responsáveis da área que você irá trabalhar fazem uma entrevista com você remotamente, via hangout ou telefone. Se acreditarmos que você tem alinhamento com o time, te promovemos para a 4ª etapa.</p>
        </div>
        <div class="col-lg-4 col-sm-6 order-lg-5 order-sm-5 order-5 wow animated zoomIn" data-wow-delay="0.125s">
          <div class="number">4</div>
          <h3>E um pouco melhor</h3>
          <p>Ufa! Mais um pouquinho… Nesta etapa, iremos agendar com você uma entrevista pessoalmente com o CEO, co-fundadores e conselho. Se você se sair bem aqui, você é nosso preferido (ou preferida, né?).</p>
        </div>
        <div class="col-lg-4 col-sm-6 order-lg-6 order-sm-6 order-6 wow animated zoomIn" data-wow-delay="0.25s">
          <div class="number">5</div>
          <h3>Você conseguiu!</h3>
          <p>Aqui vamos te fazer a proposta de remuneração e ajustar os detalhes finais para sua recepção. E claro, ficaremos ansiosos pela sua chegada! :)</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-f background-white section-padding" id="session-oportunidades">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-sm-12">
          <h2 class="wow animated fadeInUp">Oportunidades disponíveis</h2>
          <p class="subtitle wow  fadeInUp animated">A Portabilis está crescendo, e o time também! Junte-se à nós!</p>
        </div>
      </div>
      <div class="row">
        <?php
        $i = 1;
        $modal = "";
        $args = array(
          'post_type' => 'vagas',
          'posts_per_page' => 999,
          'orderby' => 'post_date',
          'order' => 'DESC');
        $query = new WP_Query( $args );
        while ( $query->have_posts() ) : $query->the_post();
          if($i%2 == 1):
            $delay = 0;
          endif;
        ?>
        <div class="col-lg-5 <?php if($i%2 == 1): echo "offset-lg-1"; endif; ?> wow animated zoomIn" data-wow-delay="<?php echo $delay; ?>s">
          <div class="resource-c">
            <div class="row">
              <div class="col-sm-8">
                <h4><?php the_title(); ?></h4>
                <p><?php the_field('vagas_resumo'); ?></p>
              </div>
              <div class="col-sm-4 align-self-center">
                <a target="_blank" href="<?php echo get_field('vagas_link'); ?>" class="btn-base btn-blue">+ Detalhes</a>
              </div>
            </div>
          </div>
        </div>
        <?php
          $i++;
          $delay += 0.25;
        endwhile;
        ?>
      </div>
      <div class="row justify-content-center mt-6">
        <div class="col-lg-7 col-sm-12">
          <h2 class="wow animated fadeInUp mb-4">FAQ</h2>
          <p class="subtitle wow animated fadeInUp">Tire aqui suas dúvidas sobre nosso processo seletivo.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <ul class="faq-list">
            <?php
            $i = 1;
            $args = array(
              'post_type' => 'faq',
              'posts_per_page' => 999,
              'orderby' => 'post_date',
              'order' => 'DESC');
            $query = new WP_Query( $args );
            while ( $query->have_posts() ) : $query->the_post();
            ?>
            <li class="row wow animated fadeInUp">
              <div class="col-11 text-left"><?php echo the_field('faq_pergunta'); ?></div>
              <div class="col-1 text-right"><a class="list-btn" data-toggle="collapse" href="#faq-list<?php echo $i; ?>">+</a>
              </div>
              <div class="collapse list-desc col-12" id="faq-list<?php echo $i; ?>">
               <?php echo the_field('faq_resposta'); ?>
              </div>
            </li>
            <?php
              $i++;
            endwhile;
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
