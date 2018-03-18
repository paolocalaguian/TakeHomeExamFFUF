@include('Include.header')
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <br><br>
      <form method="POST" action="{{url('/search')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
          <legend>SEARCH A BOOK</legend>
            @if(session('info'))
              <div class="alert alert-success">
                {{session('info')}}
              </div>  
            @endif  
          <div class="form-group">
            <label for="search">SEARCH DATA: </label>
            <input type="text" class="form-control" id="search" placeholder="Search Data" name="search" required="">
          </div>
          
        <div align="right"><button type="submit" class="btn btn-primary btn-lg">Search</button></div>
      </form>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <legend>Search Results</legend>
    @if(isset($details))
        <p> The search results for <u><b>{{$query}}</b></u> are: </p>
    
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
          @foreach($details as $search)
            @if($search->status =='Available')
            <tr>
              <td>{{$search->id}}</td>
              <td>{{$search->title}}</td>
              <td>{{$search->author}}</td>
              <td>{{$search->genre}}</td>
              <td>{{$search->libsection}}</td>
              <td>
                  <a href="{{ url("/edit3/{$search->id}") }}"><button type="button" class="btn btn-success btn-sm">Check-Out</button>&nbsp&nbsp</a>
                  <a href='{{ url("/update/{$search->id}") }}'><button type="button" class="btn btn-info btn-sm">Update</button>&nbsp&nbsp</a>
                  <a href='{{ url("/delete/{$search->id}") }}'><button type="button" class="btn btn-danger btn-sm">Delete</button>&nbsp&nbsp</a>
                </td>
            </tr>
            @endif
          @endforeach
        </tbody>
    </table>
  </div>
    @endif
</div>

@include('Include.footer')