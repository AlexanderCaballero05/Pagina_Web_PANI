<?php

class ObtenerEndPointLaGrande {
    private $url;
    private $url2;
    function getDatosLaGrande(){
        // // $url = "https://x1vvo6hrf1.execute-api.us-east-1.amazonaws.com/prod/lagrande-results?date=2023-10-07";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://x1vvo6hrf1.execute-api.us-east-1.amazonaws.com/prod/lagrande-results?date=2023-10-07');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'content-Type: application/json',
            'x-api-key: HAxrpDySsR2OPax7bsij8aXWth0bgGcy6vqDmRr8'
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;

    }
}

