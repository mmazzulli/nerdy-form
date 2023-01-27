<?php 

/**
* Plugin Name: Nerdy Form
* Plugin URI: https://spotsite.eu/plugins/nerdy-form/
* Description: This is just a Challenge plugin with form
* Author: Marcelo Mazzulli
* Version: 1.0.0
* Author URI: https://spotsite.eu/plugin/author/
**/

function mm_meetings($mm_content){
    $mm_mensagem = "<h1>Olá Mundo!</h1>"; 
    return $mm_content.= $mm_mensagem;
}

add_action('the_content', 'mm_meetings'); 