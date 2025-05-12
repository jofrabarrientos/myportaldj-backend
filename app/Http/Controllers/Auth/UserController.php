<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a user in session.
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request) : \Illuminate\Http\JsonResponse
    {
        return response()->json($request->user());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified user by id.
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id)  : \Illuminate\Http\JsonResponse
    {
        $user = User::where('id', $id)->first();
        return response()->json($user);
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
