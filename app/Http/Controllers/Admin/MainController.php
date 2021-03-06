<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Blog;
use App\Message;
use App\Product;
use App\Image;
use App\Profile;
use App\Category;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{

	public function index() {
		$user = Auth::User()->name;
        return view('Admin.home', compact(['user']));
	}

    public function blog() {
    	$user = Auth::User()->name;
        return view('Admin.blog', compact(['user']));
    }

    public function addNews(Request $request) {
    	$headline = $request->headline;
    	$body = $request->data;
    	$path = $request->file('image')->store('images');
    	$author = Auth::user()->name;

    	$blog = new Blog();
    	$blog->author = $author;
    	$blog->title = $headline;
    	$blog->body = $body;
    	$blog->image = $path;
    	$blog->views = 0;
    	$blog->slug = str_slug($headline, "-");


    	if ($blog->save()) {
    		return redirect()->back()->with('success', 'Blog successfully posted');
    	}
    	else {
    		return redirect()->back()->with('fail', 'Oops! Something didn\'t work out quite right');
    	}

    }

    public function blogs() {
    	$user = Auth::user()->name;
    	$blogs = Blog::paginate(10);
    	return view('Admin.blogs-all', compact(['user','blogs']));
	}
	
	public function blog_edit($id) {
		$user = Auth::User()->name;
		$blogs = Blog::find($id);
        return view('Admin.blog-edit', compact(['user','blogs']));
	}

	public function editBlogs(Request $request) {
		$id = $request->blog_id;
		$editor = Auth::user()->name;
		$title = $request->headline;
		$body = $request->data;
		$blog = Blog::find($id);
		$oldFile = $blog->image;

		if ($request->hasFile('image')) {
			$path = $request->file('image')->store('images');
			unlink(storage_path('app/'.$oldFile));
			$blog->image = $path;
		}

		$blog->editor = $editor;
		$blog->title = $title;
		$blog->body = $body;	

		if ($blog->save()) {
		return redirect()->back()->with('success', 'News updated succesfully');
		}
		else {
			return redirect()->back()->with('error', 'Sorry, unable to update News');
		}

	}

	public function deleteBlog($id) {
		$blog = Blog::find($id);
		$file = Blog::where('id', $id)->value('image');

		if ($blog->delete()) {
			unlink(storage_path('app/'.$file));
			return redirect()->back()->with('success', 'News successfully deleted');
		}
		else {
			return redirect()->back()->with('fail', 'Sorry, system unable to delete news');
		}
	}

	public function message_store(Request $request) {
		$name = $request->name;
		$email = $request->email;
		$message = $request->message;

		$msg = new Message();
		$msg->name = $name;
		$msg->email = $email;
		$msg->message = $message;
		$msg->status = 'unread';

		if ($msg->save()) {
			return redirect()->back()->with('success', 'Message successfully sent!');
		}
		else {
			return redirect()->back()->with('fail', 'Sorry, system unable to send your message');
		}
	}

	public function read_msg() {
		$user = Auth::user()->name;
		return view('Admin.messages', compact(['user']));
	}

	public function read($id) {
		$user = Auth::user()->name;
    	$msg = Message::find($id);
    	$msg->status = 'read';
    	if ($msg->save()) {
    	return view('Admin.messages',compact(['id','user']));
    }
    else {
    	return redirect()->back()->with('error', 'Something went wrong');
    }
    
    }

    public function delete($id) {
        $message = Message::find($id);
        if ($message->delete()) {
            return redirect()->route('read_msg')->with('status', 'Message deleted!');
        }
        else {
            return redirect()->route('read_msg')->with('error', 'Oops!, failed to delete message');
        }
	}
	
	public function settings() {
		$user = Auth::user()->name;
		return view('Admin.change_password', compact(['user']));
	}

	function passChange(Request $request){
 
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
            'new-password' => 'required|string|min:6|confirmed',
        ]);
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
        return redirect()->back()->with("success","Password changed successfully !");
 
    }

    public function product() {

    }

    public function newProduct() {
        $category = Category::get();
    	$user = Auth::user()->name;
    	return view('Admin.newproduct', compact(['user', 'category']));
    }

    public function viewProducts() {

        $user = Auth::user()->name;
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('Admin.viewproducts', compact(['user', 'products']));
    }

    public function addProduct(Request $request) {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->currency = $request->currency;
        $product->category = $request->category;

        if ($product->save()) {
            
                foreach( $request->images as $image ) {
                    Image::create([
                        'product_id' => $product->id,
                        'image' => $image->store('products')
                    ]);
                }
        
            return redirect()->back()->with('success', 'New Product successfully added!');
        }
        else {
            return redirect()->back()->with('error', 'Sorry, unable to add product to system database');
        }
    }

    public function profile() {
        $user = Auth::user()->name;
        $profile = Profile::get();
        return view('Admin.profile', compact(['user', 'profile']));
	}
	
	public function editProduct($id) {
		
        $product = Product::find($id);

		$user = Auth::user()->name;
		
        return view('Admin.editProduct', compact(['user', 'product']));
    }

    public function saveProduct(Request $request) {
        
        $product = Product::find($request->id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->currency = $request->currency;

        if ($product->save()) {
            return redirect()->back()->with('success', 'Changes successfully saved!');
        }
        else {
            return redirect()->back()->with('error', 'Sorry, system unable to update database');
        }
    }

    public function productImages($id) {

        $images = Image::where('product_id', $id)->get();

        $product = Product::find($id);

        $user = Auth::user()->name;
        
        return view('Admin.productImages', compact(['user', 'images', 'product']));
    }

    public function saveProductImages( Request $request ) {

        $product_id = $request->id;
        $images = $request->images;
        $pictures = $request->pictures;


        if ($request->hasFile('images')) {
        
        foreach( $images as $image ) {

            Image::create([
                'product_id' => $product_id,
                'image' => $image->store('products')
            ]);
        }

        return redirect()->back()->with('success', 'Images added successfully');
    }
    else {
        return redirect()->back()->with('error', 'Sorry, the request was made without a file');
    }

    }

    public function deleteImage( $id ) {
        
        $image = Image::find($id);
        
        $file = $image->image;

        if ($image->delete()) {
            unlink(storage_path('app/'.$file));
            return redirect()->back()->with('success', 'Image Deleted successfully');
        }
        else {
            return redirect()->back()->with('error', 'Sorry, unable to delete file');
        }
    }

    public function deleteProduct( $id ) {
        $product = Product::find($id);

        $images = Image::where('product_id', $id)->get();

        if ($product->delete()) {
            foreach( $images as $image) {
                unlink(storage_path('app/'.$image->image));
            }
            return redirect()->back()->with('success', 'Product deleted successfully');
        }
        else {
            return redirect()->back()->with('error', 'Sorry, system unable to delete product');
        }
    }

    public function logout() {

        Auth::logout();
        return redirect()->route('home');
        
    }

}
