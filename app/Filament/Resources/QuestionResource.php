<?php

namespace App\Filament\Resources;

use App\Enums\DifficultyLevel;
use App\Enums\ExamBody;
use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers;
use App\Filament\Resources\QuestionResource\Widgets\StatsOverview;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;
    protected static ?string $navigationLabel = 'Question Bank';
    protected static ?string $navigationGroup = 'Lessons';
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('subject_id')
                    ->relationship('subject', 'name')
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('source_exam')
                    ->label('Source')
                    ->options(ExamBody::class)
                    ->required(),
                Forms\Components\Select::make('source_year')
                    ->label('Year')
                    ->options([
                        2022 => 2022,
                        2021 => 2021,
                        2020 => 2020,
                        2019 => 2019,
                        2018 => 2018,
                        2017 => 2017,
                        2016 => 2016,
                        2015 => 2015,
                        2014 => 2014,
                        2013 => 2013,
                        2012 => 2012,
                        2011 => 2011,
                        2010 => 2010,
                        2009 => 2009,
                        2008 => 2008,
                    ])
                    ->required(),
                Forms\Components\Select::make('difficulty_level')
                    ->options(DifficultyLevel::class)
                    ->required(),
                Forms\Components\RichEditor::make('body')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Repeater::make('options')
                    ->addActionLabel('Add Option')
                    ->relationship()
                    ->schema([
                        Forms\Components\TextInput::make('body')
                            ->hiddenLabel()
                            ->required(),
                        Forms\Components\RichEditor::make('explanation'),
                        Forms\Components\Toggle::make('is_correct')
                            ->required(),
                    ])
                    ->grid(2)
                    ->defaultItems(4)
                    ->minItems(4)
                    ->maxItems(4)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('body')
                    ->label('Question')
                    ->html()
                    ->limit(),
                Tables\Columns\TextColumn::make('subject.name')
                    ->label('Subject')
                    ->badge(),
                Tables\Columns\TextColumn::make('source_exam')
                    ->label('Source'),
                Tables\Columns\TextColumn::make('source_year')
                    ->label('Year'),
                Tables\Columns\TextColumn::make('options_count')
                    ->label('Options')
                    ->counts('options'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('subject_id')
                    ->preload()
                    ->label('Subject'),
                Tables\Filters\SelectFilter::make('source_exam')
                    ->options(ExamBody::class)
                    ->label('Source'),
                Tables\Filters\SelectFilter::make('source_year')
                    ->options([
                        2022 => 2022,
                        2021 => 2021,
                        2020 => 2020,
                        2019 => 2019,
                        2018 => 2018,
                        2017 => 2017,
                        2016 => 2016,
                        2015 => 2015,
                        2014 => 2014,
                        2013 => 2013,
                        2012 => 2012,
                        2011 => 2011,
                        2010 => 2010,
                        2009 => 2009,
                        2008 => 2008,
                    ])
                    ->label('Year'),
            ])
            ->filtersFormColumns(3)
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

    public static function getWidgets(): array
    {
        return [
            StatsOverview::make()
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
