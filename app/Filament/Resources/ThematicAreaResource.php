<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThematicAreaResource\Pages;
use App\Filament\Resources\ThematicAreaResource\RelationManagers;
use App\Models\ThematicArea;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Guava\FilamentIconPicker\Tables\IconColumn;
use Filament\Tables\Table;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ThematicAreaResource extends Resource
{
    protected static ?string $model = ThematicArea::class;

    protected static ?string $navigationIcon = 'heroicon-c-eye-dropper';
    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->columnSpanFull()
                            ->required(),
                        IconPicker::make('icon')
                            ->label('Select Icon')
                            ->columns(3)
                            ->preload()
                            ->sets(['heroicons']),
                        Forms\Components\RichEditor::make('description')
                            ->columnSpanFull(),
                    ])
                    ->columnSpan(2),
                Section::make('Details')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->label('Featured Image')
                            ->imageEditor()
                            ->preserveFilenames(),
                        Forms\Components\Toggle::make('status')
                            ->required(),
                    ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                IconColumn::make('icon')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListThematicAreas::route('/'),
            'create' => Pages\CreateThematicArea::route('/create'),
            'edit' => Pages\EditThematicArea::route('/{record}/edit'),
        ];
    }
}
