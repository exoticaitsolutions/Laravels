
@include('layouts.header')
@include('layouts.sidebar')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <h4 class="card-title">Add Banner</h4>
          <p class="card-description">
          Add Banner
          </p>
          <form class="forms-sample" action="{{ route('addbanner') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
              <label for="filename">Filename:</label><br>
              <input type="file" id="filename" name="image"  readonly>
              @error('image')
              <span class="error alert-danger">{{$message}}</span>
              @enderror
              </div>
              <div class="form-group">
                      <label for="exampleTextarea1">Caption</label>
                      <textarea name="caption" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      @error('caption')
                      <span class="error alert-danger">{{$message}}</span>

                      @enderror
                    </div>
              <div class="input-group col-xs-12">
                <span class="input-group-append">
                    <input class="file-upload-browse btn btn-primary" type="submit" value="Submit">
                </span>
            </div>
        </form>
    </div>
    <a href="{{route('getbanner')}}">Display Banner</a>
</div>
</div>
</div>
</div>
</div>