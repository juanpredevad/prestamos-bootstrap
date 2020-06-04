<?php

namespace App\Traits;


trait SendWhatsAppTrait
{
    public function sendMessage($tel,$message){



            try{

                $data = [
                    'phone' => $tel, // Receivers phone
                    'body' => $message, // Message
                ];
                $json = json_encode($data); // Encode data to JSON
                // URL for request POST /message
                $url = 'https://eu74.chat-api.com/instance102933/message?token=6kk9nqguw0mnymjm';
                // Make a POST request
                $options = stream_context_create(['http' => [
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/json',
                    'content' => $json
                ]
                ]);
                // Send a request
                $result = file_get_contents($url, false, $options);

            }catch (\Exception $e){
                echo($e);
            }
        
    }
}
