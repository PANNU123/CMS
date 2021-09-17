<?php
namespace  App\Service;

use App\Models\Post;

class Postservices{
    public function blogpost($data){
        $post=new Post();
        $post->title=$data['title'];
        $post->description=$data['description'];
        $post->save();
    }
    
    public function updateblogpost($data){
        $dt = ['success' => false, 'data' => [], 'msg' => __('Something went wrong!')];
        $update = Post::where('id', $data->id)->update([
            'title' => $data->title,
            'description' => $data->description
        ]);
        if($update) {
            $dt['success'] = true;
            $dt['msg'] = __('Successfully Updated!');
        }
        return $dt;
    }

    public function adminblogupdate($data){
        $dt=['success'=>false,'data'=>[],'msg'=>__('Something went wrong!')];
        $update=Post::where('id',$data->id)->update([
            'title'=>$data->title,
            'description' => $data->description
        ]);
        if($update){
            $dt['success'] = true;
            $dt['msg'] = __('Successfully Updated!');
        }
        return $dt;
    }
}