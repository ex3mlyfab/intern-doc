<?php

namespace App\Exports;

use App\Models\MonthlyReport;
use Illuminate\Database\Query\Builder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class MonthlyReportExport implements FromQuery
{
    use Exportable;

    public function __construct(
        public object $month)
    {

    }
    public function headings(): array
    {
        return [
            '#',
            'Full Name',
            'Designation',
            'Bank',
            'Account Number',
            'Response',
            'Comment',
            'Supervisor Name',

        ];
    }

    public function map($transaction): array
    {
        return [
            $transaction->id,
            $transaction->doctor->name,
            $transaction->doctor->designation,
            $transaction->doctor->bank,
            $transaction->doctor->account_number,
            $transaction->response,
            $transaction->comment,
            $transaction->,
            $transaction->supervisor->fullname
        ];
    }

    public function fields(): array
    {
        return [
            'id',
            'description',
            'amount',
            'user',
            'created_at'
        ];
    }


    public function query()
    {
        return MonthlyReport::query(function(Builder $query){
            $query->whereMonth('assessment_period','=', $this->month->format('m'))->whereYear('assessment_period','=', $this->month->format('y'));
        });
    }
}
