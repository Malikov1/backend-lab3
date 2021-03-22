<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\post;
class ApiController extends Controller
{
    //
    public function index(Request $request) {

        $posts = post::all();
        return response($posts, 200);
    }
    public function get_post(Request $request) {
        $post = post::find($request->post_id);

        if ($post == null ){
            return response(['message' => 'post not found', 404]);
        }

        return response($post, 200);
    }
}
}
