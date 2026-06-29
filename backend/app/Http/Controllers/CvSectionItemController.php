<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CvSectionItem;
use App\Http\Requests\StoreCvSectionItemRequest;
use App\Http\Requests\UpdateCvSectionItemRequest;
use App\Http\Resources\CvSectionItemResource;

class CvSectionItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = CvSectionItem::all();
        return CvSectionItemResource::collection($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCvSectionItemRequest $request)
    {
        $item = CvSectionItem::create($request->validated());
        return new CvSectionItemResource($item);
    }

    /**
     * Display the specified resource.
     */
    public function show(CvSectionItem $cvSectionItem)
    {
        return new CvSectionItemResource($cvSectionItem);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCvSectionItemRequest $request, CvSectionItem $cvSectionItem)
    {
        $cvSectionItem->update($request->validated());
        return new CvSectionItemResource($cvSectionItem);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CvSectionItem $cvSectionItem)
    {
        $cvSectionItem->delete();
        return response()->json(['message' => 'Item deleted successfully']);
    }
}
