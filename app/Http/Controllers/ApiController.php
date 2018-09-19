<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\CssSelector\Parser\Token;

class ApiController extends Controller
{
    const TOKEN='34565345353453';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $input=$request->all();

        $token = $input['tkn'];

        if ($token == self::TOKEN){

        $id=$input['name'];
        $coord=$input['coord'];

        $entry= new Entry;
        $entry->name=$id;
        $entry->tkn = $token ;
        $entry->coord = $coord ;
        $entry->save();

            return response('Conent received', 202);

        } else {
            return response('Conent received', 401);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

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

        $input=$request->all();

        $token = $input['tkn'];
        $id=$input['name'];
        $coord=$input['coord'];

        $entry= new Entry;
        $entry->name=$id;
        $entry->tkn = $token ;
        $entry->coord = $coord ;
        $entry->save();
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
