<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\JadwalRequest;
use App\Http\Resources\JadwalCollection;
use App\Models\JadwalRekrut;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = JadwalRekrut::latest()->paginate(10);
        return response()->json(
            new JadwalCollection($jadwals),
            Response::HTTP_OK
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JadwalRequest $request)
    {
        $jadwal = JadwalRekrut::create($request->validated());
        return response()->json([
            'data' => $jadwal,
            'status' => 'success',
            'message' => 'Jadwal berhasil dibuat',
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
    public function update(JadwalRequest $request, JadwalRekrut $jadwal)
    {
        $jadwal->update($request->validated());
        return response()->json([
            'status' => 'success',
            'message' => 'Jadwal berhasil diperbarui',
            'data' => $jadwal,
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JadwalRekrut $jadwal)
    {
        $jadwal->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Jadwal berhasil dihapus',
        ], Response::HTTP_OK);
    }
}
