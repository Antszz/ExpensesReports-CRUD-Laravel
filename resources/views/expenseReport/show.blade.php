@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col">
      <h1>Report: {{$report->title}}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/expense_reports">Back</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="{{route('expense_reports.confirmEmail',$report->id)}}">Send Email</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h3>Details:</h3>
      <table class="table">
        @foreach($report->expenses as $expense)
        <tr>
          <td>{{$expense->description}}</td>
          <td>{{$expense->created_at->diffForHumans()}}</td>
          <td>{{$expense->amount}}</td>
          <td>
            <form method="POST" action="{{route('expense_reports.expenses.destroy',[$report,$expense])}}">
              @csrf
              @method('delete')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
      <a class="btn btn-primary" href="{{route('expense_reports.expenses.create',$report)}}">Add Expense</a>
    </div>
  </div>
@endsection