@extends('layouts.master')
@section('title','edit')
<!-- View for Editing Uploaded Courses-->
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/course.css') }}">
@endsection

@section('content')
<div class="container move2">
    <div class="jumbotron">
        <form class="form-horizontal" method="POST" action="{{ route('courses.update',$course->id) }}">
          <fieldset>
            <legend>Edit {{ $course->course }}</legend>
            <div class="form-group">
              <label for="inputCourse" class="col-md-2 control-label">Course Name</label>

              <div class="col-md-10">
                <input type="text" class="form-control" name="course" value="{{ $course->course }}">
              </div>
            </div>
            <div class="form-group">
                  <label for="textArea" class="col-md-2 control-label">Course Description</label>

                  <div class="col-md-10">
                    <textarea class="form-control" rows="3" name="description" minlength="15">{{ $course->description}}</textarea>
                    <span class="help-block">Minimum of 15 characters.</span>
                  </div>
            </div>
            <div class="form-group">
                  <label for="select111" class="col-md-2 control-label">Section</label>

                  <div class="col-md-10">
                    <select class="form-control" name="section">
                      <option value="{{ $course->section }}">{{ $course->section }}</option>
                      {{ getSection($course->section) }}
                    </select>
                  </div>
            </div>
            <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-primary btn-raised" value="Save Changes">
                        <span></span>
                        <a href="/dashboard" class="btn btn-default" value="Go Back" >Go Back</a>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  {!! method_field('PUT') !!}
          </fieldset>
        </form>
    </div>
</div>
@endsection