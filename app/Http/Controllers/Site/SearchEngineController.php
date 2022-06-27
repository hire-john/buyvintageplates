<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Products\Plates\Plate;

class SearchEngineController extends Controller
{
    /**
     * Show the detailed customizable search form
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function search(Request $request){
        $results = null;
        $product = $request->input('product');
        $query = $request->input('query');
        $field = $request->input('field');
        $quantity = 20;
        switch($product){
            case 'plates':{
                $results = $this->plateSearch($query, $field, $quantity);
            }break;
            case 'books':{
                $results = $this->bookSearch($query, $field, $quantity);
            }break;
        }
        return view('content.public.pages.search.results', compact('results', 'query', 'product', 'field'));
    }

    private function plateSearch($query, $field, $quantity){
        $result = null;
        if($field=="all"){
            $result = Plate::searchAllFields($query, $quantity);
        }else{
            $result = Plate::searchSingleField($query, $field, $quantity);
        }
        return $result;
    }

    private function bookSearch($query, $field, $quantity){

    }

}
