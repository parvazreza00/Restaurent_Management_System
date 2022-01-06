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

        <div style="position: relative; top:60px; right:-150px; width:200px;margin-bottom:100px">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="">Title</label>
                    <input class="text-black" type="text" name="title" placeholder="Write title here" required >
                </div>

                <div class="mb-3">
                    <label for="">Price</label>
                    <input class="text-black" type="number" name="price" placeholder="Write price here" required >
                </div>

                <div class="mb-3">
                    <label for="">Image</label>
                    <input class="text-white" type="file" name="image" placeholder="Image here" required >
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <input class="text-black" type="text" name="desc" placeholder="Write description here" required >
                </div>

                <div class="mb-3">
                    <input type="submit" value="Save" class="btn btn-secondary">
                </div>
            </form>

            <div class="mt-2">

                <table bgcolor="black">
                    <tr>
                        <th style="padding:20px">Food Name</th>
                        <th style="padding:20px">Price</th>
                        <th style="padding:20px">Description</th>
                        <th style="padding:20px"> Image</th>
                        <th style="padding:20px">Action</th>
                        <th style="padding:20px">Update</th>
                    </tr>

                    @foreach ($data as $data)
                    <tr>
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img src="/foodimage/{{$data->image}}" height="160" width="160"></td>

                        <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                        <td><a href="{{url('/updatemenu',$data->id)}}">Update</a></td>
                    </tr>
                    @endforeach

                </table>
            </div>
         </div>

      </div>
        @include('admin.adminscript')

  </body>
</html>

