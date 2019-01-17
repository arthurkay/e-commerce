@extends('Admin.layouts.app')
@section('content')
            <div class="sb2-2">
                <div class="row">
               
                             @if (session('success'))
                              <div class="alert alert-success">
                              {{ session('success') }}
                             </div>
                             @endif
                             @if (session('error'))
                             <div class="alert alert-danger">
                              {{ session('error')}}
                            </div>
                            @endif
                    @php
                    $msgs = App\Message::orderBy('id','desc')->paginate(10);
                    $state = App\Message::where('status','unread')->get();
                    @endphp
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Messages:</h4>
                        </div>
                        <div class="bor">
                            <form id="subject_form" name="subject_form">

                                <div class="row">
                                    <div class="input-field col s12">
                                       <table class="table table-hover">
                                         @foreach($msgs as $msg) 
                                        <tr>
                                       @if ($msg->status == 'unread')
                                        <td><a href="{{route('read',['id' => $msg->id])}}"><i class="fa fa-envelope"> {{$msg->name}}</i></a></td><td><a href="{{route('deleteMsg', ['id' => $msg->id])}}"><i class="fa fa-trash-o"></i></a></td>
                                       @else
                                        <td><a href="{{route('read',['id' => $msg->id])}}"><i class="fa fa-envelope-open-o"> {{$msg->name}}</i></a></td><td><a href="{{route('deleteMsg', ['id' => $msg->id])}}"><i class="fa fa-trash-o"></i></a></td>
                                        @endif
                                      </tr>
                                       @endforeach
                                      </table>
                                      {{ $msgs->render() }}
                                        <label for="list-title"></label>
                                    </div>
                                </div>
                               <br />
                                <div class="row">
                                    <div class="input-field col s12">
                                          @if (isset($id))
                                          @php
                                          $message = App\Message::find($id);
                                          @endphp
                                          <h6>Name: {{$message->name}}</h6>
                                          <h6>Email: {{$message->email}}</h6>
                                          <textarea class="materialize-textarea">
{{$message->message}}
                                      </textarea>
                                          @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function deleteMsg(id) {
        let r = confirm("Are you sure, you want to delete this message?");
        if (r == true) {
            
        }
    }
    </script>
@endsection


    