<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Models\Job;
use App\Models\JobCategory;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-s-briefcase';

    protected static ?string $navigationGroup = 'Jobs &Opportunities';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Job Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Job Title')
                            ->required(),
                        Forms\Components\Textarea::make('short_description')
                            ->required()
                            ->rows(3)
                            ->label('ShortDescription')
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->label('Description')
                            ->columnSpanFull(),
                        Forms\Components\DatePicker::make('deadline')
                            ->label('Deadline')
                            ->native(false)
                            ->required(),
                        Forms\Components\FileUpload::make('document_path')
                            ->label('Upload Document (Optional)')
                            ->preserveFilenames()
                            ->acceptedFileTypes(['application/pdf']),
                    ])
                    ->columnSpan(2),
                Section::make('Other Details')
                    ->schema([

                        Forms\Components\TextInput::make('location')
                            ->label('Location')
                            ->required(),
                        Forms\Components\TextInput::make('salary')
                            ->label('Salary')
                            ->prefix('UGX')
                            ->required(),
                        Forms\Components\Select::make('job_category_id')
                            ->required()
                            ->label('Select Category')
                            ->native(false)
                            ->options(
                                JobCategory::all()->pluck('title', 'id')
                            ),
                        Forms\Components\Select::make('job_type')
                            ->required()
                            ->options([
                                'full-time' => 'Full Time',
                                'part-time' => 'Part Time',
                                'contract' => 'Contract',
                                'internship' => 'Internship',
                                'volunteer' => 'Volunteer',
                            ])
                            ->native(false),
                        Forms\Components\ToggleButtons::make('status')
                            ->options([
                                'published' => 'Published',
                                'draft' => 'Draft',
                                'closed' => 'Closed',
                            ])
                            ->inline()
                            ->required(),
                        Forms\Components\DatePicker::make('published_date')
                            ->label('Published Date')
                            ->native(false)
                            ->maxDate(now()->toDateString())
                            ->required(),
                    ])
                    ->columnSpan(1),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jobCategory.title')
                    ->label('Category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deadline')
                    ->date()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }
}
