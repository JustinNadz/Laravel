<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return Profile::query()->paginate();
    }

    public function store(Request $request)
    {
        $profile = Profile::query()->create($request->all());

        return response()->json($profile, 201);
    }

    public function show(Profile $profile)
    {
        return $profile;
    }

    public function update(Request $request, Profile $profile)
    {
        $profile->fill($request->all());
        $profile->save();

        return $profile;
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();

        return response()->noContent();
    }
}


