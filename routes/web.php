<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('admin/index', ['App\Http\Controllers\Admin\AdminDashboardController', 'index'])->name('admin.index');
    Route::get('user/destroy/{id}', ['App\Http\Controllers\Admin\AdminDashboardController', 'destroyUser'])->name('destroy.user');
    Route::get('user/restore/{id}', ['App\Http\Controllers\Admin\AdminDashboardController', 'restoreUser'])->name('restore.user');
    Route::get('user/delete/{id}', ['App\Http\Controllers\Admin\AdminDashboardController', 'deleteUser'])->name('delete.user');
    //Books
    Route::get('admin/books', ['App\Http\Controllers\Admin\BookController', 'index'])->name('admin.books');
    Route::get('admin/book.dates', ['App\Http\Controllers\Admin\BookController', 'dates'])->name('admin.book.dates');
    Route::post('admin/book/dateStore', ['App\Http\Controllers\Admin\BookController', 'dateStore'])->name('admin.book.dateStore');
    Route::get('admin/book/dateDelete/{id}', ['App\Http\Controllers\Admin\BookController', 'dateDelete'])->name('admin.book.dateDelete');
    Route::get('admin/book.times', ['App\Http\Controllers\Admin\BookController', 'times'])->name('admin.book.times');
    Route::post('admin/book/timeStore', ['App\Http\Controllers\Admin\BookController', 'timeStore'])->name('admin.book.timeStore');
    Route::get('admin/book/timeDelete/{id}', ['App\Http\Controllers\Admin\BookController', 'timeDelete'])->name('admin.book.timeDelete');
    //Blog
    Route::get('admin/blog/posts', ['App\Http\Controllers\Admin\BlogController', 'index'])->name('admin.blog');
    Route::get('admin/post/create', ['App\Http\Controllers\Admin\BlogController', 'create'])->name('admin.post.create');
    Route::get('admin/post/edit/{id}', ['App\Http\Controllers\Admin\BlogController', 'edit'])->name('admin.post.edit');
    Route::post('admin/post/update/{id}', ['App\Http\Controllers\Admin\BlogController', 'update'])->name('admin.post.update');
    Route::get('admin/post/status0/{id}', ['App\Http\Controllers\Admin\BlogController', 'status0'])->name('post.status0');
    Route::get('admin/post/status1/{id}', ['App\Http\Controllers\Admin\BlogController', 'status1'])->name('post.status1');
    Route::post('admin/post/updatePhoto/{id}', ['App\Http\Controllers\Admin\BlogController', 'updatePhoto'])->name('admin.post.updatePhoto');
    //Products
    Route::get('admin/products', ['App\Http\Controllers\Admin\ProductController', 'index'])->name('admin.products');
    Route::get('admin/product/create', ['App\Http\Controllers\Admin\ProductController', 'create'])->name('product.create');
    Route::get('admin/product/status0/{id}', ['App\Http\Controllers\Admin\ProductController', 'status0'])->name('product.status0');
    Route::get('admin/product/status1/{id}', ['App\Http\Controllers\Admin\ProductController', 'status1'])->name('product.status1');
    Route::post('admin/product/amount/{id}', ['App\Http\Controllers\Admin\ProductController', 'amount'])->name('amount.product');
    Route::get('admin/product/delete/{id}', ['App\Http\Controllers\Admin\ProductController', 'delete'])->name('product.delete');
    Route::get('admin/product/edit/{id}', ['App\Http\Controllers\Admin\ProductController', 'edit'])->name('product.edit');
    Route::post('admin/product/update/{id}', ['App\Http\Controllers\Admin\ProductController', 'update'])->name('product.update');
    Route::post('admin/product/updatePhoto/{id}', ['App\Http\Controllers\Admin\ProductController', 'updatePhoto'])->name('admin.product.updatePhoto');
    Route::post('admin/product/store', ['App\Http\Controllers\Admin\ProductController', 'store'])->name('product.store');

});
Route::group(['middleware' => ['auth', 'author']], function(){
    Route::get('author/index', ['App\Http\Controllers\Author\AuthorDashboardController', 'index'])->name('author.index');
});

Auth::routes();

Route::get('about', ['App\Http\Controllers\PageController', 'about'])->name('about');
Route::get('contactus', ['App\Http\Controllers\PageController', 'contactus'])->name('contactus');
Route::get('team', ['App\Http\Controllers\PageController', 'team'])->name('team');
Route::get('offer', ['App\Http\Controllers\PageController', 'offer'])->name('offer');
Route::get('process', ['App\Http\Controllers\PageController', 'process'])->name('process');
Route::get('traditional', ['App\Http\Controllers\PageController', 'traditional'])->name('traditional');
Route::get('interior', ['App\Http\Controllers\PageController', 'interior'])->name('interior');
Route::get('gallery', ['App\Http\Controllers\PageController', 'gallery'])->name('gallery');
Route::get('blog', ['App\Http\Controllers\BlogController', 'index'])->name('blog');
Route::get('post/create', ['App\Http\Controllers\BlogController', 'create'])->name('post.create');
Route::get('post/delete', ['App\Http\Controllers\BlogController', 'delete'])->name('post.delete');
Route::get('menu', ['App\Http\Controllers\MenuController', 'menuItems'])->name('menuItems');
Route::get('book', ['App\Http\Controllers\BookController', 'books'])->name('books');
Route::post('book/create', ['App\Http\Controllers\BookController', 'store'])->name('book.store');

Route::get('shop', ['App\Http\Controllers\ShopController', 'index'])->name('shop');
Route::get('product/{id}', ['App\Http\Controllers\ShopController', 'product'])->name('product');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Cart
Route::get('carts', ['App\Http\Controllers\CartController', 'index'])->name('carts');
Route::get('checkout', ['App\Http\Controllers\CartController', 'checkout'])->name('checkout');
Route::post('check', ['App\Http\Controllers\CartController', 'check'])->name('check');
Route::post('cart/add/{id}', ['App\Http\Controllers\CartController', 'add'])->name('cart.add');
Route::get('cart/delete/{rowId}', ['App\Http\Controllers\CartController', 'delete'])->name('cart.delete');
Route::post('cart/update', ['App\Http\Controllers\CartController', 'update'])->name('cart.update');

//Admin Orders
Route::get('admin/neworders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.neworders');
Route::get('admin/order/delete/{id}', [App\Http\Controllers\Admin\OrderController::class, 'orderDelete'])->name('admin.order.delete');
Route::get('admin/order/show/{id}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin.order.show');
Route::get('admin/order/pending/{id}', [App\Http\Controllers\Admin\OrderController::class, 'pending'])->name('admin.order.pending');
Route::get('admin/orders/process', [App\Http\Controllers\Admin\OrderController::class, 'ordersProcess'])->name('admin.orders.process');
Route::get('admin/order/process/{id}', [App\Http\Controllers\Admin\OrderController::class, 'process'])->name('admin.order.process');
Route::get('admin/orders/delivered', [App\Http\Controllers\Admin\OrderController::class, 'ordersDelivered'])->name('admin.orders.delivered');
Route::get('admin/order/delivered/{id}', [App\Http\Controllers\Admin\OrderController::class, 'delivered'])->name('admin.order.delivered');
Route::get('admin/order/canceled/{id}', [App\Http\Controllers\Admin\OrderController::class, 'canceled'])->name('admin.order.canceled');
Route::get('admin/orders/canceled', [App\Http\Controllers\Admin\OrderController::class, 'ordersCanceled'])->name('admin.orders.canceled');
