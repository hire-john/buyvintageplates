<?php

namespace App\Http\Controllers\Portal\Referencing\Books\Google;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Portal\Referencing\Books\Google\GoogleBooksApiController;

class GoogleReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GoogleBooksApiController::IsbnIdResolver("0590433520");
        return view('content.private.pages.referencing.books.google.index');
    }

    public function search(Request $request){
        $product = $request->input('product');
        $query = $request->input('query');
        $field = $request->input('field');
        $results = null;
        $view = null;
        switch($field){
            case 'id': {
                $results = json_decode(GoogleBooksApiController::getSelfLinkObject($query), true);
                $view = "content.private.pages.referencing.books.google.self-link";
            }break;
            case 'isbn': {
                $results = json_decode(GoogleBooksApiController::getIsbnObject($query), true);
                $view = "content.private.pages.referencing.books.google.isbn";
            }break;
        }
        return view($view, compact('results'));
    }
}
