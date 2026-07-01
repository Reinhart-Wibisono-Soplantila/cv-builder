<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cv;
use App\Http\Requests\StoreCvRequest;
use App\Http\Requests\UpdateCvRequest;
use App\Http\Resources\CvResource;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cvs = Cv::with('sections.items')->get();
        return CvResource::collection($cvs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCvRequest $request)
    {
        $cv = Cv::create($request->validated());
        return new CvResource($cv);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cv $cv)
    {
        $cv->load('sections.items');
        return new CvResource($cv);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCvRequest $request, Cv $cv)
    {
        $cv->update($request->validated());
        return new CvResource($cv);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cv $cv)
    {
        $cv->delete();
        return response()->json(['message' => 'CV deleted successfully']);
    }
}
