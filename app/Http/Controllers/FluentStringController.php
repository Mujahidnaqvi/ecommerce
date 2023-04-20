<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentStringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

// to use fluent string we have to add the class above as use illuminate\Support\Str; 
    public function fluentTasks(){
       $info= "hi, welcome to laravel";

       $info=Str::of($info)
       ->ucfirst($info)
       ->replaceFirst("Hi","Hello",$info)
       ->camel($info);
    //    $info=Str::ucfirst($info);
    //    $info=Str::replaceFirst("Hi","Hello",$info);
    //    $info=Str::camel($info);
       echo $info;
    }
}
