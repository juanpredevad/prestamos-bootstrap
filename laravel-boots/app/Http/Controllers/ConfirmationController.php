<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\SendWhatsAppTrait;
use App\Confirmation;

class ConfirmationController extends Controller
{
    use SendWhatsAppTrait;

    function createConfirmation(Request $request){
        try {
            $code=substr(md5(mt_rand()), 0, 4); 
            $tel = $request->tel;
            $confirmation = Confirmation::create([
                 'tel'=>$tel,
                 'code_confirmation'=>$code
             ]);
            
            $message = 'Hola, el código de verificación es: ' . $code;

            $api = $this->sendMessage($tel,$message);

        } catch (\Throwable $th) {
            //throw $th;
            echo "errr ".$th;
        }
    }
    function validateCode(Request $request, $code, $tel){
        /* $tel = $request->tel;
         $code = $request->code;*/
         $success = '';
         try {
             $getCode = Confirmation::where('code_confirmation',$code)
                                     ->where('tel',$tel)
                                     ->firstOrFail();
             return $getCode;
         } catch (\Throwable $th) {
             echo('err'.$th);
         }
        
    }

}
