<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Mail;
use App\Mail\Alerts;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::content();
        $products = Product::all();
        $order_yes = "";
        return view('carts', compact('products', 'cartItems', 'order_yes'));
    }

    /* -------------------------------------- */
    /*      Add product to shopping cart      */
    /* -------------------------------------- */
    public function add(Request $request, $id)
    {
        $product = Product::find($id);

        Cart::add(
            [
                'id' => $product->id,
                'name' => $product->title,
                'qty' => $request->qtyH,
                'price' => $product->price,
                'weight' => $product->weight,
                'options' => [
                    'image' => $product->image,
                ]
            ]
        );

        $notification = array(
            'message' => 'Product add to cart',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    /* -------- end add product to shopping cart -------- */


    /* --------------------------------------------- */
    /*       Remove an item from shopping cart       */
    /* --------------------------------------------- */
    public function delete($rowId)
    {
        Cart::remove($rowId);
        $notification = array(
            'message' => 'Product deleted from cart',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    /* --- end remove an item from shopping cart --- */


    /* --------------------------------------------- */
    /*          Recalculation of the cost            */
    /* --------------------------------------------- */
    public function update(Request $request)
    {
        $rowId = $request->rowId;
        $qty = $request->qty;
        Cart::update($rowId, $qty);
        $notification = array(
            'message' => 'Product updated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    /* ------- end Recalculation of the cost ------- */

    public function checkout()
    {
        $products = Product::all();
        $cartItems = Cart::content();
        return view('checkout', compact('products', 'cartItems'));
    }


    /* --------------------------------- */
    /*          Order formation          */
    /* --------------------------------- */
    public function check(Request $request)
    {
        $request->validate([
            'email2' => 'required',
            'phone' => 'required'
        ],
            [
                'email2.required' => 'Enter Email',
                'phone.required' => 'Enter phone'
            ]);

        $content = Cart::content();
        /* Prepare data for the order */
        $data = array();
        $data['order_email'] = $request->email2;
        $data['order_phone'] = $request->phone;
        $data['order_total'] = strval(Cart::priceTotal());
        $data['created_at'] = Now();
        $data['updated_at'] = Now();
        $order_id = Order::insertGetId($data);
        /* Prepare data for a shopping list */
        $details = array();
        foreach ($content as $row) {
            $details['order_id'] = $order_id;
            $details['product_id'] = $row->id;
            $details['product_title'] = $row->name;
            $details['product_qty'] = $row->qty;
            $details['product_price'] = $row->price;
            $details['created_at'] = Now();
            $details['updated_at'] = Now();
            OrderItem::insert($details);
            $product = Product::find($row->id);
            $product->amount = $product->amount - (1 * $row->qty);
            $product->update();
        };
        /* Notify the buyer about the purchase by email */
        /* preparing data for the letter */
        $email = $data['order_email'];
        $body = Cart::content();
        $subject = $request->subject;
        $total = Cart::priceTotal();
        $orderid = $order_id;
        /* send a letter */
        Mail::to($email)->send(new Alerts($body, $total, $orderid));
        /* Deleting the contents of the shopping cart */
        Cart::destroy();
        /*$order_yes = "Заказ принят";
        return view('welcome', compact('order_yes'));*/
        $notification = array(
            'message' => 'Order is accepted',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    /* --------------- end Order formation ------------------ */

}
