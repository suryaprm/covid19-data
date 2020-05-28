<?php
// $curl = curl_init();

// curl_setopt($curl, CURLOPT_URL,"https://event.ruangmahasiswa.com/");
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
// curl_setopt($curl, CURLOPT_POST, 1);
// $curl_exec = curl_exec($curl);
// curl_close($curl);

// $js = json_decode($curl_exec);
// print_r($js);

require_once 'simple_html_dom.php';

$source_url = 'https://event.ruangmahasiswa.com/';

$html_source = file_get_htm($source_url);

echo 'title: '. $title = $html_source->find('title is-5', 0)->plaintext;
echo '<br>';

?>