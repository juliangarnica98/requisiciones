<?php

namespace App\Traits;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

trait SendEmailRQS{

    public function send_email_rqs($subject,$name,$email,$idtemplate, $nombre,$vacante, $nombre_jefe,$num,$tienda) {
        $client = new \GuzzleHttp\Client();
        $headers = [
          'Authorization' => "Basic " . base64_encode("LILIPINK.GESTIONHUMANA:L1lipink.2024")
      ];
        $array_asociativo = array(
          "city"=>$nombre,
          "type"=>$vacante,
          "country"=>$nombre_jefe,
          "address"=>$num,
          "gender"=>$tienda
      );
      
      
        $json = json_encode($array_asociativo);
        $options = [
        'multipart' => [
          [
            'name' => 'from',
            'contents' => '090@liligestionhumana.com'
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