<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

  @include('admin.admincss') 

  </head>
  <body>
   
   @include('admin.header')
  <div class="container-scroller"> 
   @include('admin.navbar')
 
  <div style="position: center; padding-top: 115px; padding-left:55px; top: 160px; right: -150px">
     
     <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
      
      @csrf

       <div>
        <label>Name</label>
        <input style="color:blue;" type="text" name="name" placeholder="Enter Name" required>
       </div>

       <div>
        <label>Speciality</label>
        <input style="color:blue;" type="text" name="speciality" placeholder="Enter Speciality" required>
       </div>


         <div>
        <label>Image</label>
        <input type="file" name="image" required>
       </div>

        <div>
           <input class="btn btn-success" type="submit" value="Save">
         </div>

     </form>

<br><br><br>

   

<div style="position: center; padding-top: 115px; padding-left:55px; top: 160px; right: -150px">
    
    <table bgcolor="grey" border="3px">
      <tr align="center">
        <th style="padding: 30px;">Chef Name</th>
        <th style="padding: 30px;">Speciality</th>
        <th style="padding: 30px;">Image</th>
        <th style="padding: 30px;">Update</th>
        <th style="padding: 30px;">Delete</th>
      </tr>

      @foreach($data as $data)

      <tr align="center">
        <td>{{$data->name}}</td>
        <td>{{$data->speciality}}</td>
        <td><img height="150" width="150" src="chefimage/{{$data->image}}"></td>

        <td><a class="btn btn-success" href="{{url('/updatechef', $data->id)}}">Update</a></td>

        <td><a class="btn btn-danger" href="{{url('/deletechef', $data->id)}}">Delete</a></td>

      </tr>

      @endforeach

    </table>
    
  </div>



  

    <!-- container-scroller -->
  
  </div>

   @include('admin.adminscript')


  </body>
</html>