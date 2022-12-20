<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProxyController extends Controller
{
    public function __invoke(Request $request){

        $url = $this->remove_http($request->host);

        if($request->host){

            $result = parse_url($request->host);

            $agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://'.$url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_USERAGENT => $agent
            ));

            $response = curl_exec($curl);

            curl_close($curl);


            if(str_contains($url, '.js')){
                return $response;
            }

            if(str_contains($url, '.css')){
                return $response;
            }

            if(str_contains($url, '.svg')){
                return  $response;
            }

            $response = str_replace("host=/", "host=".'www.iana.org'.'/',$response);
            $response = str_replace("src=\"/", "src=\"/proxy?host=".'$host'.'/',$response);
            $response = str_replace("href=\"", "href=\"/proxy?host=",$response);
            $response = str_replace("href='", "href=\"/proxy?host=",$response);


            return view('proxy', compact('response'));

        }else {
            $response = 'Some Thing wrong happend !!';
            return view('proxy', compact('response'));
        }


    }

    function remove_http($url) {
        $disallowed = array('http://', 'https://', 'wwww.');
        foreach($disallowed as $d) {
            if(strpos($url, $d) === 0) {
                return str_replace($d, '', $url);
            }
        }
        return $url;
    }

    function add_http($url){

        if(!preg_match('#^https?://#i', $url)){
            $url = 'http://' . $url;
        }

        return $url;
    }
}
