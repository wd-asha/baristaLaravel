<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    public function __construct()
    {
        /* Actions for admin only */
        $this->middleware('admin');
    }


    /* ------------------ */
    /*   Show all Posts   */
    /* ------------------ */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('admin.blog.index', compact('posts'));
    }
    /* -- end show all posts -- */


    public function status0($id)
    {
        Post::find($id)->update([
            'status' => 0
        ]);
        return Redirect()->back();
    }

    public function status1($id)
    {
        Post::find($id)->update([
            'status' => 1
        ]);
        return Redirect()->back();
    }


    /* ---------------- */
    /*   Create Post    */
    /* ---------------- */
    public function create()
    {
        return view('admin.blog.create');
    }
    /* -- end create post -- */


    /* --------------- */
    /*     Edit Post   */
    /* --------------- */
    public function edit($id)
    {
        $post = Post::find($id);
        /* to the post`s edit page */
        return view('admin.blog.edit', compact('post'));
    }
    /* -- end edit post -- */


    /* ------------------------ */
    /*     Update Post Image    */
    /* ------------------------ */
    public function updatePhoto(Request $request, $id)
    {
        /* preparing the data that came from the form */
        $old_image = $request->old_image;
        $image_yes = $request->file('image');
        $data = array();

        if($image_yes) {
            /* delete the previous image if there was one */
            if($old_image !== 'media/blog/no-image.png') {
                unlink($old_image);
            };
            /* prepare and save a new image */
            $image = $request->file('image');
            $location = 'media/blog/';
            $name_image = hexdec(uniqid());
            $ext_image = strtolower($image->getClientOriginalExtension());
            $full_image = $location.$name_image.'.'.$ext_image;
            $image->move($location, $full_image);
            $data['image'] = $full_image;

            /* updating post */
            Post::find($id)->update($data);
            $notification = array(
                'message' => 'Image updated',
                'alert-type' => 'success'
            );
        }else{
            $notification = array(
                'message' => 'Image not updated',
                'alert-type' => 'error'
            );
        }

        /* to the posts list page */
        return Redirect()->route('admin.blog')->with($notification);
    }
    /* ---- end update post image ---- */


    /* ------------------ */
    /*    Update Post     */
    /* ------------------ */
    public function update(Request $request, $id)
    {
        /* preparing the data that came from the form */
        $data = array();
        $data['title'] = $request->title;
        $data['tag'] = $request->tag;
        $data['author'] = $request->author;
        $data['desc'] = $request->desc;
        $data['content'] = $request->contents;
        /* update post */
        $update = Post::find($id)->update($data);
        if($update) {
            $notification = array(
                'message' => 'Post updated',
                'alert-type' => 'success'
            );
        }else{
            $notification = array(
                'message' => 'Nothing updating',
                'alert-type' => 'success'
            );
        }
        /* to the posts list page */
        return Redirect()->route('admin.blog')->with($notification);
    }
    /* -- end update post -- */


    /* ------------- */
    /*  Delete Post  */
    /* ------------- */
    public function delete($id)
    {
        Post::find($id)->delete();
        $notification = array(
            'message' => 'Post deleted',
            'alert-type' => 'success'
        );
        /* to the posts list page */
        return Redirect()->back()->with($notification);
    }
    /* end delete post */

}
