<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Livewire\Component;

class ListUser extends Component implements HasTable, HasForms
{

    use InteractsWithForms, InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
                ->query(User::query())
                ->columns([
                    Tables\Columns\TextColumn::make('fullname'),
                    Tables\Columns\TextColumn::make('department_name')
                        ->label('Department'),
                    Tables\Columns\TextColumn::make('admin.phone')
                        ->label('Phone No'),
                    Tables\Columns\TextColumn::make('email')
                        ->label('Email Address'),
                    Tables\Columns\TextColumn::make('roles.name')
                        ->label('Assigned Role')
                        ->badge(),
                ])
                ->actions([
                    Tables\Actions\EditAction::make()
                        ->url(fn(User $record) => route('user.edit', $record))
                ])
                ->headerActions([
                    Tables\Actions\CreateAction::make()
                    ->url(fn() => route('user.create'))
                ]);
    }


    public function render()
    {
        return view('livewire.admin.list-user')->layout('layouts.app');
    }
}
