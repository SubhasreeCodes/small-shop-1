<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

// Table Columns
use Filament\Tables\Columns\TextColumn;

// Import Model
use App\Models\Order;

class LatestOrders extends TableWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(Order::limit(5)->latest())
            ->columns([
                TextColumn::make('client.email')
                    ->translateLabel(),
                TextColumn::make('total_amount')
                    ->translateLabel()
                    ->money('INR'),
                TextColumn::make('order_date')
                    ->translateLabel()
                    ->dateTime('d/M/Y h:i A'),
            ]);
    }
}
