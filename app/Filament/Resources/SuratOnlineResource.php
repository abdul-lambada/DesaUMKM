<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratOnlineResource\Pages;
use App\Filament\Resources\SuratOnlineResource\RelationManagers;
use App\Models\SuratOnline;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratOnlineResource extends Resource
{
    protected static ?string $model = SuratOnline::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListSuratOnlines::route('/'),
            'create' => Pages\CreateSuratOnline::route('/create'),
            'edit' => Pages\EditSuratOnline::route('/{record}/edit'),
        ];
    }    

    public static function canViewAny(): bool
    {
        return auth()->user()?->hasRole(['admin', 'kades', 'warga']);
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasRole(['admin', 'kades', 'warga']);
    }
}
