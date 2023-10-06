<?php

namespace Rupadana\FilamentCustomTables\Components;

use Filament\Tables\Columns\TextColumn;

class TimeAgoColumn extends TextColumn
{
    protected string $view = 'filament-custom-tables::time-ago-column';

    protected array $dateLabel = ['years', 'months', 'days', 'hours', 'minutes', 'seconds'];

    protected int $interval = 1000; // in ms

    protected string $prefixText = '';

    protected string $suffixText = '';

    /**
     * Get the value of dateLabel
     */
    public function getDateLabel(): array
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
    public function getInterval(): int
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

    /**
     * Get the value of prefix
     */
    public function getPrefixText(): string
    {
        return $this->prefixText;
    }

    /**
     * Set the value of prefix
     *
     * @return  self
     */
    public function prefixText(string $prefix)
    {
        $this->prefixText = $prefix;

        return $this;
    }

    /**
     * Get the value of suffix
     */
    public function getSuffixText(): string
    {
        return $this->suffixText;
    }

    /**
     * Set the value of suffix
     *
     * @return  self
     */
    public function suffixText(string $suffix)
    {
        $this->suffixText = $suffix;

        return $this;
    }
}
