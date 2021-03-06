<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Product;
use App\Category;
use Auth;
use App\Country;
use App\Cart;
use App\User;
use App\Http\Requests\UsersDetails;
use App\Order;
use App\PurchaseOrder;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index() {
        $title = "Matre Logistics LTD | One Store, Global Reach";
        $categories = Category::get();
        return view('home', compact(['title', 'categories']));
    }

    public function company() {
    	$title = "Matre Logistics LTD | About Us";
    	$page_name = "About us";
        return view('company', compact(['title', 'page_name']));
    }

    public function contact() {
    	$title = "Matre Logistics LTD | Contact Us";
    	$page_name = "Contact us";
        $categories = Category::get();
        return view('contact', compact(['title', 'page_name', 'categories']));
    }

    public function gallery() {
    	$title = "Matre Logistics LTD | Gallery";
    	$page_name = "Gallery";
        return view('gallery', compact(['title', 'page_name']));
    }

    public function services() {
    	$title = "Matre Logistics LTD | Our Services";
    	$page_name = "Our Services";
        $categories = Category::get();
        return view('services', compact(['title', 'page_name', 'categories']));
    }

    public function policies() {
    	$title = "Matre Logistics LTD | Our Policies";
    	$page_name = "Our Policies";
        return view('policies', compact(['title', 'page_name']));
    }

    public function view_blog($title, $id) {
        $blog = Blog::find($id);
        $all_blogs = Blog::orderBy('id', 'desc')->paginate(7);
    	$title = "Matre Logistics LTD | ".$blog->title;
    	$blog_title = $blog->title;
        $categories = Category::get();
        return view('view_blog', compact(['title', 'blog_title', 'blog','all_blogs', 'categories']));
    }

    public function blog_list() {
        $all_blogs = Blog::orderBy('id','desc')->paginate(10);
    	$title = "Matre Logistics LTD | Blogs";
        $categories = Category::get();
        return view('blog_list', compact(['title','all_blogs', 'categories']));
    }

    public function products() {
        $title = "Matre Logistics LTD | Products";
        $categories = Category::get();
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('products', compact(['title', 'products', 'categories']));
    }

    public function productDetails($id, $title) {
        
        $product = Product::find($id);
        $categories = Category::get();
        $title = "Matre Logistics LTD | ".$product->name;

        $products = Product::orderBy('id', 'desc')->paginate(9);
        return view('productDetails', compact(['title', 'products', 'product', 'categories']));
    }

    public function categories($id, $name) {
        $title = "Matre Logistics LTD | ".$name;
        $categories = Category::get();
        $catGroup = Category::find($id);
        $category = $catGroup->name;
        $products = Product::where('category', $id)->orderBy('id', 'desc')->paginate(12);
        return view('categories', compact(['title', 'categories', 'category', 'products']));
    }

    public function user() {
        $title = "Matre Logistics | ".Auth::user()->name;
        $categories = Category::get();
        $countries = Country::get();
        return view('user', compact(['title', 'categories', 'countries']));
    }

     public function checkout() {
        $title = "Matre Logistics | checkout";
        $countries = Country::get();
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        return view('checkout', compact(['title', 'carts', 'countries']));
    }

     public function cart($id, $product) {
       $cart = new Cart();
       $cart->user_id = Auth::user()->id;
       $cart->product_id = $id;

       if ($cart->save()) {
       return redirect()->back()->with('success', $product.' successfully added to cart');
   }
   else {
    return redirect()->back()->with('error', 'Sorry, we are unable to add '.$product.' to your cart');
   }
    }

    public function removeCart($id) {
        $cart = Cart::find($id);

        if ($cart->delete()) {
            return redirect()->back()->with('ok', 'Item removed from shopping cart');
        }
        else {
            return redirect()->back()->with('fail', 'Sorry, could not remove item from cart');
        }
    }

    public function updateUser(UsersDetails $request) {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->zipCode = $request->zipCode;
        $user->country = $request->country;

        if ($user->save()) {
            return redirect()->back()->with('success', 'Users details changed successfully');
        }
        else {
            return redirect()->back()->with('error', 'Sorry, unable to change user details');
        }

    }

    public function ChangePassword(Request $request){
 
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not match with the password in the database. Please try again.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
 
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
        return redirect()->back()->with("success","Password changed successfully !");
 
    }

}
