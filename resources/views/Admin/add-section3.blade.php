@if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

  <div class="col-md-6">
    <a href="{{route('admin.section3')}}" class="btn btn-success pull-right">All section3</a>
</div>
<form action="{{route('admin.storesection3')}}" class="form-horizontal" enctype="multipart/form-data" method="POST">
@csrf
    <div class="form-group">
        <label class="col-md-4 control-label">ImageTitle</label>
        <div class="col-md-4">
            <input type="text" name="imagetitle" value="{{ old('imagetitle') }}" placeholder="Title" class="form-control input-md">
        </div>
        @error('title')
            <div className="">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Imagetext</label>
        <div class="col-md-4">
            <input type="text" name="imagetext" value="{{ old('imagetext') }}" placeholder="Subtitle" class="form-control input-md">
        </div>
        @error('subtitle')
            <div className="">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">inagelink</label>
        <div class="col-md-4">
            <input type="text" name="imagelink" value="{{ old('imagelink') }}" placeholder="linktitle" class="form-control input-md">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Image</label>
        <div class="col-md-4">
            <input type="file" name="image"  class="input-file">
            {{-- @if ($image)
                <img src="{{$image->temporaryUrl()}}" width="120"/>
            @endif --}}
        </div>
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary" >Submit</button>
    </div>
</form