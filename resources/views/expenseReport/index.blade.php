@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col">
      <h1>Reports</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="/expense_reports/create">Create new expense report</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        @foreach($expenseReports as $expenseReport)
          <tr>
            <td>
              <a href="{{route('expense_reports.show',$expenseReport->id)}}">{{$expenseReport->title}}</a>
            </td>
            <td>
              <a href="{{route('expense_reports.edit',$expenseReport->id)}}">Edit</a>
            </td>
            <td>
              <a href="{{route('expense_reports.confirmDelete',$expenseReport->id)}}">Eliminar</a>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection