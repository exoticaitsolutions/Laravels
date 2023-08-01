@include('layouts.header')
@include('layouts.sidebar')
<table>
  <tr>
  <th>Image</th>
  <th>Caption</th>                
  <th colspan="2">Action</th>
  </tr>
  @foreach($banner_imgs as $imgs)

  <tr>
  <td><img src="{{ asset('images/'.$imgs->image) }}" alt="{{ $imgs->caption }}"></td>
  <td><p>{{$imgs->caption}}</p></td>
  <td> <a href="{{ route('edit', ['id' => $imgs['id']]) }}">Edit</a></td>
                <td><a href="javascript:void(0)" class="delete-banner" data-id="{{ $imgs->id }}">Delete User</a></td>

  </tr>
  @endforeach
  
</table>