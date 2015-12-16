@extends('layouts.master')
@section('title','Computer Course')
<!-- View for Computer Science Courses only-->
@section('content')
<div class="jumbotron move2">
    <div class="container">
    <h1>Computer Science</h1>
    </div>
</div>
<div class="container" style="min-height: 180px">
    <ul class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="active">Computer Science</li>
    </ul>
 @include('layouts.views')
</div>
@endsection