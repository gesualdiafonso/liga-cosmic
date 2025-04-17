<?php 

// require 'includes/data/product.php';
require_once 'includes/controllers/functions.php';


$sections = [
    "404" => [
        "title" => "Página não encontrada",
        "content" => "Essa página não existe. Volte para a página inicial."
    ],
    "home" => [
        "title" => "Home",
        "content" => "Essa é a página inicial do site. Aqui você pode encontrar informações sobre o site e suas funcionalidades. Navegue pelo menu para acessar outras páginas."
    ],
    "about" => [
        "title" => "About Us",
        "content" => "Essa é a página sobre nós. Aqui você pode encontrar informações sobre o site e suas funcionalidades. Navegue pelo menu para acessar outras páginas."
    ],
    "catalogo_completo" => [
        "title" => "Catálogo de produtos",
        "content" => "Essa é a página de catálogo de produtos. Aqui você pode encontrar informações sobre os produtos disponíveis. Navegue pelo menu para acessar outras páginas."
    ],
    "comics" => [
        "title" => "Universos Cosmic",
        "content" => "Essa é a página de produto. Aqui você pode encontrar informações sobre o produto."
    ],
    "producto" => [
        "title" => "Produto",
        "content" => "Essa é a página de produto. Aqui você pode encontrar informações sobre o produto."
    ],
];

// Aqui verificamos a existência do parâmetro 'section' na URL
// Se não existir, definimos a seção como 'home' 
// Se existir, usamos o valor passado na URL
$section = isset($_GET['section']) ? $_GET['section'] : 'home';

// Verificamos se o parâmetro 'uni' foi passado na URL para os universos de Batman, arrow e liga
// Se sim, usamos o valor passado na URL
// Se não, usamos o valor padrão (null)
$universo = isset($_GET['uni']) ? $_GET['uni'] : null;

if ($universo){
    // $catalog = $product[$universo];
    $catalogo = catalogo_personaje($universo);
} else{
    // $catalog = [];
    // foreach ($product as $verse) {
    //     $catalog = array_merge($catalog, $verse);
    // }
    $catalogo = catalogo_completo();
}

// Verificamos se a seção existe no array de seções
// Se não existir, definimos a seção como '404'
// Se existir, usamos o valor passado na URL
if(!array_key_exists($section, $sections)){
    $views = "404";
} else{
    $views = $section;
}
// $views = $section;
?>