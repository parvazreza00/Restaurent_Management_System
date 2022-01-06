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

    <div>

<h1>Customers order</h1>

    <form action="{{url('/search')}}" method="get">
    @csrf
        <input type="text" name="search" placeholder="Search..." class="text-info">
        <input type="submit" value="Submit" class="btn btn-success">
    </form>


    <table style="margin-top: 100px;border: 1px solid white;">
        <thead>
            <tr class="text-info" style="border: 1px solid white;">
                <th style="border: 1px solid white;padding: 20px">Name</th>
                <th style="border: 1px solid white;padding: 20px">Phone</th>
                <th style="border: 1px solid white;padding: 20px">Address</th>
                <th style="border: 1px solid white;padding: 20px">FoodName</th>
                <th style="border: 1px solid white;padding: 20px">Price</th>
                <th style="border: 1px solid white;padding: 20px">Quantity</th>
                <th style="border: 1px solid white;padding: 20px">TotalPrice</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr style="border: 1px solid white;text-align:center">
                <td style="border: 1px solid white;">{{$data->name}}</td>
                <td style="border: 1px solid white;">{{$data->phone}}</td>
                <td style="border: 1px solid white;">{{$data->address}}</td>
                <td style="border: 1px solid white;">{{$data->foodname}}</td>
                <td style="border: 1px solid white;">{{$data->price}}BD</td>
                <td style="border: 1px solid white;">{{$data->quantity}}</td>
                <td style="border: 1px solid white;">{{$data->price * $data->quantity}}BD</td>

            </tr>
            @endforeach

        </tbody>
    </table>
    </div>


       </div>
    @include('admin.adminscript')

  </body>
</html>
