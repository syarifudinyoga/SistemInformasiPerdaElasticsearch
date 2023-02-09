<?php

namespace App\Http\Controllers;

use App\Models\System;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class SystemController extends Controller
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
            ->sys()
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
        $data = $request->only('sys_cat', 'sys_sub_cat', 'sys_cd', 'sys_val', 'remark');
        $validator = Validator::make($data, [
            'sys_cat' => 'required|string',
            'sys_sub_cat' => 'required|string',
            'sys_cd' => 'required|string',
            'sys_val' => 'required|string',
            'remark' => 'string'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new dokumen perda
        $sistem = $this->user->sys()->create([
            'sys_cat' => $request->sys_cat,
            'sys_sub_cat' => $request->sys_sub_cat,
            'sys_cd' => $request->sys_cd,
            'sys_val' => $request->sys_val,
            'remark' => $request->remark
        ]);

        //Dokumen Perda created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Data created successfully',
            'data' => $sistem
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $system = $this->user->sys()->find($id);
    
        if (!$system) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, data not found.'
            ], 400);
        }
    
        return $system;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function edit(System $system)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, System $system)
    {
        //Validate data
        $data = $request->only('sys_cat', 'sys_sub_cat', 'sys_cd', 'sys_val', 'remark');
        $validator = Validator::make($data, [
            'sys_cat' => 'required|string',
            'sys_sub_cat' => 'required|string',
            'sys_cd' => 'required|string',
            'sys_val' => 'required|string',
            'remark' => 'string'
        ]);

        //Request is valid, create new dokumen perda
        $system = $system->update([
            'sys_cat' => $request->sys_cat,
            'sys_sub_cat' => $request->sys_sub_cat,
            'sys_cd' => $request->sys_cd,
            'sys_val' => $request->sys_val,
            'remark' => $request->remark
        ]);

        //Dokumen Perda created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Data updated successfully',
            'data' => $system
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function destroy(System $system)
    {
        {
            $system->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Data deleted successfully'
            ], Response::HTTP_OK);
        }
    }
}
