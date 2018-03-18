@include('Include.header')

<div class="container">
  <div class="row">
    <legend>Books Borrowed</legend>
    @if(session('info'))
      <div class="alert alert-success">
        {{session('info')}}
      </div>  
    @endif  
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID no.</th>
          <th scope="col">Book Title</th>
          <th scope="col">Author Name</th>
          <th scope="col">Genre</th>
          <th scope="col">Library Section</th>
          <th scope="col" align="center">Actions</th>
        </tr>
      </thead>
      <tbody>
        @if(count($libraries)>0)
            @foreach($libraries->all() as $libraries)
            @if($libraries->status == "Unavailable")
            <tr class="table-active">
              <td>{{$libraries->id}}</td>
              <td>{{$libraries->title}}</td>
              <td>{{$libraries->author}}</td>
              <td>{{$libraries->genre}}</td>
              <td>{{$libraries->libsection}}</td>
              <td>
                  <a href='{{ url("/edit2/{$libraries->id}") }}'><button type="button" class="btn btn-info btn-sm">Return Book</button>&nbsp&nbsp</a>
            </td>
            </tr>
            @endif
            
           @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>


@include('Include.footer')