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


    <div class="container text-center mt-2">
      <h1>Welcome to Admin Dashboadr</h1>
      <div class="row">
        <div class="col-md-3">
          <h3>Dashboard</h3>
        </div>        
      </div>

      

    </div>


       </div>
    @include('admin.adminscript')

  </body>
</html>
