<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePictureRequest;
use App\Http\Requests\UpdatePictureRequest;
use App\Models\Picture;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\DB;

/**
 * Undocumented class
 */
class PictureController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            if ($request->get('_end') !== null) {
                $limit = $request->get('_end');
                $order = $request->get('_order') ? $request->get('_order') : 'asc';
                $sort = $request->get('_sort') ?  $request->get('_sort') : 'id';
                $offset = $request->get('_start') ? $request->get('_start') : 0;
                // retireve ordered and limit Pictures list
                $pictures = Picture::with(['category', 'painter', 'dimension'])->orderBy($sort, $order)
                    ->offset($offset)
                    ->limit($limit)
                    ->get();
            } else {
                // retireve all Pictures
                $pictures = Picture::with(['category', 'painter', 'dimension'])->get();
            }
            return $this->sendResponse($pictures, 'Pictures List');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), []);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StorePictureRequest $request)
    {
        $this->store($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePictureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $picture = Picture::create($input);
            DB::commit();
            return $this->sendResponse($picture, 'Picture updated successfully');            
        } catch (\Exception $e) {
            DB::rollback();
            return $this->sendError($e->getMessage(), []);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $picture = Picture::with(['category', 'painter', 'dimension'])->find($id);
            if (is_null($picture)) {
                return $this->sendError('Picture not found');
            } else {
                return $this->sendResponse($picture, 'Picture retrieved successfully');
            }
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), []);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->show($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePictureRequest $request
     * @param [type] $id
     * @return void
     */
    public function update(UpdatePictureRequest $request,  $id)
    {
        //start a transansaction
        DB::beginTransaction();
        try {
            $input = $request->all();
            // $validator = $this->validator($input);
            // if ($validator->fails()) {
            //     return $this->sendError('Validation Error.', $validator->errors());
            // } else {
            $picture = Picture::find($id);
            $picture->pic_name = $input['pic_name'];
            $picture->description = $input['description'];
            $picture->image = $input['image'];
            $picture->category_id = $input['category_id'];
            $picture->painter_id = $input['painter_id'];
            $picture->dimension_id = $input['dimension_id'];
            //
            $picture->save();
            DB::commit();
            return $this->sendResponse($picture, 'Picture updated successfully');
            // }
        } catch (\Exception $e) {
            DB::rollback();
            return $this->sendError($e->getMessage(), []);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        try {
            $picture->delete();
            return $this->sendResponse($picture, 'picture deleted successfully');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), []);
        }
    }
}
