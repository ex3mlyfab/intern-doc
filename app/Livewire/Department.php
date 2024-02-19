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
use Illuminate\Database\Eloquent\Model;

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
                    ->label('S/N')
                    ->rowIndex(isFromZero: false),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('user.fullname')
                    ->label('Supervisor')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->slideOver()
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Department Name'),
                        Forms\Components\Select::make('type')
                            ->required()
                            ->options([
                                'Intern' => 'Intern',
                                'Admin' => 'Admin',
                            ]),
                        Forms\Components\Select::make('user_id')
                            ->relationship('user')
                            ->label('Select Supervisor')
                            ->searchable(['first_name', 'surname', 'middle_name'])
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->first_name} {$record->middle_name} {$record->surname}")
                            ->preload()
                    ])
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->model(ModelsDepartment::class)
                    ->slideOver()
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->unique()
                            ->label('Department Name'),
                        Forms\Components\Select::make('type')
                            ->required()
                            ->options([
                                'Intern' => 'Intern',
                                'Admin' => 'Admin',
                            ]),
                        Forms\Components\Select::make('user_id')
                            ->relationship('user')
                            ->label('Select Supervisor')
                            ->searchable(['first_name', 'surname', 'middle_name'])
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->first_name} {$record->middle_name} {$record->surname}")
                            ->preload()

                    ])
                    ->successNotificationTitle('Department created Successfully')
                    ]);
    }

    public function render(): View
    {
        return view('livewire.department')->layout('layouts.app');
    }
}
