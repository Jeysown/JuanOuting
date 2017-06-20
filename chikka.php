<?php
    $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => "639173038184",
        "shortcode" => "29290010610",
        "message_id" => "12345678901234567890123456789012",
        "message" => urlencode("Pogi si Jason!"),
        "client_id" => "bdff8945a6644fcafb4f496f1e94446fe41f5d157815b75101cda75718f709a7",
        "secret_key" => "c469fe43066083114c2daf26407b03a876bcf2a15d1b5442b89541aa2a318f15"
    );

    $query_string = "";
    foreach($arr_post_body as $key => $frow)
    {
        $query_string .= '&'.$key.'='.$frow;
    }

    $URL = "https://post.chikka.com/smsapi/request";

    $curl_handler = curl_init();
    curl_setopt($curl_handler, CURLOPT_URL, $URL);
    curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
    curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
    curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handler);
    curl_close($curl_handler);

    exit(0);



?>
