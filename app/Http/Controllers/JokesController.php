<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joke;

class JokesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jokes = Joke::all();

        return view('Jokes.index', compact('jokes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Jokes.create');
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
        $data = $request->all();

        $joke = new Joke();

        // $Joke->author = $data['author'];
        // $Joke->body = $data['body'];
        // $Joke->title = $data['title'];

        // $Joke->save();

        $joke->fill($data);

        $joke->save();

        return redirect()->route('Jokes.show',$joke->id);
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
        $joke= Joke::find($id);

        if($joke){
            return view('Jokes.show',compact('joke'));
        }
        abort(404);
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
        $joke= Joke::find($id);

        return view('Jokes.edit', compact('joke'));
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
        $data = $request->all();

        $joke = Joke::find($id);
        $joke->update($data);

        return redirect()->route('Jokes.show',$joke->id);
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
        $joke = Joke::find($id);

        $joke->delete();
        return redirect()->route('Jokes.index');
    }
}
