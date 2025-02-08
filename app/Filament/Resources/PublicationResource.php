<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationResource\Pages;
use App\Filament\Resources\PublicationResource\RelationManagers;
use App\Models\Publication;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Media & Pulications';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Publication Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('file_path')
                            ->label('Upload Publication document')
                            ->required()
                            ->preserveFilenames()
                            ->acceptedFileTypes(['application/pdf']),
                    ])
                    ->columnSpan(2),

                Section::make('Other Details')
                    ->schema([
                        Forms\Components\Select::make('type')
                            ->label('Publication Type')
                            ->options([
                                'annual_report' => 'Annual Report',
                                'newsletter' => 'Newsletter',
                                'call_of_interest' => 'Call of Interest',
                                'press_release' => 'Press Release',
                                'others' => 'Others',
                            ])
                            ->native(false)
                            ->required(),
                        Forms\Components\DatePicker::make('published_at')
                            ->label('Publication Date')
                            ->native(false)
                            ->maxDate(now())
                            ->default(now())
                            ->required(),
                        Forms\Components\ToggleButtons::make('status')
                            ->options([
                                'published' => 'Published',
                                'draft' => 'Draft',
                            ])
                            ->inline()
                            ->required(),
                    ])
                    ->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
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
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit' => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
