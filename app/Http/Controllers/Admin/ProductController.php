<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    public function __construct()
    {
        /* Actions for admin only */
        $this->middleware('admin');
    }


    /* --------------------- */
    /*   Show all Products   */
    /* --------------------- */
    public function index()
    {
        $categories = Category::all();
        $products = Product::latest()->paginate(5);
        return view('admin.product.index', compact('categories', 'products'));
    }
    /* -- end show all products -- */


    /* ------------------- */
    /*   Create Product    */
    /* ------------------- */
    public function create()
    {
        $categories = Category::all();
        /* to the create new product page */
        return view('admin.product.create', compact('categories'));
    }
    /* -- end create product -- */


    public function status0($id)
    {
        Product::find($id)->update([
            'status' => 0
        ]);
        return Redirect()->back();
    }

    public function status1($id)
    {
        Product::find($id)->update([
            'status' => 1
        ]);
        return Redirect()->back();
    }


    /* ------------------------- */
    /*   Change amount product   */
    /* ------------------------- */
    public function amount(Request $request, $id)
    {
        /* preparing the data that came from the form */
        $data = array();
        $data['amount'] = (int)$request->amount;
        /* update product */
        $update = Product::find($id)->update($data);
        if($update && $data['amount'] != NULL && $data['amount'] > 0 ) {
            $notification = array(
                'message' => 'Amount product change',
                'alert-type' => 'success'
            );
            /* to the products list page */
            return Redirect()->route('admin.products')->with($notification);
        }else{
            $notification = array(
                'message' => 'Nothing update',
                'alert-type' => 'success'
            );
            /* to the products list page */
            return Redirect()->route('admin.products')->with($notification);
        }
    }
    /* end change amount product */


    /* ---------------- */
    /*  Delete Product  */
    /* ---------------- */
    public function delete($id)
    {
        Product::find($id)->delete();
        $notification = array(
            'message' => 'Product deleted',
            'alert-type' => 'success'
        );
        /* to the products list page */
        return Redirect()->back()->with($notification);
    }
    /* end delete product */


    /* ------------------ */
    /*     Edit Product   */
    /* ------------------ */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        /* to the product`s edit page */
        return view('admin.product.edit', compact('categories', 'product'));
    }
    /* -- end edit product -- */


    /* --------------------------- */
    /*     Update Product Image    */
    /* --------------------------- */
    public function updatePhoto(Request $request, $id)
    {
        /* preparing the data that came from the form */
        $old_image = $request->old_image;
        $image_yes = $request->file('image');
        $data = array();
        if($image_yes) {
            /* delete the previous image if there was one */
            if($old_image !== 'media/shop/no-image.png') {
                unlink($old_image);
            };
            /* prepare and save a new image */
            $image = $request->file('image');
            $location = 'media/shop/';
            $name_image = hexdec(uniqid());
            $ext_image = strtolower($image->getClientOriginalExtension());
            $full_image = $location.$name_image.'.'.$ext_image;
            $image->move($location, $full_image);
            $data['image'] = $full_image;
            /* updating product */
            Product::find($id)->update($data);
            $notification = array(
                'message' => 'Image updated',
                'alert-type' => 'success'
            );
        }else{
            $notification = array(
                'message' => 'Nothing update',
                'alert-type' => 'error'
            );
        }

        /* to the products list page */
        return Redirect()->route('admin.products')->with($notification);
    }
    /* ---- end update product image ---- */


    /* -------------------- */
    /*   Save new Product   */
    /* -------------------- */
    public function store(Request $request)
    {
        /* preparing data for saving */
        $data = array();
        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['sku'] = $request->sku;
        $data['dime'] = $request->dime;
        $data['weight'] = $request->weight;
        $data['price'] = $request->price;
        $data['amount'] = $request->amount;
        $data['about'] = $request->about;
        $data['desc'] = $request->desc;

        $image_yes = $request->file('image');

        if($image_yes) {
            /* prepare and save a new image */
            $image = $request->file('image');
            $location = 'media/shop/';
            $name_image = hexdec(uniqid());
            $ext_image = strtolower($image->getClientOriginalExtension());
            $full_image = $location.$name_image.'.'.$ext_image;
            $image->move($location, $full_image);
            $data['image'] = $full_image;
        }

        /* create new product*/
        Product::create($data);
        $notification = array(
            'message' => 'New product created',
            'alert-type' => 'success'
        );
        /* to the products list page */
        return Redirect()->route('admin.products')->with($notification);
    }
    /* -- end save new product -- */


    /* --------------------- */
    /*    Update Product     */
    /* --------------------- */
    public function update(Request $request, $id)
    {
        /* preparing the data that came from the form */
        $data = array();
        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['sku'] = $request->sku;
        $data['dime'] = $request->dime;
        $data['weight'] = $request->weight;
        $data['price'] = $request->price;
        $data['amount'] = $request->amount;
        $data['about'] = $request->about;
        $data['desc'] = $request->desc;
        /* update product */
        $update = Product::find($id)->update($data);
        if($update) {
            $notification = array(
                'message' => 'Product updated',
                'alert-type' => 'success'
            );
        }else{
            $notification = array(
                'message' => 'Nothing update',
                'alert-type' => 'success'
            );
        }
        /* to the products list page */
        return Redirect()->route('admin.products')->with($notification);
    }
    /* -- end update product -- */

}
