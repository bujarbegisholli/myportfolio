@extends('layouts.main')

@section('content')
    <div class="row justify-content-center m-t-30">
        <h1>Edit your personal info</h1>
    </div>
    <hr>
    <div class="row m-t-50">
        <div class="col-md-6 offset-md-3">
            <form action="{{route('info.update',$info->id)}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$info->name}}">
                </div>
                <div class="form-group">
                    <label for="">Birthday</label>
                    <input type="date" class="form-control" name="birthday" value="{{$info->bith}}">
                </div>
                <div class="form-group">
                    <label for="">Country</label>
                    <input type="text" class="form-control" name="country" value="{{$info->country}}">
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input type="text" class="form-control" name="city" value="{{$info->city}}">
                </div>
                <input type="submit" class="btn btn-awesome btn-block" value="Insert Info">
            </form>
        </div>
    </div>
@endsection