<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Service\Postservices;

class PostController extends Controller
{
    public function Userpost(Request $request ,Postservices $postService ){
        $data=$request->only([
            'title',
            'description'
        ]);
        $result['data']=$postService->blogpost($data);
        return redirect()->back();
    }
    public function Showpost(){
        $post=Post::where('status',1)->get();
        return view('showpost',compact('post'));
    }

    public function Editpost($id){
        $post=Post::find($id);
        return view('usereditpost',compact('post'));
    }

    public function UpdatePost(Request $request,Postservices $postService ){
        $result=$postService->updateblogpost($request);
        if($result['success'] == true) {
            return redirect()->route('show-post');
            
        }
        return $result['msg'];
    }

    public function Deletepost($id){
        $data = ['success' => false, 'data' => [],  'msg' => __('Something went wrong!')];
        $post = Post::find($id)->delete();
        if($post){
        $data['success'] = true;
        $data['data'] = $post;
        $data['msg'] = __('All Files');
    }
    return redirect()->back();
    }
    
}
