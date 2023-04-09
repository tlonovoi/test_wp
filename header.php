<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="UTF-8"/>
    <title><?php the_title(); ?></title>
    <meta name="viewport" content="width=device-width"/>  
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Asap" rel="stylesheet">
    <link rel="stylesheet" media="all" href="<?=THEME_URL?>/style.css"/>
  </head>
  <body>
  
  <header class="header">
      
    <div class="header_main_row">
     
      <div class="header_logo">
        <a href="<?php bloginfo("wpurl");?>"><img src ="<?=THEME_URL?>/img/logo.png"></a>
      </div> 
      
      <div class="popup_menu">
        <a href="#" class="menu_icon"></a>
      </div> 
      
	 
	  <?php
					wp_nav_menu( array(
						'menu'            => 'top_menu',
						'container'       => 'nav',
						'container_id'    => 'mob_menu',
						'menu_class'      => 'header_menu_list',
					) );
			?>

 
    </div>
    
    <div class="header_title">
      <h1><?php bloginfo("name");?>  
      </h1>
    </div>
    
    <div class="header_descr">
    <p><?php bloginfo("description");?></p>
    </div>
    
    <div class="header_texts">
      <p class="header_t1">Apostas esportivas</p>
      <p class="header_t2">classificação atualizada dos livreiros que são confiáveis e populares no Brasil.</p>
    </div>
    
    <div class="arrow"></div>
    
   <?php wp_head(); ?> 
  </header>
	  <div class="wrapper"> 
    
    <article>
	
		<h2><?php   if  ( ! is_front_page() ) the_title(); ?>  </h2>
      
       <section id="tickets">
        
       <div class="table">
        <div class="row"> 
        <div class="cell cell1">
          <div class="table_logo"><img src="<?=THEME_URL?>/img/logo.png" />
          </div>
          <h4>lotomania</h4>
          </div>
          <div class="cell cell2">
            <div class="price"><span>R$</span> 11,600,000</div>
            <div class="comment">Bonus</div>
          </div>
        </div> 
        <div class="row">
          <div class="cell cell3">4.65/5 por Só Aposta</div>
          <div class="cell cell4"><button>apostar agora</button> </div>
        </div>
      </div>
      
       <div class="table">
        <div class="row"> 
        <div class="cell cell1">
          <div class="table_logo"><img src="<?=THEME_URL?>/img/logo.png" />
          </div>
          <h4>quina</h4>
          </div>
          <div class="cell cell2">
            <div class="price"><span>R$</span> 11,600,000</div>
            <div class="comment">Bonus</div>
          </div>
        </div> 
        <div class="row">
          <div class="cell cell3">4.65/5 por Só Aposta</div>
          <div class="cell cell4"><button>apostar agora</button> </div>
        </div>
      </div>    
      
     </section>  