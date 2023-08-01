 
@include('layouts.header')
@include('layouts.sidebar')
 <!-- partial -->
 
                <div class="get_entries main-panel content-wrapper card-body">
                <h1>Get Entires</h1>
                <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>Text Area</th>
                    <th>Image</th>
                    <th colspan="2">Action</th>
                </tr>
                @foreach($all_entries as $entries)<tr>
                <td>Name: {{$entries['name']}}</td>
                <td>{{$entries['email']}}</td>
                <td> {{$entries['gender']}}</td>
                <td> {{$entries['city']}}</td>
                <td> {{$entries['text_area']}}</td>
                <td><img class="gt_img" src="{{ asset('filename/'. $entries['filename']) }}" alt="Image Description"></td>
                <td> <a href="{{ route('edit', ['id' => $entries['id']]) }}">Edit</a></td>
                <td><a href="javascript:void(0)" class="delete-button" data-id="{{ $entries->id }}">Delete User</a></td>

                </tr>
               @endforeach
               

            </table>
            {{ $all_entries->links() }}
              </div>
             
              </div>
             
            </div>

            <footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
                    </div>
                </div>    
            </div>        
        </footer>