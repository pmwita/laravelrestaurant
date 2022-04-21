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
    <table bgcolor="grey" border="3px">
      <tr align="center">
            <th style="padding: 30px;">Name</th>
            <th style="padding: 30px;">Email</th>
            <th style="padding: 30px;">Phone</th>
            <th style="padding: 30px;">Date</th>
            <th style="padding: 30px;">Time</th>
            <th style="padding: 30px;">Message</th>
            
        </tr>
        
        @foreach($data as $data)     

        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->time}}</td>
            <td>{{$data->message}}</td>
        </tr>

        @endforeach
        
    </table>
</div>

   
  
    <!-- container-scroller -->
  
  </div>

   @include('admin.adminscript')


  </body>
</html>