@extends('Admin.layouts.app')
@section('content')
            <div class="sb2-2">
            <div class="row">
               @if( session('success'))
               <div class="alert alert-success">
               {{ session('success') }}
                </div>
                @endif
                @if (session('fail'))
                <div class="alert alert-danger">
                {{ session('fail') }}
                </div>
                @endif
                <div class="sb2-2-1">
                    <h2>All Blogs</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Heading</th>
                                <th>Author</th>
                                <th>Published-Date</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($blogs))
                         @php
                          $i=1;
                          @endphp
                        @foreach($blogs as $blog)
                            <tr id="new{{$blog->id}}">
                                <td>{{$i}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->author}}</td>
                                <td>{{date("d M Y", strtotime($blog->created_at))}}</td>
                                <td><a href="{{route('view_blog', ['title' => $blog->slug, 'id' => $blog->id])}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><a href="{{route('blog_edit', ['title' => $blog->title, 'id' => $blog->id])}}" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit" onclick="deleteBlog('{{ $blog->id }}','{{ $blog->title }}')"><i class="fa fa-trash-o sb2-2-1-edit" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                           @php $i++; @endphp
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{ $blogs->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
function deleteBlog(id, title) {
    var evaluate = confirm("A you sure you want to delete ' "+title+" '");
    if (evaluate == true) {
        window.location.replace("{{ route('deleteBlog')}}/"+id);
    }
}
</script>

@endsection

