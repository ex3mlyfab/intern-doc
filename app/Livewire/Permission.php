<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Forms;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Illuminate\Contracts\View\View;

use Livewire\Component;

class Permission extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;


    public function table(Table $table): Table
    {
        return $table
            ->query(ModelsPermission::query())
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
                            ->label('Permission Name')
                            ->columnSpanFull(),
                        Forms\Components\Hidden::make('guard_name')
                            ->default('web')
                    ])
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->model(ModelsPermission::class)
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Permission Name')
                            ->columnSpanFull(),
                            Forms\Components\Hidden::make('guard_name')
                            ->default('web')
                    ])
                    ->successNotificationTitle('Permission created Successfully')
                    ]);
    }
    public function render()
    {
        return view('livewire.permission')->layout('layouts.app');
    }
}
