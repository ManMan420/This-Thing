<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiasecQuestion;

/**This is to access the getItems() function from the custom php file */
include "AllItems.php";

class RiasecQuestionController extends Controller
{
    public function result()
    {
        //Question IDs
        $items = array();
        foreach($_POST as $key => $value){
            $items[] = $value;
        }
        unset($items[0]);
        dump($items);

        
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rq = RiasecQuestion::all();

        $questions = array();
        foreach($rq as $q){
            $questions[] = getItemsWhere('questions', $q->questions);
        }

        //dump($questions[0][0]->question);
        return view('client.quiz', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /**When getting all questions, for example for displaying in a dashboard or table, getQuestions() function
         * automatically does it all
         * 
         * This is because I am lazy and can't be bothered to write [Question::all] every fucking time
         */
        $questions = getItems();

        return view("riasecCRUD.create", compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
