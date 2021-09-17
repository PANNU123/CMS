<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Service\Postservices;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function LoadData(){
        $loaddata=Post::orderBy('id','DESC')->get();
        return view('admin.adminapprove',compact('loaddata'));
    }

    public function active($id){
        Post::find( $id)->update(['status'=>1]);
        return Redirect()->back();

    }
    public function inactive($id){
        Post::find($id)->update(['status'=>0]);
        return Redirect()->back();
    }

    public function AdminDelete($id){
        $data = ['success' => false, 'data' => [],  'msg' => __('Something went wrong!')];
        $post = Post::find($id)->delete();
        if($post){
        $data['success'] = true;
        $data['data'] = $post;
        $data['msg'] = __('All Files');
    }
    return redirect()->back();
    }

    public function AdminEdit($id){
        $post=Post::find($id);
        return view('admin.admineditpost',compact('post'));
    }

    public function AdminUpdate(Request $request, Postservices $postservices){
        $result=$postservices->adminblogupdate($request);
        if($result['success']== true){
            // return redirect()->back();
            return redirect()->route('load-data');
        }
        return $result['msg'];
    }
}
