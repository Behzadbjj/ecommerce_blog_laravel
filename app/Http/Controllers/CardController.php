<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Card;
use App\Models\User;
use App\Http\Controllers\Controller;




class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cards = Card::where('user_id', auth()->id())->get();

        return view('pannier',compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($postId)
    {
        $post = Post::findOrFail($postId);
       

        $card = new Card();
        $card->title = $post->title;
        $card->content = $post->content;
        $card->image = $post->image;
        $card->user_id = auth()->id();
        $card->post_id = $post->id;


        
        $card->save();
    
        return redirect()->back()->with('success', 'Votre article été ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {

  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        $card->delete();

        return redirect()->route('Pannier')->with('success', 'L article été supprimé');
    }
}
