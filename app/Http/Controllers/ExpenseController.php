<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function index(ExpenseReport $expenseReport)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function create(ExpenseReport $expenseReport)
    {
        return view('expense.create',[
            'report' => $expenseReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ExpenseReport $expenseReport)
    {
        $validData = $request->validate([
            'description' => 'required',
            'amount' => 'numeric|required|min:1'
        ]);

        $expense = new Expense();
        $expense->description = $validData['description'];
        $expense->amount = $validData['amount'];
        $expense->expense_report_id = $expenseReport->id;
        $expense->save();
        return redirect(route('expense_reports.show',$expenseReport));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport, Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseReport $expenseReport, Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpenseReport  $expenseReport
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseReport $expenseReport, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseReport $expenseReport, Expense $expense)
    {
        $expense->delete();
        return redirect(route('expense_reports.show',$expenseReport));
    }
    public function prueba($id)
    {
        return 'Funcionooo';
    }
}
