@include('Include.header')

<div class="container">
  <div class="row">
    <legend>Library Books Available</legend>
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
            @if($libraries->status == "Available")
            <tr class="table-active">
              <td>{{$libraries->id}}</td>
              <td>{{$libraries->title}}</td>
              <td>{{$libraries->author}}</td>
              <td>{{$libraries->genre}}</td>
              <td>{{$libraries->libsection}}</td>
              <td>
                  <a href="{{ url("/edit3/{$libraries->id}") }}"><button type="button" class="btn btn-success btn-sm">Check-Out</button>&nbsp&nbsp</a>
                  <a href='{{ url("/update/{$libraries->id}") }}'><button type="button" class="btn btn-info btn-sm">Update</button>&nbsp&nbsp</a>
                  <a href='{{ url("/delete/{$libraries->id}") }}'><button type="button" class="btn btn-danger btn-sm">Delete</button>&nbsp&nbsp</a>
                  
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