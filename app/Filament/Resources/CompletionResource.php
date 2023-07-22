<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompletionResource\Pages;
use App\Filament\Resources\CompletionResource\RelationManagers;
use App\Models\Completion;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompletionResource extends Resource
{
    protected static ?string $model = Completion::class;

    protected static ?string $modelLabel = "Completion 日志";
    protected static ?string $navigationGroup = 'AI';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required(),
                Forms\Components\Textarea::make('source')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\Textarea::make('target')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('token')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->searchable()
                   ,
                Tables\Columns\TextColumn::make('source'),
                Tables\Columns\TextColumn::make('token'),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCompletions::route('/'),
        ];
    }
}
