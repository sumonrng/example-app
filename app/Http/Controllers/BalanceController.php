<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo 'All Data Show';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Balance Data Create";
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
    public function show(string $balance)
    {
        echo "Balance: $balance";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $balance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $balance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $balance)
    {
        //
    }
}
