<?php

namespace App\Http\Controllers;

use App\Helpers\GuzzleHelper;
use App\Traits\ApiResponser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class XmlConverter extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function processXML(Request $request){

        if($request->has('file')){
            $getXML = $request->file;
        }else{

            if($request->has('url')){
                $urlGuzzle =   base64_decode($request->url);
                $getXML = GuzzleHelper::get($urlGuzzle,20);
            }else{
                return null;
            }
        }

        try{
                    if($getXML){

                        $xml = (array) simplexml_load_string($getXML,"SimpleXMLElement",LIBXML_NOCDATA);
                        if($xml){
                            return $this->successResponse( json_encode($xml, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
                        }else{
                            return $this->errorResponse("Falha ao recuperar os dados do XML", Response::HTTP_INTERNAL_SERVER_ERROR);
                        }

                    }else{
                        return $this->errorResponse("Falha ao recuperar dados da url :" . $urlGuzzle, Response::HTTP_BAD_REQUEST);
                    }

            }catch(Exception $e){
                return $this->errorResponse("Falha ao recuperar os dados do XML", Response::HTTP_INTERNAL_SERVER_ERROR);

            }


//         if(!$request->has('url') ){
//             if(!$request->has('url')){
//                 return null;
//                 $getXML = $request->file;

//         }
//     }

//         else{

//             $urlGuzzle =   base64_decode($request->url);
//             $getXML = GuzzleHelper::get($urlGuzzle,20);

//         }


//         try{
//         if($getXML){

//             $xml = (array) simplexml_load_string($getXML,"SimpleXMLElement",LIBXML_NOCDATA);
//             if($xml){
//                 return $this->successResponse( json_encode($xml, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
//             }else{
//                 return $this->errorResponse("Falha ao recuperar os dados do XML", Response::HTTP_INTERNAL_SERVER_ERROR);
//             }

//         }else{
//             return $this->errorResponse("Falha ao recuperar dados da url :" . $urlGuzzle, Response::HTTP_BAD_REQUEST);
//         }

// }catch(Exception $e){
//     return $this->errorResponse("Falha ao recuperar os dados do XML", Response::HTTP_INTERNAL_SERVER_ERROR);

// }
//     }
}

}
