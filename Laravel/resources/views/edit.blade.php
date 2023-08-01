
@include('layouts.header')
@include('layouts.sidebar')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <h4 class="card-title">Testing form</h4>
          <p class="card-description">
            Testing form
          </p>
            <form class="forms-sample" action="{{ route('update', $userss->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
              <label for="id">ID:</label>
              <input class="form-control" type="text" id="id" name="id" value="5" readonly>
              </div>
              @if ($userss->name)
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$userss->name}}">
              @endif
            </div>
            
              @if($userss->email)
              <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" value="{{$userss->email}}">
              </div>
              @endif
              @if($userss->password)
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="text" class="form-control" id="password" name="password" value="{{$userss->password}}">
            </div>
            @endif
              @if($userss->gender)
              <div class="form-group">
              <label for="gender">Gender:</label>
              <select id="gender" name="gender" >
                <option value="Female" selected>{{ $userss->gender }}</option>
                <option value="Male">Male</option>
              </select>
            </div>
              @endif
              @if($userss->city)
              <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" id="city" name="city" value="{{ $userss->city }}">
              </div>
              @endif
              @if($userss->text_area)
              <div class="form-group">
              <label for="text_area">Text Area:</label>
              <textarea id="text_area" class="form-control" name="text_area">{{ $userss->text_area }}</textarea>  @endif
              </div>
              @if($userss->filename)
              <div class="form-group">
              <label for="filename">Filename:</label><br>
              <img src="{{ asset('filename/' . $userss->filename) }}" ><br><br>
              <input type="file" id="filename" name="filename"  readonly>
              </div>
              @endif
             
              <div class="input-group col-xs-12">
                                                <span class="input-group-append">
                                                <input class="file-upload-browse btn btn-primary" type="submit" value="Submit">
                        </span>
                      </div>
</form>
</div>
</div>
</div>
</div>
</div>