<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UmkmResource\Pages;
use App\Filament\Resources\UmkmResource\RelationManagers;
use App\Models\Umkm;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UmkmResource extends Resource
{
    protected static ?string $model = Umkm::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    
    protected static ?string $navigationGroup = 'UMKM Management';
    
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('category')
                            ->options([
                                'makanan' => 'Makanan',
                                'minuman' => 'Minuman',
                                'kerajinan' => 'Kerajinan',
                                'fashion' => 'Fashion',
                                'jasa' => 'Jasa',
                                'lainnya' => 'Lainnya',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('nib')
                            ->label('NIB')
                            ->maxLength(50),
                        Forms\Components\Select::make('legal_status')
                            ->options([
                                'terdaftar' => 'Terdaftar',
                                'berizin' => 'Berizin',
                                'belum_terdaftar' => 'Belum Terdaftar',
                            ])
                            ->required(),
                        Forms\Components\Textarea::make('address')
                            ->required()
                            ->maxLength(500),
                        Forms\Components\Textarea::make('description')
                            ->maxLength(1000),
                        Forms\Components\FileUpload::make('logo')
                            ->image()
                            ->directory('umkm-logos'),
                        Forms\Components\Select::make('status')
                            ->options([
                                'active' => 'Aktif',
                                'inactive' => 'Tidak Aktif',
                                'pending' => 'Menunggu',
                            ])
                            ->default('active')
                            ->required(),
                    ])
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('nib')
                    ->label('NIB')
                    ->searchable(),
                Tables\Columns\TextColumn::make('legal_status')
                    ->badge()
                    ->color('warning'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success',
                        'inactive' => 'danger',
                        'pending' => 'warning',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'makanan' => 'Makanan',
                        'minuman' => 'Minuman',
                        'kerajinan' => 'Kerajinan',
                        'fashion' => 'Fashion',
                        'jasa' => 'Jasa',
                        'lainnya' => 'Lainnya',
                    ]),
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'active' => 'Aktif',
                        'inactive' => 'Tidak Aktif',
                        'pending' => 'Menunggu',
                    ]),
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from'),
                        Forms\Components\DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListUmkms::route('/'),
            'create' => Pages\CreateUmkm::route('/create'),
            'edit' => Pages\EditUmkm::route('/{record}/edit'),
        ];
    }
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with('user');
    }

    public static function canViewAny(): bool
    {
        return auth()->user()?->hasRole(['admin', 'umkm']);
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasRole(['admin', 'umkm']);
    }
}
