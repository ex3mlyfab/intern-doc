<?php

namespace App\Livewire;

use App\Models\Department as ModelsDepartment;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Forms;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;

class Department extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(ModelsDepartment::query())
            ->columns([
                Tables\Columns\TextColumn::make('index')
                    ->rowIndex(isFromZero: false),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(isIndividual: true, isGlobal: false),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Department Name')
                            ->columnSpanFull()
                    ])
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->model(ModelsDepartment::class)
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Department Name')
                            ->columnSpanFull()
                    ])
                    ->successNotificationTitle('Department created Successfully')
                    ]);
    }

    public function render(): View
    {
        return view('livewire.department')->layout('layouts.app');
    }
}
