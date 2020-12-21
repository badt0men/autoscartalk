<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    //
    function index(Request $req){
        if ($req->has('vin')) {
            $vinNum = $req->vin;

                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://vindecoder.p.rapidapi.com/v2.0/decode_vin?vin=$vinNum",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "x-rapidapi-host: vindecoder.p.rapidapi.com",
                        "x-rapidapi-key: 894b073653msh04277acd862cf10p19b953jsn92d1782094a7"
                    ],
                ]);
                

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                    return redirect('/');
                }
                 else {
                    
                    return view('pages.result', ['vinNum' => $vinNum, 'data' => json_decode($response),true]);
                }

        }
        else{
            return view('pages.home');
        }  
    }







}
