<?php

namespace Rupadana\FilamentCustomTables\Components;

use Filament\Tables\Columns\TextColumn;

class TimeAgoColumn extends TextColumn
{
    protected string $view = 'filament-custom-tables::time-ago-column';

    protected array $dateLabel = ['years', 'months', 'days', 'hours', 'minutes', 'seconds'];

    protected int $interval = 1000; // in ms

    /**
     * Get the value of dateLabel
     */
    public function getDateLabel()
    {
        return $this->dateLabel;
    }

    /**
     * Set the value of dateLabel
     *
     * @return  self
     */
    public function dateLabel(string $years = 'years', string $months = 'months', string $days = 'days', string $hours = 'hours', string $minutes = 'minutes', string $seconds = 'seconds')
    {
        $this->dateLabel = [
            $years,
            $months,
            $days,
            $hours,
            $minutes,
            $seconds,
        ];

        return $this;
    }

    /**
     * Get the value of interval
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Set the value of interval in miliseconds
     *
     * @return  self
     */
    public function interval(int $interval = 1000)
    {
        $this->interval = $interval;

        return $this;
    }
}
