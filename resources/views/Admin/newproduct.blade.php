@extends('Admin.layouts.app')
@section('content')
            <div class="sb2-2">
            @if (session('success'))
           <div class="alert alert-success">
            {{ session('success') }}
            </div>
             @endif
             @if (session('fail'))
             <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
            @endif
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add New Product</h4>
                        </div>
                        <div class="bor">
                            <form id="news_form" method="post" enctype="multipart/form-data" action="{{ route('addNews') }}">
                             {{ csrf_field() }}  
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="name" required>
                                        <label for="list-title">Product Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file" name="image" required>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Product Banner">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="name" required>
                                        <label for="list-title">Product Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="post-auth" type="text" class="validate" name="authname" required value="{{ $user }}">
                                        <label for="post-auth">Price</label>
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                        <input id="post-auth" type="number" class="validate" name="authname" >
                                        <label for="post-auth">Quantity</label>
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                        <input id="post-auth" type="text" class="validate" name="authname" required >
                                        <label for="post-auth">Currency</label>
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
   