

<?php



function MVC_apiCall($p_url, $p_json){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POSTFIELDS, $p_json);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $p_url);
    $output = curl_exec($ch);
    curl_close($ch);

    return $output;
}



?>
