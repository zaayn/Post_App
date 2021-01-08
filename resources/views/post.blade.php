@extends('layouts.topnav')

@section('content')
<div class="col-md-8">

    <div class="panel">
        <div class="panel-body">  
            <div class="col-md-12" style="padding-bottom: 10px">
                <img src="{{asset('/img/'.$post->user->dp)}}" class="img-circle" height="35px" width="35px">
                <span style="padding-left: 10px; font-size: 20px">{{ $post->user->name }}</span>
            </div>
            <center>
                <img src="{{asset('/thum/'.$post->image)}}"/><br>
            </center>     
            <div class="col-md-12" style="padding-top: 10px">
                <a href="{{route('update.like',$post->pid)}}"><i class="far fa-heart" style="font-size: 30px" ></i></a>
                <i style="font-size: 30px; padding-right:20px">{{$post->jml_like}}</i>

                <i class="far fa-comment-alt" style="font-size: 30px"></i>
                <i style="font-size: 30px">{{$post->jml_cmt}}</i>
            </div>
            <div class="col-md-12" style="padding-top: 10px">
                @foreach($comments as $comment)
                <ol class="panel-heading">
                    <img src="{{asset('/img/'.$comment->user->dp)}}" class="img-circle" alt="User Image" height="30px" width="30px">
                    {{ $comment->user->name }} <br><br>
                    {{ $comment->comments }} 
                </ol>
                @endforeach
            </div>
            <div class="col-md-12" style="padding-top: 10px">
                <form action="{{route('store.comment')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="pid" value="{{ $post->pid }}" class="form-control">
                    <input type="text" class="form-control" name="comments" placeholder="comment" required>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="panel">
        <div class="panel-body">  
            <h3>Profil</h3>
            <img src="{{asset('/img/'.$me->dp)}}" class="img-circle" height="35px" width="35px">
            <span style="padding-left: 10px; font-size: 20px">{{ $me->name }}</span>
        </div>
    </div>
    <div class="panel">
        <div class="panel-body">
            <h3>User Online</h3>
            @foreach ($users as $usr)
            <ol class="panel-heading">
                <img src="{{asset('/img/'.$usr->dp)}}" class="img-circle" height="35px" width="35px">
                <span style="padding-left: 10px; font-size: 20px">{{ $usr->name }}</span>
            </ol>
            @endforeach
        </div>
    </div>
</div>

@endsection
<script>
    function chooseFile() {
       $("#fileInput").click();
    }
  </script>