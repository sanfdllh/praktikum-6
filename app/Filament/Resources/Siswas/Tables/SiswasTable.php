<?php

namespace App\Filament\Resources\Siswas\Tables;

use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiswasTable
{
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable(),

                TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                BadgeColumn::make('jenis_kelamin')
                    ->label('JK')
                    ->colors([
                        'info' => ['L'],
                        'success' => ['P'],
                    ])
                    ->formatStateUsing(fn ($state) => $state === 'L' ? 'Laki-laki' : 'Perempuan'),

                TextColumn::make('kelas')
                    ->label('Kelas')
                    ->badge(),

                TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->date('d M Y'),
            ])
            ->defaultSort('nama');
    }
}
