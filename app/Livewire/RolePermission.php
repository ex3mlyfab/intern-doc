<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RolePermission extends Component implements HasTable, HasForms
{
    use InteractsWithForms, InteractsWithTable;

    public function table(Table $tables) : Table
    {
        return $tables
            ->query(Role::query())
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('permissions.name')
                ->badge()
                ->separator(',')

            ])
            ->headerActions([
               Tables\Actions\CreateAction::make()
               ->url(fn() => route('role.create'))

            ]);
    }

    public function render()
    {
        
        return view('livewire.role-permission')->layout('layouts.app');
    }
}
