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
                            <h4>Modify: {{ $product->name }}'s Images</h4>
                        </div>
                        <div class="bor">
                            <form id="news_form" method="post" enctype="multipart/form-data" action="{{ route('saveProductImages') }}">
                             {{ csrf_field() }}  
                                <div class="row">
                                    <div class="input-field col s12">
                                        
                                        @foreach( $images as $image )
                                        <div class="col-md-6">
                                        <img src="{{ asset('storage/'.$image->image) }}" width="100%" onclick="deleteImage({{ $image->id }})" /><br />
                                        <!--
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>Image</span>
                                                <input type="file" name="pictures[]" class="img-more">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Replace this image">
                                            </div>
                                        </div>
                                    -->
                                        </div>
                                        @endforeach
                                        <div class="row"></div>
                                        <div class="row"></div>
                                        <div class="row imagesEx">
                                            <div class="input-filed col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>Image</span>
                                                <input type="file" name="images[]" multiple required class="img-more">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Add image(s)">
                                            </div>
                                        </div>
                                            </div>
                                        </div>

                                </div>
                                    <input type="hidden" value="{{ $product->id }}" name="id" />
        
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
        @section('script')
    <script>

            function deleteImage(id) {
           
        var alert = confirm("Are you sure you want to delete this image?");
        if (alert) {
            window.location.href="{{ route('deleteImage') }}/"+id
        }
    }

    </script>
    @endsection
    @endsection
   