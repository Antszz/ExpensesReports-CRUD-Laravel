@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col">
      <h1>Delete Report {{$id}}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/expense_reports">Back</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form method="POST" action="{{route('expense_reports.destroy',$id)}}">
        @csrf
        @method('delete')
          <button class="btn btn-danger" type="submit">Delete</button>
      </form>
    </div>
  </div>
@endsection