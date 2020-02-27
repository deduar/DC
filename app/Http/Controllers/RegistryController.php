<?php

namespace App\Http\Controllers;

use App\Registry;
use Illuminate\Http\Request;

class RegistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('registry.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registry = new Registry();
        $registry->name = $request->name;
        $registry->email = $request->email;
        $registry->save();
        return view ('registry.uno');
    }

}
