@extends('Admin.layouts.app')
@section('content')
            <div class="sb2-2">
            @if (session('success'))
           <div class="alert alert-success">
            {{ session('success') }}
            </div>
             @endif
             @if (session('error'))
             <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add New Product</h4>
                        </div>
                        <div class="bor">
                            <form id="news_form" method="post" enctype="multipart/form-data" action="{{ route('addProduct') }}">
                             {{ csrf_field() }}  
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="name" required>
                                        <label for="list-title">Product Name</label>
                                    </div>
                                </div>
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>Image 1</span>
                                                <input type="file" name="image1" required>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Product Banner">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>Image 2</span>
                                                <input type="file" name="image2" required>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Product Banner">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>Image 3</span>
                                                <input type="file" name="image3" required>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Product Banner">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>Image 4</span>
                                                <input type="file" name="image4" required>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Product Banner">
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                     <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="description" required>
                                        <label for="list-title">Product Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="price" type="number" class="validate" name="price" required >
                                        <label for="price">Price</label>
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                        <input id="quantity" type="number" class="validate" name="quantity" >
                                        <label for="quantity">Quantity</label>
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                        <select id="currency" class="validate" name="currency" required >
                                            <option value="$">Dollar</option>
                                            <option value="K">Zambian Kwacha</option>
                                        </select>
                                        <label for="currency">Currency</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('script')
    <script>
    CKEDITOR.replace( 'data' );

    </script>
    @endsection
   