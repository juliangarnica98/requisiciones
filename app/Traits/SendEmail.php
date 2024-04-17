<?php

namespace App\Traits;
use Illuminate\Support\Facades\Http;

trait SendEmail{

    public function send_email($ide,$subject,$name,$email,
                $charge,$area,$email_from,$reason) {
        $data = [
            "TemplateId" => (int)$ide,
            "Subject" => $subject,
            "From" => [
                "Name" => config('app.sendmail_name'),
                // "Email" => config('app.sendmail_email')
                "Email" => 'comunicacion.interna@fastmoda.com.co'
            ],
            "To" => array([
                "Name" => $name,
                "Email" => $email,
            ]),
            "Cc" => [],
            "Bcc" => [],
            "ReplyTo" => null,
            "CharSet" => "utf-8",
            "ExtendedHeaders" => null,
            "Attachments" => null,
            "EmbeddedImages" => null,
            "XSmtpAPI" => [
                "DynamicFields" => array(
                    [
                        "S" => "_currentday",
                        "V" => $reason
                    ],
                    [
                        "S" => "idu",
                        "V" => $charge
                    ],
                    [
                        "S" => "apellido",
                        "V" => $area
                    ],
                    [
                        "S" => "_idlist",
                        "V" => $email_from
                    ],
                )
            ],
            "SkipDynamicFields" => false,
            "User" => [
                "Username" => config('app.sendmail_user'),
                "Secret" => config('app.sendmail_secret')
            ],
        ];
        $url = config('app.sendmail_url');
        
        $dataResponse = Http::Post($url, $data)->json();
        return $dataResponse;
    }
}