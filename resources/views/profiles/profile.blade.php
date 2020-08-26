@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="profile-header-container">
                    <div class="profile-header-img">
                        <img class="rounded-circle" src="{{ route('profile.showAvatar', $user->id) }}" / width="150" height="150"><br>
                        <div class="rank-label-container">
                            <span class="label label-default rank-label">{{$user->name}}</span><br>
                            <span class="label label-default rank-label">{{$user->sex}}</span><br>
                            <span class="label label-default rank-label">{{$user->birthday}}</span><br>
                            <span class="label label-default rank-label">{{$user->age}}</span><br>
                            <span class="label label-default rank-label">{{$user->address}}</span><br>
                            <span class="label label-default rank-label">{{$user->telephone}}</span><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection