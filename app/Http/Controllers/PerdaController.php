<?php

namespace App\Http\Controllers;

use App\Models\Perda;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use File;

class PerdaController extends Controller
{
    protected $user;
 
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->user
            ->perdas()
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate data
        $data = $request->only('tipe_dokumen', 'peraturan_daerah', 'no_perda', 'tahun', 'file');
        $validator = Validator::make($data, [
            'tipe_dokumen' => 'required|string',
            'peraturan_daerah' => 'required|string',
            'no_perda' => 'required|string',
            'tahun' => 'required|string',
            'file' => 'required|mimes:pdf|max:10000'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        // save upload file to variabel $file
		$file = $request->file('file');
		$nama_file = $file->getClientOriginalName();
 
        //created directory file 
        $path = public_path('files');
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }
		$file->move($path,$nama_file);

        //Request is valid, create new dokumen perda
        $perda = $this->user->perdas()->create([
            'tipe_dokumen' => $request->tipe_dokumen,
            'peraturan_daerah' => $request->peraturan_daerah,
            'no_perda' => $request->no_perda,
            'tahun' => $request->tahun,
            'file' => $nama_file
        ]);

        //Dokumen Perda created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Dokumen Perda created successfully',
            'data' => $perda
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perda  $perda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perda = $this->user->perdas()->find($id);
    
        if (!$perda) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, dokumen perda not found.'
            ], 400);
        }
    
        return $perda;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perda  $perda
     * @return \Illuminate\Http\Response
     */
    public function edit(Perda $perda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perda  $perda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perda $perda)
    {
        //Validate data
        $data = $request->only('tipe_dokumen', 'peraturan_daerah', 'no_perda', 'tahun');
        $validator = Validator::make($data, [
            'tipe_dokumen' => 'required|string',
            'peraturan_daerah' => 'required|string',
            'no_perda' => 'required|string',
            'tahun' => 'required|string'
        ]);

        //Request is valid, update dokumenPerda
        $perda = $perda->update([
            'tipe_dokumen' => $request->tipe_dokumen,
            'peraturan_daerah' => $request->peraturan_daerah,
            'no_perda' => $request->no_perda,
            'tahun' => $request->tahun
        ]);

        //Dokumen Perda updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'Data updated successfully',
            'data' => $perda
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perda  $perda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perda $perda)
    {
        $perda->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Dokumen Perda deleted successfully'
        ], Response::HTTP_OK);
    }
}
