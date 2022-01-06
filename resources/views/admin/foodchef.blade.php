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

            <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="">Name</label>
                    <input class="text-black" type="text" name="name" placeholder="Write name here" required >
                </div>

                <div class="mb-3">
                    <label for="">Speciality</label>
                    <input class="text-black" type="text" name="speciality" placeholder="Write speciality here" required >
                </div>

                <div class="mb-3">
                    <label for="">Image</label>
                    <input class="text-white" type="file" name="image" required >
                </div>

                <div class="mb-3">
                    <input type="submit" value="Save" class="btn btn-secondary">
                </div>
            </form>

            <div class="mt-2">
                <table style="border: 2px solid red;">
                    <thead>
                        <tr style="border: 2px solid red">
                        <th style="border: 2px solid red;padding:10px;">Name</th>
                        <th style="border: 2px solid red;padding:10px;">Speciality</th>
                        <th style="border: 2px solid red;padding:10px;">Image</th>
                        <th style="border: 2px solid red;padding:10px;">Action</th>
                        <th style="border: 2px solid red;padding:10px;">Update</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $data)
                        <tr style="border: 2px solid red">
                            <td style="border: 2px solid red;padding:10px;">{{$data->name}}</td>
                            <td style="border: 2px solid red;padding:10px;">{{$data->speciality}}</td>
                            <td style="border: 2px solid red;padding:10px;"><img src="chefimage/{{$data->image}}"</td>
                            <td style="border: 2px solid red;padding:10px;"><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
                            <td style="border: 2px solid red;padding:10px;"><a href="{{url('/updatechef',$data->id)}}">Update</a></td>


                        </tr>
                        @endforeach
                    </tbody>





                    {{-- @foreach ($data as $data)
                    <tr>
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img src="/foodimage/{{$data->image}}" height="160" width="160"></td>

                        <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>

                        <td><a href="{{url('/updatemenu',$data->id)}}">Update</a></td>
                    </tr>
                    @endforeach --}}

                </table>
            </div>

        </div>






       </div>
    @include('admin.adminscript')

  </body>
</html>
