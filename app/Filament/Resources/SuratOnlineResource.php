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

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options([
                        'SKTM' => 'SKTM',
                        'Domisili' => 'Domisili',
                        'Usaha' => 'Usaha',
                        'Kematian' => 'Kematian',
                        'Nikah' => 'Nikah',
                    ])
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'diajukan' => 'Diajukan',
                        'diproses' => 'Diproses',
                        'ditolak' => 'Ditolak',
                        'selesai' => 'Selesai',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('file_path')
                    ->label('File Path')
                    ->nullable(),
                Forms\Components\Textarea::make('keterangan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'SKTM' => 'SKTM',
                        'Domisili' => 'Domisili',
                        'Usaha' => 'Usaha',
                        'Kematian' => 'Kematian',
                        'Nikah' => 'Nikah',
                    ]),
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'diajukan' => 'Diajukan',
                        'diproses' => 'Diproses',
                        'ditolak' => 'Ditolak',
                        'selesai' => 'Selesai',
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
