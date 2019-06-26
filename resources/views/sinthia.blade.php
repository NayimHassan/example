@extends('layouts.master')
@section ('content')
    <h2>Registration form</h2>
    @include ('errors.error')
    <form action="{{url('/register')}}" method="post" class="form-group">
        {{ csrf_field() }}
        <input class="form-control" type="text" name="username" placeholder="username"> <br>
        <input  class="form-control" type="email" name="email" placeholder="email"> <br>
        <input class="form-control"  type="password" name="password" placeholder="password" > <br>
        <input type="password" name="password_confirmation" placeholder="password_confirmation"> <br>
        <input class="btn btn-danger" type="submit" name="submit" value="register"> <br>
    </form>


@endsection