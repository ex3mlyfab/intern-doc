<?php

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueTogether implements Rule
{
    protected $table;
    protected $columns;

    public function __construct($table, $columns)
    {
        $this->table = $table;
        $this->columns = $columns;
    }

    public function passes($attribute, $value)
    {
        $count = DB::table($this->table)
            ->where($this->columns[0], $value[0])
            ->where($this->columns[1], $value[1])
            ->count();

        return $count === 0;
    }

    public function message()
    {
        return 'The :attribute has already been taken.';
    }
}
