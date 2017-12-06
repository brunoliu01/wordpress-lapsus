<?php

/**
 * Url Actual
 * @return string
 */
function getCurrentUrl() {
    $domain = $_SERVER['HTTP_HOST'];
    $url = "http://" . $domain . $_SERVER['REQUEST_URI'];
    return $url;
}

/**
 * Recortar URL
 * @param string $text
 * @param int $limit
 * @return string
 */
function cortarURL($url, $format = 'txt') {
    $username = 'o_6lbrcarvfm';
    $apikey = 'R_ffc0df1c87844e8dbee7fdb5304df9f7';
    $bitly_api = 'http://api.bit.ly/v3/shorten?login=' . $username . '&apiKey=' . $apikey . '&uri=' . urlencode($url) . '&format=' . $format;
    $curl_init = curl_init();
    curl_setopt($curl_init, CURLOPT_URL, $bitly_api);
    curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_init, CURLOPT_CONNECTTIMEOUT, 5);
    $data = curl_exec($curl_init);
    curl_close($curl_init);
    return $data;
}

/**
 * Recortar texto
 * @param string $text
 * @param int $limit
 * @return string
 */
function cutText($text, $limit) {
    $text = trim($text);
    $text = strip_tags($text);
    $tamano = strlen($text);
    $resultado = '';
    if ($tamano <= $limit) {
        return $text;
    } else {
        $text = substr($text, 0, $limit);
        $palabras = explode(' ', $text);
        $resultado = implode(' ', $palabras);
        $resultado .= '...';
    }
    return $resultado;
}

/**
 * FB_UrlShared Share URL Facebook
 * @param string $url "URL de la página a compartir"
 * @param string $title "Título de la página"
 * @param string $description "Descripción page"
 * @param string $url_image "URL IMG"
 * @return string LinkURL
 */

function FB_UrlShared($url, $title, $description, $url_image) {
    $url = urlencode($url);
    $url_image = urlencode($url_image);
    $url_fb = "http://www.facebook.com/sharer.php?s=100&p[url]=" . $url . "&p[title]=" . $title . "&p[summary]=" . $description . "
                &p[images][0]=" . $url_image . "";
    return $url_fb;
}

/**
 * Obtener el mes en español
 * @return string
 */
function get_date_es() {
    $m = null;
    switch (date('m')) {
    case '1':
        $m = 'Enero';
        break;

    case '2':
        $m = 'Febrero';
        break;

    case '3':
        $m = 'Marzo';
        break;

    case '4':
        $m = 'Abril';
        break;

    case '5':
        $m = 'Mayo';
        break;

    case '6':
        $m = 'Junio';
        break;

    case '7':
        $m = 'Julio';
        break;

    case '8':
        $m = 'Agosto';
        break;

    case '9':
        $m = 'Septiembre';
        break;

    case '10':
        $m = 'Octubre';
        break;

    case '11':
        $m = 'Noviembre';
        break;

    case '12':
        $m = 'Diciembre';
        break;
    }
    return date('D').' de '. $m . ' del ' . date('Y') . ' ' . date('H:m:s');
}
/**
 * Obtener el SLug de un page
 * @param boolean $echo
 * @return string
 */
function the_slug($echo = true) {
    $slug = basename(get_permalink());
    do_action('before_slug', $slug);
    $slug = apply_filters('slug_filter', $slug);
    if ($echo) {
        echo $slug;
    }
    do_action('after_slug', $slug);
    return $slug;
}
