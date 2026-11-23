<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LamaranRequest;
use App\Http\Resources\LamaranCollection;
use App\Http\Resources\LamaranResource;
use App\Models\Lamaran;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lamarans = Lamaran::latest()->paginate(10);
        return response()->json(
            new LamaranCollection($lamarans),
            Response::HTTP_OK
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LamaranRequest $request)
    {
        $lamaran = Lamaran::create($request->validated());
        return response()->json([
            'data' => $lamaran,
            'status' => 'success',
            'message' => 'Lamaran berhasil dibuat',
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
    public function update(LamaranRequest $request, Lamaran $lamaran)
    {
        $lamaran->update($request->validated());
        return response()->json([
            'status' => 'success',
            'message' => 'Lamaran berhasil diperbarui',
            'data' => new LamaranResource($lamaran),
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lamaran $lamaran)
    {
        $lamaran->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Lamaran berhasil dihapus',
        ], Response::HTTP_OK);
    }
}
