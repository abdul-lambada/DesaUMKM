<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MapPointResource\Pages;
use App\Filament\Resources\MapPointResource\RelationManagers;
use App\Models\MapPoint;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MapPointResource extends Resource
{
    protected static ?string $model = MapPoint::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('type')
                    ->options([
                        'umkm' => 'UMKM',
                        'wisata' => 'Wisata',
                        'layanan' => 'Layanan',
                        'event' => 'Event',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('lat')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('lng')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('related_id')
                    ->numeric()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->sortable(),
                Tables\Columns\TextColumn::make('lat')
                    ->sortable(),
                Tables\Columns\TextColumn::make('lng')
                    ->sortable(),
                Tables\Columns\TextColumn::make('related_id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'umkm' => 'UMKM',
                        'wisata' => 'Wisata',
                        'layanan' => 'Layanan',
                        'event' => 'Event',
                    ]),
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from'),
                        Forms\Components\DatePicker::make('created_until'),
                    ])
                    ->query(function ($query, $data) {
                        return $query
                            ->when($data['created_from'], fn($q, $date) => $q->whereDate('created_at', '>=', $date))
                            ->when($data['created_until'], fn($q, $date) => $q->whereDate('created_at', '<=', $date));
                    }),
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
            'index' => Pages\ListMapPoints::route('/'),
            'create' => Pages\CreateMapPoint::route('/create'),
            'edit' => Pages\EditMapPoint::route('/{record}/edit'),
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
