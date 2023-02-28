<?php
/*
Template Name: Parceiros
*/
//the content of page.php and now you can do what you want.
?>
<?php get_header(); ?>

<div id="masthead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div id="principal">
  <div class="container">
    
    <?php the_content(); ?>

    <div id="fornecedores">

        <?php        
        if( have_rows('parceiros') ):        
            while( have_rows('parceiros') ) : the_row();                
            $logo = get_sub_field('logo_foto');
            $nome = get_sub_field('nome');     
            $resumo = get_sub_field('resumo');               
            $fornecedor = get_sub_field('quem_e_o_parceiro');      
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

  </div>
</div>

<?php get_footer(); ?>