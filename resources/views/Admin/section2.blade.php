  <div class="col-md-6">
    <a href="{{route('admin.addsection')}}" class="btn btn-success pull-right">Add section</a>
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
            <td>link</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($sections as $section)
        <tr>
            <td>{{$section->id}}</td>
            <td>{{$section->title}}</td>
            <td>{{$section->subtitle}}</td>
            <td>{{$section->link}}</td>
        
            <td>
                <a href="section/edit/{{ $section->id }}">Edit</a>
                <form action="{{route('admin.deletesection', $section->id)}} " class="form-horizontal" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" style="margin-left: 10px">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>