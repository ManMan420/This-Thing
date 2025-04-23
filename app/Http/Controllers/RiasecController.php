<?php

namespace App\Http\Controllers;

use App\Models\riasec;
use Illuminate\Http\Request;

include "AllItems.php";

class RiasecController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = getItems();

        return view('riasecCRUD.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(riasec $riasec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(riasec $riasec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, riasec $riasec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(riasec $riasec)
    {
        //
    }
}
