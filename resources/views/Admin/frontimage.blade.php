  <div class="col-md-6">
    <a href="{{route('admin.addfrontImage')}}" class="btn btn-success pull-right">Add frontImage</a>
</div>
</div>
  <div class="col-md-6">
    <a href="{{route('admin.dashboard')}}" class="btn btn-success pull-right">Dashboard</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <td>Id</td>
            <td>title</td>
            <td>subtitle</td>
            <td>linktitle</td>
            <td>image</td>
            <td>link</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($frontimgs as $frontImage)
        <tr>
            <td>{{$frontImage->id}}</td>
            <td>{{$frontImage->title}}</td>
            <td>{{$frontImage->subtitle}}</td>
            <td>{{$frontImage->linktitle}}</td>
             <td> <img src="{{asset('assets/images')}}/{{$frontImage->image}}" width="60" alt="{{asset('assets/images')}}/{{$frontImage->image}}"/></td>
            <td>{{$frontImage->link}}</td>
        
            <td>
                <a href="FrontImage/edit/{{ $frontImage->id }}">Edit</a>
                <form action="{{route('admin.deletefrontImage', $frontImage->id)}} " class="form-horizontal" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" style="margin-left: 10px">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>