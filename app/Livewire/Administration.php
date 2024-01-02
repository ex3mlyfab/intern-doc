<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Livewire\Component;

class Administration extends Component implements HasTable, HasForms
{
    use InteractsWithTable, InteractsWithForms;


    public function table(Table $table): Table
    {
        return $table
        ->query(User::query())
        ->columns([
            Tables\Columns\TextColumn::make('fullname'),
            Tables\Columns\TexColumn::make('admin.department.name'),
            Tables\Columns\TextColumn::make('admin.phone')

        ]);
    }

    public function render()
    {
        return view('livewire.administration');
    }
}
