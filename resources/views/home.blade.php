@extends('layouts.topnav')

@section('content')
<div class="col-md-8">
    <div class="panel">
        <div class="panel-body">  
            <div class="col-md-1">
                <img src="{{asset('/img/'.Auth::user()->dp)}}" class="img-circle" alt="User Image" height="50px" width="50px">
            </div>
            <div class="col-md-11" style="padding-left:30px">
                <form action="{{route('store.post')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <textarea class="col-md-12" name="caption" rows="3" placeholder="Apa yang anda pikirkan, {{Auth::user()->name}}" required></textarea>
                    
                    <div class="col-md-12">
                        <div class="col-md-6" >
                            <label for="actual-btn">Choose File</label>
                            <span id="file-chosen">No file chosen</span>
                            <input type="file" id="actual-btn" name="image" hidden/>
                        </div>
                        <div class="col-md-6" style="padding-top: 10px">
                            <input type="submit" class="btn btn-primary" value="Submit Button">
                        </div>
                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>
    @foreach($posts as $post)

    <div class="panel">
        <div class="panel-body">  
            <div class="col-md-12" style="padding-bottom: 10px">
                <img src="{{asset('/img/'.$post->user->dp)}}" class="img-circle" height="35px" width="35px">
                <span style="padding-left: 10px; font-size: 20px">{{ $post->user->name }}</span>
            </div>
            <center>
                <a href="{{route('post',$post->pid)}}">
                    <img src="{{asset('/thum/'.$post->image)}}"/><br>
                </a>
            </center>     
            <div class="col-md-12" style="padding-top: 10px">
                <a href="{{route('update.like',$post->pid)}}"><i class="far fa-heart" style="font-size: 30px" ></i></a>
                <i style="font-size: 30px; padding-right:20px">{{$post->jml_like}}</i>

                <i class="far fa-comment-alt" style="font-size: 30px"></i>
                <i style="font-size: 30px">{{$post->jml_cmt}}</i>
            </div>
            <div class="col-md-12" >
                <h4 style="style="font-size: 20px">{{$post->caption}}</h4>
            </div>
        </div>
    </div>

    @endforeach
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