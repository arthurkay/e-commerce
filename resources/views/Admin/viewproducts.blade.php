@extends('Admin.layouts.app')
@section('content')
            <div class="sb2-2">
            <div class="row">
               @if( session('success'))
               <div class="alert alert-success">
               {{ session('success') }}
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                {{ session('error') }}
                </div>
                @endif
                <div class="sb2-2-1">
                    <h2>Products</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Published-Date</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($products))
                         @php
                          $i=1;
                          @endphp
                        @foreach($products as $product)
                            <tr id="new{{$product->id}}">
                                <td>{{$i}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{date("d M Y", strtotime($product->created_at))}}</td>
                                <td><a href="" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><a href="" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit" onclick="deleteBlog()"><i class="fa fa-trash-o sb2-2-1-edit" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                           @php $i++; @endphp
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection

