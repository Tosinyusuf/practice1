  <div class="col-md-6">
    <a href="{{route('admin.addarticle')}}" class="btn btn-success pull-right">Add article</a>
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
            <td>image</td>
            <td>link</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
             <td> <img src="{{asset('assets/images')}}/{{$article->image}}" width="60" alt="{{asset('assets/images')}}/{{$article->image}}"/></td>
            <td>{{$article->link}}</td>
        
            <td>
                <a href="article/edit/{{ $article->id }}">Edit</a>
                <form action="{{route('admin.deletearticle', $article->id)}} " class="form-horizontal" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" style="margin-left: 10px">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>