<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
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
    public function store(LoginRequest $request)
    {
        try {
            $credentials = $request->only(['email', 'password']);

            if (Auth::attempt($credentials)) {
                return response()->json(['state' => true, 'url' => 'dashboard'], 200);
            }

            return response()->json(["message" => "Error", "errors" => ["error" => ["Email o password incorrecto"]]], 422);
        }catch (\Exception $e){
            Log::error($e);
            return response()->json(['message' => 'Error', "errors" => ["error" => ["A ocurrido un error, intentelo mas tarde"]]], 422);
        }

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
