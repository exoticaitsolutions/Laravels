@include('layouts.frontend.header')
<div class="baner_slide"> 
@foreach($banner_img as $img)
            <div class="banner_img" style="background-image: url('{{ asset('images/' . $img->image) }}');">
                <h1>{{  $img->caption }}</h1>
          
        </div> <!-- Here is the closing tag for the div with the "slider slider-for" class -->
@endforeach
</div>
    
    <div class="bg-img">
        <form action="{{Route('insert_from')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Form Fill</h1>
            <div class="form-group">
                <label for="email"><b>Name</b></label>
                <input  class="form-control" type="text" placeholder="Enter Email" name="name" >
                @error('name')
                <span class="error alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input class="form-control" type="text" placeholder="Enter Email" name="email" >
                @error('email')
                <span class="error alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="psw"><b>Password</b></label>
                <input  class="form-control" type="password" placeholder="Enter Password" name="password" >
                @error('password')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>File upload</label>
                <input  class="form-control" type="file" name="filename" accept="image/*"  class="file-upload-default">
                @error('filename')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input  class="btn btn-primary" type="submit" class="btn" name="submit" value="Submit">
            </div>
        </form>
    </div>

</body>
</html>
