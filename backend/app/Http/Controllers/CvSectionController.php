<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CvSection;
use App\Http\Requests\StoreCvSectionRequest;
use App\Http\Requests\UpdateCvSectionRequest;
use App\Http\Resources\CvSectionResource;

class CvSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = CvSection::with('items')->get();
        return CvSectionResource::collection($sections);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCvSectionRequest $request)
    {
        $section = CvSection::create($request->validated());
        return new CvSectionResource($section);
    }

    /**
     * Display the specified resource.
     */
    public function show(CvSection $cvSection)
    {
        $cvSection->load('items');
        return new CvSectionResource($cvSection);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCvSectionRequest $request, CvSection $cvSection)
    {
        $cvSection->update($request->validated());
        return new CvSectionResource($cvSection);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CvSection $cvSection)
    {
        $cvSection->delete();
        return response()->json(['message' => 'Section deleted successfully']);
    }
}
