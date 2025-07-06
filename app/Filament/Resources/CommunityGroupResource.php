<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommunityGroupResource\Pages;
use App\Filament\Resources\CommunityGroupResource\RelationManagers;
use App\Models\CommunityGroup;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommunityGroupResource extends Resource
{
    protected static ?string $model = CommunityGroup::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('type')
                    ->options([
                        'karang_taruna' => 'Karang Taruna',
                        'pokdarwis' => 'Pokdarwis',
                        'kelompok_tani' => 'Kelompok Tani',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\TextInput::make('leader_name')
                    ->label('Leader Name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('logo')
                    ->label('Logo URL')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->sortable(),
                Tables\Columns\TextColumn::make('leader_name')
                    ->label('Leader Name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika perlu
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
            'index' => Pages\ListCommunityGroups::route('/'),
            'create' => Pages\CreateCommunityGroup::route('/create'),
            'edit' => Pages\EditCommunityGroup::route('/{record}/edit'),
        ];
    }    

    public static function canViewAny(): bool
    {
        return auth()->user()?->hasRole(['admin', 'kades']);
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasRole(['admin', 'kades']);
    }
}
