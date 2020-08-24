@extends('layouts.app')

@section('content')
    <div id="wrapper">
              <div id="page" class="container">
              <h1 class="heading has-text-weight-bold">Update Form</h1>
              <br>
              <form class="" action="{{ route('profile.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PATCH')
              <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                  <input class="input" type="text" name="name" id="name" value="{{$user->name}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="age">Age</label>
                <div class="control">
                  <input class="input" type="text" name="age" id="age" value="{{$user->age}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="birthday">Birthday</label>
                <div class="control">
                  <input class="input" type="date" name="birthday" id="birthday" value="{{$user->birthday}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="email">Email</label>
                <div class="control">
                  <input class="input" type="email" name="email" id="email" value="{{$user->email}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="address">Address</label>
                <div class="control">
                  <input class="input" type="text" name="address" id="address" value="{{$user->address}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="phone">Phone</label>
                <div class="control">
                  <input class="input" type="text" name="phone" id="phone" value="{{$user->phone}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="password">Password</label>
                <div class="control">
                  <input class="input" type="password" name="password" id="password" value="{{$user->password}}">
                </div>
              </div>
              <br>
              <div class="field is-grouped">
                <div class="control">
                  <button class="button is-link" type="submit">Update</button>
                </div>
              </div>

              </form>
              </div> 
            </div>
            @endsection