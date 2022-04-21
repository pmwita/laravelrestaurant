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
     
     <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
      
      @csrf

       <div>
        <label>Title</label>
        <input style="color:blue;" type="text" name="title" placeholder="write a title" required>
       </div>

       <div>
        <label>Price</label>
        <input style="color:blue;" type="number" name="price" placeholder="write a price" required>
       </div>

       <div>
        <label>Image</label>
        <input type="file" name="image" required>
       </div>

       <div>
        <label>Description</label>
        <input style="color:blue;" type="text" name="description" placeholder="Description" required>
       </div>
        
        <div>
           <input class="btn btn-success" type="submit" name="" value="Save">
         </div>

     </form>
<br><br><br>

<div>
  <table bgcolor="black">
    <tr align="center">
      <th style="padding: 30px">Food Name</th>
      <th style="padding: 30px">Price</th>
      <th style="padding: 30px">Description</th>
      <th style="padding: 30px">Image</th>
      <th style="padding: 30px">Delete</th>
      <th style="padding: 30px">Update</th>
    </tr>
    @foreach ($data as $data)

    <tr align="center">
      <td>{{$data->title}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->description}}</td>
      <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
      <td><a class="btn btn-danger" href="{{url('/deletemenu', $data->id)}}">Delete</a></td>

      <td><a class="btn btn-success" href="{{url('/updateview', $data->id)}}">Update</a></td>
    </tr>
    
    @endforeach

  </table>
</div>

   </div>

   
    <!-- container-scroller -->
  </div>
   
   @include('admin.adminscript')


  </body>
</html>