@extends('layouts/back')

@section('title')
    cardData
@endsection

@section('content')

<form method="POST" action="{{url('/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">profile name</label>
            <input type="text" class="form-control" name="profile_name" placeholder="type profile name">
            @error('profile_name')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">phone number</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter your phone">
            @error('phone')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Facebook</label>
            <input type="text" name="fb" class="form-control" placeholder="facebook">
            @error('fb')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Location</label>
            <input type="text" name="location" class="form-control" placeholder="location">
            @error('location')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">job title</label>
            <input type="text" name="jobTitle" class="form-control" placeholder="job title">
            @error('jobTitle')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">github</label>
            <input type="text" name="github" class="form-control" placeholder="github">
            @error('github')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">linkedIn</label>
            <input type="text" name="linkedIn" class="form-control" placeholder="linkedIn">
            @error('linkedIn')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
            @error('email')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="profile_pic" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
            @error('profile_pic')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


@endsection