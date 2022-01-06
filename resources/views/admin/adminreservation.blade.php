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


     <div class="mt-5 ms-5" style="">

        <table style="border: 2px solid red;">
          <thead>
            <tr style="border: 2px solid red">
              <th style="border: 2px solid red;padding:10px;">Name</th>
              <th style="border: 2px solid red;padding:10px;">Email</th>
              <th style="border: 2px solid red;padding:10px;">Phone</th>
              <th style="border: 2px solid red;padding:10px;">Guest</th>
              <th style="border: 2px solid red;padding:10px;">Date</th>
              <th style="border: 2px solid red;padding:10px;">Time</th>
              <th style="border: 2px solid red;padding:10px;">Message</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $data)

              <tr style="border: 2px solid red">
                  <td style="border: 2px solid red;padding:10px;">{{$data->name}}</td>
                  <td style="border: 2px solid red;padding:10px;">{{$data->email}}</td>
                  <td style="border: 2px solid red;padding:10px;">{{$data->phone}}</td>
                  <td style="border: 2px solid red;padding:10px;">{{$data->guest}}</td>
                  <td style="border: 2px solid red;padding:10px;">{{$data->date}}</td>
                  <td style="border: 2px solid red;padding:10px;">{{$data->time}}</td>
                  <td style="border: 2px solid red;padding:10px;">{{$data->message}}</td>

              </tr>
              
              @endforeach
          </tbody>

        </table>

      </div>


       </div>
    @include('admin.adminscript')

  </body>
</html>
