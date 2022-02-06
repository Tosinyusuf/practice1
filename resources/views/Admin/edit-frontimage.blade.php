@if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

  <div class="col-md-6">
    <a href="{{ route('admin.frontImage')}}" class="btn btn-success pull-right">All frontImage</a>
</div>

<form action="{{route('admin.updatefrontImage', $frontimg->id)}} " class="form-horizontal" enctype="multipart/form-data" method="POST">
@csrf
@method('PUT')
    <div class="form-group">
        <label class="col-md-4 control-label">Title</label>
        <div class="col-md-4">
            <input type="text" placeholder="Title" name="title" class="form-control input-md" value="{{$frontimg->title}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Subtitle</label>
        <div class="col-md-4">
            <input type="text" placeholder="Subtitle" name="subtitle" class="form-control input-md" value="{{$frontimg->subtitle}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">linktitle</label>
        <div class="col-md-4">
            <input type="text" placeholder="Price" name="linktitle" class="form-control input-md" value="{{$frontimg->linktitle}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">link</label>
        <div class="col-md-4">
            <input type="text" name="link" placeholder="link" name="link" class="form-control input-md" value="{{$frontimg->link}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Image</label>
        <div class="col-md-4">
            <input type="file" class="input-file" name="image" value="{{$frontimg->linktitle}}" />
            {{-- @if ({{$frontimg->image}}) --}}
                {{-- <img src="{{$frontimg->image->temporaryUrl()}}" width="120"/> --}}
            {{-- @endif --}}
        </div>
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary" >Submit</button>
    </div>
</form