<?php

namespace App\Traits\comercial;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

trait SendAprobacion{

    public function send_aprobacion($subject,$name,$email,$idtemplate, $cargo,$tienda) {
        $client = new \GuzzleHttp\Client();
        $headers = [
          'Authorization' => "Basic " . base64_encode("LILIPINK.GESTIONHUMANA:L1lipink.2024")
      ];
        $array_asociativo = array(
         "type" => $cargo,
          "gender" => $tienda,
      );
      
      
        $json = json_encode($array_asociativo);
        $options = [
        'multipart' => [
          [
            'name' => 'from',
            'contents' => 'seleccion@liligestionhumana.com'
          ],
          [
            'name' => 'to',
            'contents' => $email
          ],
          [
            'name' => 'subject',
            'contents' => $subject
          ],
          [
            'name' => 'text',
            'contents' => $name
          ],
          [
            'name' => 'html',
            'contents' => '<h1>Html body</h1><p>Rich HTML message body.</p>'
          ],
          [
            'name' => 'templateId',
            'contents' => $idtemplate
          ],
          [
            'name' => 'defaultPlaceholders',
            'contents' => $json
          ],
        ]];
        $request = new Request('POST', 'http://api.messaging-service.com/email/3/send', $headers);
        $res = $client->sendAsync($request, $options)->wait();

        return json_decode($res->getBody());
    }
}