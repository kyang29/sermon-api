<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sermon;


class SermonController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * @OA\Get(
     *  path = "/api/Sermons",
     *  summary="Get list of Sermons",
     * @OA\Response(
     *      response=200,
     *      description=""
     *  )
     * )
     */
    public function index(){
        return Sermon::all();
    }

    /**
     * @OA\Get(
     *  path = "/api/Sermons/List",
     *  summary="Get list of Sermons",
     * @OA\Parameter(
     *      name="page",
     *      in="query",
     *      description="Page of Sermon, if None, Default to first Page",
     *      @OA\Schema(
     *          type="integer"
     *      )
     * ),
     * @OA\Parameter(
     *      name="take",
     *      in="query",
     *      description="pagination Size, If None, Default to 10",
      *     @OA\Schema(
     *          type="integer"
     *      )
     * ),
     * @OA\Response(
     *      response=200,
     *      description=""
     *  )
     * )
     */
    public function getList(){
        $take = $this->request->query->get('take') ?? 10;
        return Sermon::paginate($take);
    }
}
