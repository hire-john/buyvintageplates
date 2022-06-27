<?php

namespace App\Http\Controllers\Portal\Referencing\Books\Google;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class GoogleBooksApiController extends Controller
{
    /** sample id = ZMO-uQAACAAJ TOM SAWYER **/ 
    public static function getSelfLinkObject($id){
        return self::guzzler(config('google.apis.books_v1.volumes') . $id);
    }

    /** sample isbn_10 = 0590433520 & isbn_13 = 9780590433525 **/
    public static function getIsbnObject($isbn){
        return  self::guzzler(config('google.apis.books_v1.isbn_query') . $isbn);
    }

    public static function IsbnIdResolver($isbn){
        $id = false;
        $isbn_object = json_decode(self::guzzler(config('google.apis.books_v1.isbn_query') . $isbn));
        if($isbn_object->totalItems=="1"){
            $id = $isbn_object->items[0]->id;
        }
        if($id){
            return $id;
        }
    }

    public static function guzzler($url){
        $json = false;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url, ['http_errors' => false]);
        if ($response->getStatusCode() == 200) {
            $json = $response->getBody();
        }
        return $json;
    }
}