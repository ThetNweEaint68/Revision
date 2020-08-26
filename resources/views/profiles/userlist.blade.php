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
            <td>
               <form method="post" action="{{action('ProfileController@show', $user['id']) }}">
               @csrf
               <button type="submit" class="btn btn-secondary">View</button>
               </form>
            </td>
            <td>
               <form method="post" class="delete-form" action="{{action('ProfileController@destroy', $user['id']) }}">
               @csrf
               @method('delete')
               <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
         </tr>
         @endforeach
      </table>	
   </div>
</div>
@endsection