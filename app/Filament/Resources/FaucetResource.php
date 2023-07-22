<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaucetResource\Pages;
use App\Filament\Resources\FaucetResource\RelationManagers;
use App\Models\Faucet;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FaucetResource extends Resource
{
    protected static ?string $model = Faucet::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $modelLabel = "Faucet 签到日志";
    protected static ?string $navigationGroup = 'AI';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('created_at')->label("签到时间")
                    ->dateTime(),

            ])
            ->filters([
                //
            ])
            ->actions([
               Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFaucets::route('/'),
        ];
    }
}
