  <div class="col-md-6">
    <a href="{{route('admin.addsection3')}}" class="btn btn-success pull-right">Add section3</a>
</div>
  <div class="col-md-6">
    <a href="{{route('admin.dashboard')}}" class="btn btn-success pull-right">Dashboard</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <td>Id</td>
            <td>imagetitle</td>
            <td>imagetext</td>
            <td>imagelink</td>
            <td>image</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($sections3 as $section3)
        <tr>
            <td>{{$section3->id}}</td>
            <td>{{$section3->imagetitle}}</td>
            <td>{{$section3->imagetext}}</td>
            <td>{{$section3->imagelink}}</td>
            <td>{{$section3->image}}</td>
        
            <td>
                <a href="section3/edit/{{ $section3->id }}">Edit</a>
                <form action="{{route('admin.deletesection3', $section3->id)}} " class="form-horizontal" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" style="margin-left: 10px">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>