@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')
@if($user->getUsername() == 'Mark')
    <h3>Mark, you have logged in successfully.</h3>
@else
    <h3>Someone besides Mark logged in successfully</h3>
@endif
@endsection
