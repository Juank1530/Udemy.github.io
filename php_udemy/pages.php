<?php
$page_ho = 'https://www.farmalisto.com.co/';
$page_ca = 'https://www.farmalisto.com.co/2078-dermocosmetica';
$page_pr = 'https://www.farmalisto.com.co/antisepticos/3401-comprar-agua-oxigenada-frasco-x-120-ml-precio-7702560000010.html';
$strategy_MO = 'mobile';
$strategy_DE = 'desktop';
$u_negocio = 'CO Farmalisto';
$home = 'Home';
$category = 'Categoria';
$product = 'Producto';
$fecha = date('Y-m-d');

function pages_desktop($page, $strategy)
{
    $url_de_ho = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . $page_ho . '&key=AIzaSyDIMjNInZ0Lw4no0JJzSPjQNZ2lFtrU_u0&strategy=' . $strategy_DE;
    $json_de_ho = file_get_contents($url_de_ho);
    $data_de_ho = json_decode($json_de_ho, true);
    return $data_de_ho;
}

// $data_de_ho = pages_desktop($page_ho,$strategy_DE);

// var_dump($data_de_ho);

$ttbf_de_ho = number_format(($data_de_ho["lighthouseResult"]["audits"]["time-to-first-byte"]["numericValue"] / 1000), 2);
$ttbfdv_de_ho = $data_de_ho["lighthouseResult"]["audits"]["time-to-first-byte"]["displayValue"];

echo $page_ho . '<br>';
echo "<pre>";
echo '<br>' . 'TTFB Desktop ';
print_r($ttbf_de_ho);
echo '<br>' . 'TTFBDV ';
print_r($ttbfdv_de_ho);

?>