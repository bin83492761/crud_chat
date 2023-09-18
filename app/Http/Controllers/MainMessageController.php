<?php

namespace App\Http\Controllers;

use App\Models\MainMessage;
use Illuminate\Http\Request;

class MainMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main_mes = MainMessage::get();

        // redirect可以用命名路徑
        // view是直接用view底下的文件名字
        return view('chat', compact('main_mes'));
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
        // dd($request->all());

        // create是把資料導進資料表的行為
        MainMessage::create([
            'main_message' =>  $request->post_mes,
        ]);

        // redirect可以用命名路徑
        // view是直接用view底下的文件名字
        return redirect(route('main_index'));
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
