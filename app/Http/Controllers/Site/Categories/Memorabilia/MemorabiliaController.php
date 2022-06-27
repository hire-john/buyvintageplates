<?php

namespace App\Http\Controllers\Site\Categories\Memorabilia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemorabiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.public.pages.products.memorabilia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        $images = [
            ['id' => 1, 'path' => '/images/plates/0.jpg'],
            ['id' => 2, 'path' => '/images/plates/1.jpg'],
            ['id' => 3, 'path' => '/images/plates/2.jpg'],
            ['id' => 4, 'path' => '/images/plates/3.jpg'],
            ['id' => 5, 'path' => '/images/plates/4.jpg'],
            ['id' => 6, 'path' => '/images/plates/5.jpg'],
            ['id' => 7, 'path' => '/images/plates/6.jpg'],
        ];
        return view('content.public.pages.products.plates.show', 
            compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
