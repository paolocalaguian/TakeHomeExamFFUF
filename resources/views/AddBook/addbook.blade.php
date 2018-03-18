@include('Include.header')
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <br><br>
      <form method="POST" action="{{url('/insert')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
          <legend>ADD A BOOK</legend>
          
          <div class="form-group">
            <label for="title">BOOK TITLE: </label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Book Title" name="title" required="">
          </div>
          <div class="form-group">
            <label for="author">AUTHOR: </label>
            <input type="text" class="form-control" id="author" placeholder="Author Name" name="author" required="">
          </div>
          
          <div class="form-group">
            <label for="genre">GENRE: </label>
            <select class="form-control" id="genre" name="genre" required="">
              <option>Romance</option>
              <option>Satire</option>
              <option>Drama</option>
              <option>Action and Adventure</option>
              <option>Science Fiction</option>
              <option>Series</option>
              <option>Comics</option>
            </select>
          </div>

          <div class="form-group">
            <label for="libsection">LIBRARY SECTION: </label>
            <select class="form-control" id="libsection" name="libsection" required="">
              <option>Circulation</option>
              <option>Periodical Section</option>
              <option>General References</option>
              <option>Children's Section</option>
              <option>Fiction</option>
            </select>
          </div>

          <div class="form-group">
            <label for="status">STATUS FOR CHECK-OUT: </label>
            <select class="form-control" id="status" name="status" required="">
              <option>Available</option>
              <option>Unavailable</option>
            </select>
          </div><br><br>
          <div align="right">
          <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </div>
        </fieldset>
      </form>

    </div>
  </div>
</div>
@include('Include.footer')