<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.admincss')


  </head>
  <body>
      <div class="container-scroller">
    @include('admin.navbar')

      <div class="mt-2 m-auto" style="">

        <table style="border: 2px solid red;">
          <thead>
            <tr style="border: 2px solid red">
              <th style="border: 2px solid red;padding:10px;">Name</th>
              <th style="border: 2px solid red;padding:10px;">Email</th>
              <th style="border: 2px solid red;padding:10px;">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($data as $data)
            <tr style="border: 2px solid red">
              <td style="border: 2px solid red;padding:10px;">{{$data->name}}</td>
              <td style="border: 2px solid red;padding:10px;">{{$data->email}}</td>

              @if($data->usertype=="0")
              <td style="border: 2px solid red;padding:10px; " ><a href="{{url('/deleteuser',$data->id)}}">delete</a></td>
              @else
              <td style="border: 2px solid red;padding:10px; "><a>Not Allowed</a></td>
              @endif
            </tr>
            @endforeach

          </tbody>
        </table>

      </div>







      </div>
    @include('admin.adminscript')

  </body>
</html>

