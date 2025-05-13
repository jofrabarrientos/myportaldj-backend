<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserProfileRequest;
use App\Models\UserProfile;
use Illuminate\Http\JsonResponse;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $userProfiles = UserProfile::with(['user', 'profileType'])->get();

        return response()->json($userProfiles);
    }

    /**
     * Store a newly created resource in storage.
     * @param UserProfileRequest $request
     * @return JsonResponse
     */
    public function store(UserProfileRequest $request) : JsonResponse
    {
        $userProfile = new UserProfile();

        $userProfile->first_name = $request->input('first_name');
        $userProfile->last_name = $request->input('last_name');
        $userProfile->description = $request->input('description');
        $userProfile->experience = $request->input('experience');
        $userProfile->user_id = $request->input('user_id');
        $userProfile->profile_types_id = $request->input('profile_types_id');
        $userProfile->cities_id = $request->input('cities_id');

        $result = $userProfile->save();

        return response()->json($result);
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id) : JsonResponse
    {
        $userProfile = UserProfile::where('id',$id)->with('user')->with('profileType')->first();

        return response()->json($userProfile);
    }

    /**
     * Update the specified resource in storage.
     * @param UserProfileRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UserProfileRequest $request, int $id) : JsonResponse
    {
        $userProfile = UserProfile::find($id);

        $userProfile->first_name = $request->input('first_name');
        $userProfile->last_name = $request->input('last_name');
        $userProfile->description = $request->input('description');
        $userProfile->experience = $request->input('experience');
        $userProfile->user_id = $request->input('user_id');
        $userProfile->profile_types_id = $request->input('profile_types_id');
        $userProfile->cities_id = $request->input('cities_id');

        $result = $userProfile->save();

        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
