<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

// Table Columns
use Filament\Tables\Columns\TextColumn;

// Import Model
use App\Models\User;

class LatestClients extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
        ->query(User::limit(5)->latest())
        ->columns([
            TextColumn::make('email')
                ->translateLabel(),

            TextColumn::make('created_at')
                ->translateLabel()
                ->dateTime(),
        ]);
    }
}
