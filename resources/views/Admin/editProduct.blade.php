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
                            <h4>Edit: {{ $product->name }}</h4>
                        </div>
                        <div class="bor">
                            <form id="news_form" method="post" enctype="multipart/form-data" action="{{ route('saveProduct') }}">
                             {{ csrf_field() }}  
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" value="{{ $product->name }}" name="name" required>
                                        <label for="list-title">Product Name</label>
                                    </div>
                                </div>
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <a href="{{ route('productImages', ['id' => $product->id]) }}">
                                                <span>Image</span>
                                               </a>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Edit Images for this product" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" value="{{ $product->id }}" name="id" />
        
                                <div class="row">
                                     <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" value="{{ $product->description }}" name="description" required>
                                        <label for="list-title">Product Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="price" type="number" class="validate" name="price" required value="{{ $product->price }}">
                                        <label for="price">Price</label>
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                        <input id="quantity" type="number" class="validate" name="quantity" value="{{ $product->quantity }}">
                                        <label for="quantity">Quantity</label>
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                        <select id="currency" class="validate" name="currency" required >
                                            <option 
                                            @if ($product->currency == "$")
                                            {{ _('selected') }}
                                            @endif
                                            value="$">Dollar</option>
                                            <option 
                                            @if ($product->currency == "K")
                                            {{ _('selected') }}
                                            @endif
                                            value="K">Zambian Kwacha</option>
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
    @endsection
   