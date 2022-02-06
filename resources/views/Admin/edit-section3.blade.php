@if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

  <div class="col-md-6">
    <a href="{{ route('admin.section3')}}" class="btn btn-success pull-right">All section3</a>
</div>

<form action="{{route('admin.updatesection3', $sections3->id)}} " class="form-horizontal" enctype="multipart/form-data" method="POST">
@csrf
@method('PUT')
    <div class="form-group">
        <label class="col-md-4 control-label">ImageTitle</label>
        <div class="col-md-4">
            <input type="text" placeholder="Title" name="imagetitle" class="form-control input-md" value="{{$sections3->imagetitle}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">imagetext</label>
        <div class="col-md-4">
            <input type="text" placeholder="imagetext" name="imagetext" class="form-control input-md" value="{{$sections3->imagetext}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">imagelink</label>
        <div class="col-md-4">
            <input type="text" placeholder="Price" name="imagelink" class="form-control input-md" value="{{$sections3->imagelink}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Image</label>
        <div class="col-md-4">
            <input type="file" class="input-file" name="image" value="{{$sections3->image}}" />
            {{-- @if ({{$frontimg->image}}) --}}
                {{-- <img src="{{$frontimg->image->temporaryUrl()}}" width="120"/> --}}
            {{-- @endif --}}
        </div>
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary" >Submit</button>
    </div>
</form