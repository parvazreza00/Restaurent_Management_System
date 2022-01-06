<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include('admin.admincss')
  </head>
  <body>

       <div class="container-scroller">
    @include('admin.navbar')


         <div style="position: relative; top:60px; right:-150px; width:200px;margin-bottom:100px">
            <form action="{{url('/updatechefdata',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="">Name</label>
                    <input class="text-black" type="text" name="title" value="{{$data->name}}" required >
                </div>

                <div class="mb-3">
                    <label for="">Speciality</label>
                    <input class="text-black" type="text" name="speciality" value="{{$data->speciality}}" required >
                </div>

                 <div class="mb-3">
                    <label for="">Old Image</label>
                    <img src="/chefimage/{{$data->image}}">
                </div>

                <div class="mb-3">
                    <label for="">Upload New Image</label>
                    <input type="file" name="image" required>

                </div>

                <div class="mb-3">
                    <input type="submit" value="Save" class="btn btn-secondary">
                </div>
            </form>
        </div>


       </div>
    @include('admin.adminscript')

  </body>
</html>
