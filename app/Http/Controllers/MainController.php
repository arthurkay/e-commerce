<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Product;
use App\Category;
use Auth;
use App\Country;

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

        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('productDetails', compact(['title', 'products', 'product', 'categories']));
    }

    public function categories($id, $name) {
        $title = "Matre Logistics LTD | ".$name;
        $categories = Category::get();
        $catGroup = Category::find($id);
        $category = $catGroup->name;
        $products = Product::where('category', $id)->paginate(12);
        return view('categories', compact(['title', 'categories', 'category', 'products']));
    }

    public function user() {
        $title = "Matre Logistics | ".Auth::user()->name;
        $categories = Category::get();
        $countries = Country::get();
        return view('user', compact(['title', 'categories', 'countries']));
    }

     public function checkout($id, $product) {
        $title = "Matre Logistics | checkout with ".$product;
        $countries = Country::get();
        $product = Product::find($id);
        return view('checkout', compact(['title', 'product', 'countries']));
    }

}
