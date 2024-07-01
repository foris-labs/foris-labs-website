<?php

namespace App\Filament\Resources\NoteTopicGroupResource\Pages;

use App\Enums\NodeType;
use App\Filament\Resources\NoteTopicGroupResource;
use App\Models\NotePage;
use App\Models\NoteTopic;
use App\Models\NoteTopicGroup;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\Locked;

class ManageTopicPages extends Page implements Tables\Contracts\HasTable
{
    use InteractsWithRecord;
    use Tables\Concerns\InteractsWithTable {
        makeTable as makeBaseTable;
    }

    protected static string $resource = NoteTopicGroupResource::class;

    protected static string $view = 'filament.resources.note-topic-group-resource.pages.manage-topic-pages';

    #[Locked]
    public Model|int|string|null $parentRecord;

    public function mount(int|string $record, int|string $topic): void
    {
        $this->record = NoteTopic::where('id', $topic)
            ->select(['id', 'title'])
            ->first();

        $this->parentRecord = NoteTopicGroup::where('id', $record)
            ->select(['id', 'title'])
            ->first();
    }

    public function getTitle(): string|Htmlable
    {
        return "Pages -  {$this->record->title}";
    }

    protected function makeTable(): Table
    {
        return $this->makeBaseTable()
            ->relationship(fn() => $this->record->pages())
            ->recordAction(function (Model $record, Table $table): ?string {
                foreach (['view', 'edit'] as $action) {
                    $action = $table->getAction($action);

                    if (!$action) {
                        continue;
                    }

                    $action->record($record);

                    if ($action->isHidden()) {
                        continue;
                    }

                    if ($action->getUrl()) {
                        continue;
                    }

                    return $action->getName();
                }

                return null;
            });
    }

    public function repeaterForm(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Repeater::make('nodes')
                    ->relationship()
                    ->orderColumn('order')
                    ->schema([
                        Forms\Components\Select::make('type')
                            ->live()
                            ->options(NodeType::class)
                            ->required(),
                        Forms\Components\TextInput::make('header')
                            ->required()
                            ->live()
                            ->visible(fn(Get $get): bool => $get('type') === NodeType::TextWithHeader->value)
                            ->maxLength(255),
                        Forms\Components\TextArea::make('content')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('image_url')
                            ->required()
                            ->live()
                            ->visible(fn(Get $get): bool => $get('type') === NodeType::Image->value),
                    ])
                    ->mutateRelationshipDataBeforeFillUsing(function (array $data): array {
                        // The nodes table only contains a type field and a body field,
                        // so we need to destructure the body field and make it's contents go into data
                        $savedData['type'] = $data['type'];

                        foreach ($data['body'] as $key => $value) {
                            $savedData[$key] = $value;
                        }

                        return $savedData;
                    })
                    ->mutateRelationshipDataBeforeSaveUsing(
                        fn(array $data): array => self::mutateNodesBeforeSaving($data)
                    )
                    ->mutateRelationshipDataBeforeCreateUsing(
                        fn(array $data): array => self::mutateNodesBeforeSaving($data)
                    )
                    ->columnSpanFull()
            ]);
    }

    public static function mutateNodesBeforeSaving(array $data): array
    {
        $newData['type'] = $data['type'];
        unset($data['type']);

        foreach ($data as $key => $value) {
            $newData['body'][$key] = $value;
        }

        return $newData;
    }

    public function table(Table $table): Table
    {
        return $table
            ->defaultSort('order')
            ->reorderable('order')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('nodes_count')
                    ->label('Nodes')
                    ->counts('nodes')
            ])
            ->actions([
                Tables\Actions\EditAction::make('edit')
                    ->form(fn($form) => $this->repeaterForm($form))
                    ->modalWidth(MaxWidth::Large)
                    ->successNotificationTitle('Page Updated Successfully')
                    ->slideOver(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make('Create Page')
                ->model(NotePage::class)
                ->modalWidth(MaxWidth::Large)
                ->form([
                    Forms\Components\Hidden::make('topic_id')
                        ->default($this->record->id),
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                ])
                ->successNotificationTitle('Page Created Successfully')
                ->label('Create Page')
                ->icon('heroicon-o-plus'),
        ];
    }

    public function getBreadcrumbs(): array
    {
        $resource = static::getResource();

        return [
            $resource::getUrl() => $resource::getBreadcrumb(),
            $resource::getUrl('edit', ['record' => $this->parentRecord->id]) => $this->parentRecord->title,
            $resource::getUrl('edit', ['record' => $this->parentRecord->id]) . '#' => $this->record->title,
            'Pages'
        ];
    }
}
