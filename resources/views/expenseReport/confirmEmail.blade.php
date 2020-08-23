@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col">
      <h1>Send Email Report {{$report->id}}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="{{route('expense_reports.show',$report)}}">Back</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
          </ul>
        </div>
      @endif
      <form method="POST" action="{{route('expense_reports.sendEmail',$report->id)}}">
        @csrf
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Type your email" value="{{old('email')}}">
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
  </div>
@endsection