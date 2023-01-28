<?php 

/**
* Plugin Name: Nerdy Form
* Plugin URI: https://spotsite.eu/plugins/nerdy-form/
* Description: This is just a Challenge plugin with form
* Author: Marcelo Mazzulli
* Version: 1.0.0
* Author URI: https://spotsite.eu/plugin/author/
**/


// TESTE :: Imprimir Mensagem em Todos os Posts 
// function mm_meetings($mm_content){
//     $mm_mensagem = " Seja bem-vindo a este plugin!"; 
//     return $mm_content.= $mm_mensagem;
// }

// add_action('the_content', 'mm_meetings'); 


// ----------------------------------------------------


// TESTE :: Imprimir Mensagem através de um Shortcode
// Mensagem sendo buscada através de um File Externo

// add_shortcode('msg-shortcode', function()
// {
//     $file = file_get_contents('textfile.html', true);
//     return $file; 
// });

// --------------------------------------------------------

// TESTES :: CRIAR UMA TABLE Na DB 
function table_creation(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'nerdy_form';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id INT NOT NULL AUTO_INCREMENT,
        nome VARCHAR(200) NULL,
        email VARCHAR(100) NULL,
        PRIMARY KEY id (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}

// AMBOS FUNCIONAM 
register_activation_hook( __FILE__, 'table_creation' );
// add_action('init', 'table_creation' );


// ----------------------------------------

// TAMBÉM FUNCIONA 
// function minha-funcao(){
//     global $wpdb;
//     $table = $wpdb->prefix . 'tbl_nome_tabela';
//     $wpdb_collate = $wpdb->collate;
//     //Cria a tabela de logs
//     $sql1 = "CREATE TABLE {$table} (
//     id INT NOT NULL AUTO_INCREMENT,
//     nome VARCHAR(200) NULL,
//     email VARCHAR(100) NULL,
//     PRIMARY KEY  (id))
//     COLLATE {$wpdb_collate}";

//     require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    
//     dbDelta($sql1);
// }
// add_action('init', 'minha-funcao' );