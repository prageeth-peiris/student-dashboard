<?php

namespace App\Filament\Resources\MarkResource\Pages;

use App\Filament\Resources\MarkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListMarks extends ListRecords
{
    protected static string $resource = MarkResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }

    protected function getTableQuery(): ?Builder
    {

            $student_id = auth()->user()->student->id ?? -1;


        return static::getResource()::getEloquentQuery()->where('student_id', $student_id);
    }
}
