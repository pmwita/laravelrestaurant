<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

<base href="/public">

  @include('admin.admincss') 

  </head>
  <body>
   
   @include('admin.header')

  <div class="container-scroller"> 

   @include('admin.navbar')

 
  <div style="position: center; padding-top: 115px; padding-left:55px; top: 160px; right: -150px">
     
     <form action="{{url('/updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data">
      
      @csrf

       <div>
        <label>Chef Name</label>
        <input style="color:blue;" type="text" name="name" value="{{$data->name}}" required>
       </div>

       <div>
        <label>Speciality</label>
        <input style="color:blue;" type="text" name="speciality" pvalue="{{$data->speciality}}" required>
       </div>
        
        <div>
        <label>Old Image</label>
        <img height="170" width="170" src="/chefimage/{{$data->image}}">
       </div>

         <div>
        <label>New Image</label>
        <input type="file" name="image" required>
       </div>

        <div>
           <input class="btn btn-success" type="submit" value="Update Chef">
         </div>

     </form>

<br><br><br>
   
  
    <!-- container-scroller -->
  
  </div>

   @include('admin.adminscript')


  </body>
</html>