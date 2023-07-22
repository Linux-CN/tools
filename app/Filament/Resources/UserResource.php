<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Common';
    protected static ?string $modelLabel = "用户";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('llm_tokens')
                    ->required(),
                Forms\Components\Toggle::make('is_super_user')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('profilePhotoUrl')->label("头像"),
                Tables\Columns\TextColumn::make('name')->label("昵称"),
                Tables\Columns\TextColumn::make('email')->label("邮箱"),
                Tables\Columns\IconColumn::make('is_super_user')->boolean()->sortable()->label("是否是超管"),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->date()->label("邮箱验证时间"),
                Tables\Columns\TextColumn::make('two_factor_confirmed_at')
                    ->date()->label("两步验证时间"),
                Tables\Columns\TextColumn::make('currentConnectedAccount.provider')->label("登录平台"),

                Tables\Columns\TextColumn::make('created_at')
                    ->date()->label("注册时间"),
                Tables\Columns\TextColumn::make('updated_at')
                    ->date(),
                Tables\Columns\TextColumn::make('llm_tokens')->label("Credit"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
