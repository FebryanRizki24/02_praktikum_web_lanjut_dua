<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return('Selamat Datang');
        echo "Selamat Datang";
    }

    public function about()
    {
        //
        // return('Selamat Datang');
        echo "NAMA : Febryan Rizki Hidayatullah <br>";
        echo "NIM : 2141720059";
    }

    public function articles($id)
    {
        //
        // return('Selamat Datang');
        echo "Halaman Artikel dengan ID ".$id;
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
