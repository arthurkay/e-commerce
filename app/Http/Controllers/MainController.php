<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Product;

class MainController extends Controller
{
    public function index() {
        $title = "VicFirm Financial Consultancy LTD | Your Financial Partner";
        return view('home', compact(['title']));
    }

    public function company() {
    	$title = "VicFirm Financial Consultancy LTD | About Us";
    	$page_name = "About us";
        return view('company', compact(['title', 'page_name']));
    }

    public function contact() {
    	$title = "VicFirm Financial Consultancy LTD | Contact Us";
    	$page_name = "Contact us";
        return view('contact', compact(['title', 'page_name']));
    }

    public function gallery() {
    	$title = "VicFirm Financial Consultancy LTD | Gallery";
    	$page_name = "Gallery";
        return view('gallery', compact(['title', 'page_name']));
    }

    public function services() {
    	$title = "VicFirm Financial Consultancy LTD | Our Services";
    	$page_name = "Our Services";
        return view('services', compact(['title', 'page_name']));
    }

    public function policies() {
    	$title = "VicFirm Financial Consultancy LTD | Our Policies";
    	$page_name = "Our Policies";
        return view('policies', compact(['title', 'page_name']));
    }

    public function view_blog($title, $id) {
        $blog = Blog::find($id);
        $all_blogs = Blog::orderBy('id', 'desc')->paginate(7);
    	$title = "VicFirm Financial Consultancy LTD | ".$blog->title;
    	$blog_title = $blog->title;
        return view('view_blog', compact(['title', 'blog_title', 'blog','all_blogs']));
    }

    public function blog_list() {
        $all_blogs = Blog::orderBy('id','desc')->paginate(10);
    	$title = "VicFirm Financial Consultancy LTD | Blogs";
        return view('blog_list', compact(['title','all_blogs']));
    }

    public function products() {
        $title = "VicFirm Financial Consultancy LTD | Products";

        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('products', compact(['title', 'products']));
    }

    public function productDetails($id, $title) {
        
        $product = Product::find($id);

        $title = "VicFirm Financial Consultancy LTD | ".$product->name;

        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('productDetails', compact(['title', 'products', 'product']));
    }
}
