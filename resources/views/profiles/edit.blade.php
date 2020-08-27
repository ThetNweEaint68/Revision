@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>
                            <div class="col-md-6">
                              <input id="avatar" type="file" class="form-control" name="avatar" value="{{ $user->avatar }}">
                              <img class="rounded-circle" src="{{ route('profile.showAvatar', $user->id) }}" / width="100" height="100"><br>
                            </div>
                        </div>

                         <div class="form-group row ">
                                <div class="col-md-12">
                                    <label for="sex" class= "col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>
                            <div class="form-check form-check-inline" >
                                <input type="radio" class="flat" name="sex" value="male" @if ($user->sex == "male") checked @endif>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="flat" name="sex"  value="female" @if ($user->sex == "female") checked @endif>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                                </div>

                        </div>

                         <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>
                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ $user->birthday }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age
                            ') }}</label>
                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $user->age }}">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>
                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ $user->telephone }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
