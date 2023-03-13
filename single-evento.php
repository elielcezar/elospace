<?php get_header(); ?>

<div id="masthead">
  <img src="<?php the_field('banner_topo'); ?>" alt="" class="desktop">
  <img src="<?php the_field('banner_topo_mobile'); ?>" alt="" class="mobile">
</div>

<?php
if( get_field('contador')):?>
<div id="contador">
  <div class="container">
    <h3>Faltam</h3>    
    <div id="datePicker"><?php the_field('contador'); ?></div>
    <div id="countdown">
      <div class="item"><span id="days"></span> dias</div>
      <div class="item"><span id="hours"></span> horas</div>
      <div class="item"><span id="minutes"></span> minutos</div>
      <div class="item"><span id="seconds"></span> segundos</div>
    </div>
  </div>
</div>
<?php  
  endif;
?>      

<div id="principal">
  <div class="container">
    <div class="conteudo">

      <div class="informacoes top">
        <div class="col-1">
          <h2>Sobre o Evento</h2>
          <p><strong>Data:</strong> <?php the_field('data'); ?></p>
          <p><strong>Horário:</strong> <?php the_field('horario'); ?></p>
          <p><strong>Local:</strong> <?php the_field('local'); ?></p>
          <p><strong>Valor:</strong> <?php the_field('valor'); ?></p>
          <p><?php the_field('infos_adicionais'); ?></p>
        </div>
        <div class="col-2">
          <div class="inscrevase">
            <h2>Ficou interessado? Então entre em contato agora mesmo e garanta sua vaga!</h2>
            <?php echo do_shortcode('[contact-form-7 id="125" title="Cadastro Curso"]'); ?>
          </div>
        </div>
      </div>

      <?php        
        if( have_rows('informacoes_evento') ):
            
            while( have_rows('informacoes_evento') ) : the_row();                
                $titulo = get_sub_field('titulo');
                $descricao = get_sub_field('descricao');                
      ?>
         <div class="informacoes">
            <div class="col-1">
              <h3><?php echo $titulo; ?></h3>
            </div>
            <div class="col-2">
              <?php echo $descricao; ?>
            </div>
          </div>

      <?php endwhile;
        else :            
        endif;
      ?>      

    </div>
  </div>
</div>


<div id="fornecedores">
<h2>Fornecedores</h2>
<?php        
  if( have_rows('fornecedores') ):        
    while( have_rows('fornecedores') ) : the_row();                
      $logo = get_sub_field('logo_foto');
      $nome = get_sub_field('nome');     
      $resumo = get_sub_field('resumo');               
      $fornecedor = get_sub_field('quem_e_o_fornecedor');      
      $quem_atende = get_sub_field('quem_atende');
  ?>      
    <div class="container">    

      <div class="fornecedor">
          
          <div class="col-1">
            <img src="<?php echo $logo; ?>" alt="">              
          </div>

          <div class="col-2">

            <div class="itens-accordion"> 
              <div class="item closed">
                <h3><?php echo $nome; ?></h3>
                <p><?php echo $resumo; ?></p>
                <p class="accordion">Saiba Mais</p>
                <div class="accordion">
                  <?php echo $fornecedor; ?>                  
                  <?php if($quem_atende){ ?>
                    <p><strong>Quem Atende:</strong></p>
                    <div class="logos">
                      <?php foreach( $quem_atende as $logo ): ?>                  
                        <img src="<?php echo $logo; ?>" alt="">
                      <?php endforeach; ?>   
                    </div>
                  <?php } ?>               
                </div>
              </div>
            </div>

          </div>          
        </div>
    </div>        

  <?php endwhile;
    else :            
    endif;
  ?>
</div>

<?php get_footer(); ?>