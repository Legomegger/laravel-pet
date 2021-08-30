<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComputerRequest;
use App\Models\Computer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) : JsonResponse
    {
        $per_page = $request->per_page;
        $computers = isset($per_page) ? Computer::paginate($per_page) : Computer::all();
        return response()->json($computers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComputerRequest $request) : JsonResponse
    {
        $computer = Computer::create($request->all());
        if ($computer) {
            return response()->json($computer);
        }
        return response()->json('server error', 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computer = Computer::find($id);
        if ($computer) {
            return response()->json($computer);
        }
        return response()->json('no data', 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
