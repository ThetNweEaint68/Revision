@extends('layouts.app')

@section('content')
  <div id="wrapper">
   <br>
   <h3 align="center">User Lists</h3>
   <br>
   <div class="table-responsive">
      <table id="user-table" class="table table-bordered table-striped">
         <tr>
            <th>Name</th>
            <th>Sex</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>View</th>
            <th>Delete</th>
         </tr>
         @foreach($users as $user)
         <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['sex'] }}</td>
            <td>{{ $user['age'] }}</td>
            <td>{{ $user['birthday'] }}</td>
            <td><a href="{{ url('profiles/{id}') }}">View</a></td>
            <td><a href="{{ url('profiles/{id}') }}">Delete</a></td>
         </tr>
          @endforeach
      </table>	
   </div>
</div>
@endsection