<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    //
    function index(Request $req){
        if ($req->has('vin')) {
            $vinNum = $req->vin; 
            $this->specification($vinNum); //passing the $vinNum variable to the specification method.
            
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


    function specification($vinNum){
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
                return view('pages.specification');
            } 
            else {
                //var_dump(json_decode($response, true));
                return view('pages.specification', ['data' => json_decode($response),true]);
            }
        
    }

    function test(Request $req){
        if ($req->has('vin')) {
            $vinNum = $req->vin; 
            $this->specification($vinNum); //passing the $vinNum variable to the specification method.
            
                $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://cis-vin-decoder.p.rapidapi.com/vinDecode?vin=$vinNum",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "x-rapidapi-host: cis-vin-decoder.p.rapidapi.com",
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
                    echo $response;
                }
        }
        else{
            return view('pages.home');
        } 
    }






}
