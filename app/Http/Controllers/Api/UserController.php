<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Api\PostResource;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    } // end of constract

    public function index()
    {
        $user = auth('api')->user();

        return PostResource::collection($user->posts) ;
    } // end of index
}// end of controller
