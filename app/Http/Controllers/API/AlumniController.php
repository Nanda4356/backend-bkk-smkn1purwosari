<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlumniRequest;
use App\Http\Requests\LamaranRequest;
use App\Http\Resources\AlumniCollection;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnis = Alumni::latest()->paginate(10);
        return response()->json(
            new AlumniCollection($alumnis),
            Response::HTTP_OK
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlumniRequest $request)
    {
        $alumni = Alumni::create($request->validated());
        return response()->json([
            'data' => $alumni,
            'status' => 'success',
            'message' => 'Data Alumni berhasil dibuat',
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlumniRequest $request, Alumni $alumni)
    {
        $alumni->update($request->validated());
        return response()->json([
            'status' => 'success',
            'message' => 'Data Alumni berhasil diperbarui',
            'data' => $alumni,
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumni $alumni)
    {
        $alumni->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Data Alumni berhasil dihapus',
        ], Response::HTTP_OK);
    }
}
