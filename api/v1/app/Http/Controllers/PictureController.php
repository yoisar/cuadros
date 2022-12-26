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
            $offset = 0;
            $limit = 10;
            $fields_list = array('name', 'painter', 'description', 'country_code');
            // //for query log
            // DB::connection()->enableQueryLog();
            // //?filters['country']=ARG&fields=id,name,painter
            // $filter = array();
            // if ($request->get('filters')) {
            //     //clean up filter
            //     $filters = str_replace('\'', '', $request->get('filters'));
            //     if ($filters['country']) {
            //         $country = $filters['country'];
            //         $filter = "country_code ='$country'";
            //         // print_r($filter);
            //     }
            // }
            // //fields list 
            // if ($request->get('fields')) {
            //     $fields_list = explode(',', $request->get('fields'));
            // }
            // $pictures = Picture::select($fields_list)->where('country_code', '=', 'AR')
            //     // ->with(['category', 'painter', 'dimension', 'country'])
            //     // ->orderBy($sort, $order)
            //     ->offset($offset)
            //     ->limit($limit)
            //     ->get();
            // // } else {
            // // retireve all Pictures
            // // $pictures = Picture::with(['category', 'painter', 'dimension', 'country'])->get();
            // // }
            //save response time
            StatisticsController::saveResponseTime('cuadros');
            $queries = DB::getQueryLog();
            // dd($queries);
            // return $this->sendResponse($pictures, 'Pictures List');
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
            $picture = Picture::with(['category', 'painter', 'dimension', 'country'])->find($id);
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
            $picture->name = $input['name'];
            $picture->painter = $input['painter'];
            $picture->country_code = $input['country_code'];
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
    public function destroy($id)
    {
        try {
            $picture = Picture::findOrFail($id);
            $picture->delete();
            return $this->sendResponse($picture, 'picture deleted successfully');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), []);
        }
    }
}
