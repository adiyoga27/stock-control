<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Item\CreateRequestItem;
use App\Http\Requests\Item\UpdateRequestItem;
use App\Http\Resources\Item\ItemResource;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $item;
    public function __construct(Item $item) {
        $this->item = $item;
    }
    public function index()
    {
        $data = $this->item->with('stock')->get();
        return $this->sendResponseData(ItemResource::collection($data) , 'Data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequestItem $request)
    {
        $item = $this->item->create($request->toArray());
        return $this->sendResponseData($item, 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->item->with('stock')->where('id', $id)->first();
        return $this->sendResponseData(ItemResource::make($data) , 'Data');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequestItem $request, $id)
    {
        $model = $this->item->find($id);
        $model->update($request->toArray());
        return $this->sendResponse("Success Update Data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = $this->item->find($id);
        $model->delete();
        return $this->sendResponse("Berhasil Menghapus");
    }
}
