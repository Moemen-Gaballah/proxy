<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProxyController extends Controller
{
    public function __invoke(Request $request){
        $url = $this->add_http($request->host);

        if($url){

            $agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';

            $method = $_SERVER['REQUEST_METHOD'];
//            $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) ? 'https' : 'http';

//            $url = $scheme.'://'. $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//            dd($url);

//            info("URL: " . $url);

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
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

            $result = parse_url($url);

            $host = isset($result['host']) ? $result['host'] : '';

//            $response = str_replace("host=/", "host=".$url.'/',$response);

            $response = str_replace("href=\"/", "href=\"/proxy?host=".$host.'/',$response);
            $response = str_replace("src=\"/", "src=\"/proxy?host=".$host.'/',$response);
            $response = str_replace("href=\"", "href=\"/proxy?host=",$response);
            $response = str_replace("href='", "href=\"/proxy?host=",$response);

//            dd($response);

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
