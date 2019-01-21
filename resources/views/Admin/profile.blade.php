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
                            <h4>Edit: Company Profile</h4>
                        </div>
                        <div class="bor">
                            <form id="news_form" method="post" enctype="multipart/form-data" action="{{ route('editBlogs') }}">
                             {{ csrf_field() }}  
                                <div class="row">
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file" name="image">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload News Banner">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- <textarea id="textarea1" class="materialize-textarea" name="data" required></textarea>
                                        <label for="textarea1">News Descriptions:</label> -->
                                        <textarea name="data" id="editor1" rows="10" cols="80">
                                        {{ $profile->company }}
                                       </textarea>
                                       <input type="hidden" name="blog_id" value="{{ $profile->id }}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="post-auth" type="text" class="validate" name="authname" required value="{{ $user }}">
                                        <label for="post-auth">Author Name</label>
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
   