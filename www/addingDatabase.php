<?php
require('connection.php');
require('simple_html_dom.php');

function Adding($link)
{
    global $conn;
    $html = file_get_html($link, 0);
    if (!is_null(trim($html->find('h1', 0)->plaintext))) {
        $brand = trim($html->find('h1', 0)->plaintext);
    }
    if (!is_null($html->find('p[class="wt-text-title-03 wt-mr-xs-2"]', 0))) {
        preg_match("/\d+(.\d{1,2})?/", $html->find('p[class="wt-text-title-03 wt-mr-xs-2"]', 0)->plaintext, $match);
        $price = $match[0];
    }
    if (!is_null($html->find('img[class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"]', 0))) {
        $photo = $html->find('img[class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"]', 0)->src;
    }

    if (isset($price) && isset($photo) && isset($brand)) {
        $sql = mysqli_query($conn, "INSERT INTO product(`name`,`image`,`price`) VALUES ('" . $brand . "','" . $photo . "','" . $price . "')");
        //print_r(mysqli_error($conn));
    }
}
