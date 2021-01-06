@extends('layouts.topnav')

@section('content')
<div class="panel">
    <div class="panel-body">  

    <div class="col-md-12 list-timeline">
        <div class="col-md-12 list-timeline-section bg-light">
            <div class="col-md-12 list-timeline-detail">
                <textarea name="caption" id="" cols="80" rows="4"></textarea>
                <hr>
                <div style="position: relative; overflow:hidden" class="file btn btn-lg btn-primary">
                    Foto
                    <input style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" type="file" name="file"/>
                </div>
            </div>
        </div>
    </div>

   </div>
 </div>
@endsection