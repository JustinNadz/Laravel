<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        return Demo::query()->paginate();
    }

    public function store(Request $request)
    {
        $demo = Demo::query()->create($request->all());

        return response()->json($demo, 201);
    }

    public function show(Demo $demo)
    {
        return $demo;
    }

    public function update(Request $request, Demo $demo)
    {
        $demo->fill($request->all());
        $demo->save();

        return $demo;
    }

    public function destroy(Demo $demo)
    {
        $demo->delete();

        return response()->noContent();
    }
}


