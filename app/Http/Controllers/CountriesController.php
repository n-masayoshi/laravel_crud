<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class CountriesController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all('country_name');
        return view("country.index", compact('countries'));
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
