@include('Include.header')
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <br><br>
      <form method="POST" action="{{url('/edit',array($libraries->id)) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
          <legend>ADD A BOOK</legend>
          
          <div class="form-group">
            <label for="title">BOOK TITLE: </label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Book Title" name="title" required="" value="<?php echo $libraries->title ?>">
          </div>
          <div class="form-group">
            <label for="author">AUTHOR: </label>
            <input type="text" class="form-control" id="author" placeholder="Author Name" name="author" required="" value="<?php echo $libraries->author ?>">
          </div>
          
          <div class="form-group">
            <label for="genre">GENRE: </label>
            <select class="form-control" id="genre" name="genre" required="" >
              <option value="<?php if($libraries->genre == 'Romance')?>">Romance</option>
              <option>Satire</option>
              <option>Drama</option>
              <option>Action and Adventure</option>
              <option>Science Fiction</option>
              <option>Series</option>
              <option value="<?php if($libraries->genre == 'Comics')?> select">Comics</option>
            </select>
          </div>

          <div class="form-group">
            <label for="libsection">LIBRARY SECTION: </label>
            <select class="form-control" id="libsection" name="libsection" required="" value="<?php echo $libraries->libsection ?>">
              <option>Circulation</option>
              <option>Periodical Section</option>
              <option>General References</option>
              <option>Children's Section</option>
              <option>Fiction</option>
            </select>
          </div>

          <div class="form-group">
            <label for="status">STATUS FOR CHECK-OUT: </label>
            <select class="form-control" id="status" name="status" required="" value="<?php echo $libraries->status  ?>">
              <option>Available</option>
              <option>Unavailable</option>
            </select>
          </div><br><br>
          <div align="right">
          <button type="submit" class="btn btn-primary btn-lg">Update</button>
          </div>
        </fieldset>
      </form>

    </div>
  </div>
</div>
@include('Include.footer')