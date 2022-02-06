@if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

  <div class="col-md-6">
    <a href="{{ route('admin.section')}}" class="btn btn-success pull-right">All section</a>
</div>

<form action="{{route('admin.updatesection', $sections->id)}} " class="form-horizontal" enctype="multipart/form-data" method="POST">
@csrf
@method('PUT')
    <div class="form-group">
        <label class="col-md-4 control-label">Title</label>
        <div class="col-md-4">
            <input type="text" placeholder="Title" name="title" class="form-control input-md" value="{{$sections->title}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Subtitle</label>
        <div class="col-md-4">
            <input type="text" placeholder="Subtitle" name="subtitle" class="form-control input-md" value="{{$sections->subtitle}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">link</label>
        <div class="col-md-4">
            <input type="text" name="link" placeholder="link" name="link" class="form-control input-md" value="{{$sections->link}}">
        </div>
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary" >Submit</button>
    </div>
</form