<?php 
/**
* Vamos devolver o catálogo completo conforme nossas condicões
*
* @return array Un Array con todos os productos en stock
*/

function catalogo_completo():array{
    $JSON = file_get_contents('includes/data/productos.json');
    $JSONData = json_decode($JSON, true);

    // echo "<pre>";
    // print_r($JSONData);
    // echo "</pre>";

    return $JSONData;
}

/**
 * Devolvemo o catalogo de productos de um personaje em particular 
 * @param string $personaje Um string com o nome do personaje que desejo buscar
 * 
 * @return array Un Array com todos os productos do personaje
 * 
 */
function catalogo_personaje(string $personaje):array{

    $resultado = [];

    $catalogo = catalogo_completo();

    foreach($catalogo as $universo){
        // if(isset($universo['name']) && $universo['name'] == $personaje){
        //     $resultado[] = $universo;
        // }
        if ($universo['name'] == $personaje){
            $resultado[] = $universo;
        }
    }

    return $resultado;
}

/**
 * Devolver os dados de um produto em particular
 * @param int $id Um inteiro com o id do producto que desejo buscar
 * 
 * @return mixed Un Array com todos os datos do producto encotrado ou null se não encontrar
 * 
 */
function producto_id(int $id):mixed{
    $catalogo = catalogo_completo();

    foreach($catalogo as $universo){
        if($universo['id'] == $id){
            return $universo;
        }
    }

    return null;
}


?>

