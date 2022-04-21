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

   

 <div style="position: center; padding-top: 115px; padding-left:55px; top: 160px; right: -150px" class="container">

<form action="{{url('/search')}}" method="get">
  
  @csrf

<input type="text" name="search" style="color: blue;">

<input type="submit" value="search" class="btn btn-success">

</form>


  <h1 align="center">Cutomer Orders</h1><br>

  <table bgcolor="black">
    <tr align="center">
      <th style="padding: 30px">Name</th>
      <th style="padding: 30px">Phone</th>
      <th style="padding: 30px">Address</th>
      <th style="padding: 30px">Foodname</th>
      <th style="padding: 30px">Price</th>
      <th style="padding: 30px">Quantity</th>
      <th style="padding: 30px">Total Price</th>
    </tr>

    @foreach ($data as $data)

    <tr align="center">
      <td>{{$data->name}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->foodname}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->price * $data->quantity}}</td>
    </tr>
    
    @endforeach

  </table>
</div>
  
    


<!-- container-scroller -->
  
  </div>

   @include('admin.adminscript')


  </body>
</html>