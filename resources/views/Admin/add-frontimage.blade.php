@if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

  <div class="col-md-6">
    <a href="{{route('admin.frontImage')}}" class="btn btn-success pull-right">All frontImage</a>
</div>
<form action="{{route('admin.storefrontImage')}}" class="form-horizontal" enctype="multipart/form-data" method="POST">
@csrf
    <div class="form-group">
        <label class="col-md-4 control-label">Title</label>
        <div class="col-md-4">
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Title" class="form-control input-md">
        </div>
        @error('title')
            <div className="">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Subtitle</label>
        <div class="col-md-4">
            <input type="text" name="subtitle" value="{{ old('subtitle') }}" placeholder="Subtitle" class="form-control input-md">
        </div>
        @error('subtitle')
            <div className="">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">linktitle</label>
        <div class="col-md-4">
            <input type="text" name="linktitle" value="{{ old('linktitle') }}" placeholder="linktitle" class="form-control input-md">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">link</label>
        <div class="col-md-4">
            <input type="text" name="link" value="{{ old('link') }}" placeholder="link" class="form-control input-md">
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