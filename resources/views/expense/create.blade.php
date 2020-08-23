@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col">
      <h1>New Expense for {{$report->title}}</h1>
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
      <form method="POST" action="{{route('expense_reports.expenses.store',$report)}}">
        @csrf
          <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Type your description" value={{old('description')}}>
            <label for="amount">Amount:</label>
            <input type="number" step="0.1" class="form-control" name="amount" id="amount" placeholder="Type your amount" value={{old('amount')}}>
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
  </div>
@endsection