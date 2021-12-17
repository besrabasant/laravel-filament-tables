<?php

namespace Filament\Tables\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait CanSortRecords
{
    public array $enabledSorts = [];

    public $tableSortColumn = null;

    public $tableSortDirection = null;

    public function sortTable(?string $column = null): void
    {
        // @deprecated
        if ($this->hasEnabledSorts() && $this->hasSortEnabled($column)) {
            if ($this->isSortedAsc($column)) {
                $this->enableDescSort($column);
            } elseif ($this->isSortedDesc($column)) {
                $this->clearSort($column);
            } else {
                $this->enableAscSort($column);
            }
        } else {
            $this->enableAscSort($column);
        }

//        $this->clearSorts();


        if ($column === $this->tableSortColumn) {
            if ($this->tableSortDirection === 'asc') {
                $direction = 'desc';
            } elseif ($this->tableSortDirection === 'desc') {
                $column = null;
                $direction = null;
            } else {
                $direction = 'asc';
            }
        } else {
            $direction = 'asc';
        }

        $this->tableSortColumn = $column;
        $this->tableSortDirection = $direction;

        $this->updatedTableSort();
    }

    public function getTableSortColumn(): ?string
    {
        return $this->tableSortColumn;
    }

    public function getTableSortDirection(): ?string
    {
        return $this->tableSortDirection;
    }

    public function getColumnSortDirection(?string $column): ?string
    {
        return $this->getSort($column);
    }

    protected function getDefaultTableSortColumn(): ?string
    {
        return null;
    }

    protected function getDefaultTableSortDirection(): ?string
    {
        return null;
    }

    public function updatedTableSort(): void
    {
        $this->resetPage();
    }

    protected function applySortingToTableQuery(Builder $query): Builder
    {
//        @deprecated
//
//        $columnName = $this->tableSortColumn;
//
//        if (!$columnName) {
//            return $query;
//        }
//
//        $column = $this->getCachedTableColumn($columnName);
//
//        if (!$column) {
//            return $query;
//        }
//
//        $column->applySort($query, $this->tableSortDirection ?? 'asc');
//
//        if (!$this->hasEnabledSorts()) {
//            return $query;
//        }

        foreach ($this->getEnabledSorts() as $column => $sortDirection) {
            if (!in_array($sortDirection, ['asc', 'desc'])) {
                $sortDirection = 'desc';
            }

            if (is_null($column = $this->getCachedTableColumn($column))) {
                continue;
            }

            if (!$column->isSortable()) {
                continue;
            }

            if ($column->hasSortCallback()) {
                $query = app()->call($column->getSortCallback(), ['query' => $query, 'direction' => $sortDirection]);
            }
//            else {
//                $query->orderBy($column, $sortDirection);
//            }

            $column->applySort($query, $sortDirection ?? 'asc');
        }


        return $query;
    }

    /**
     * @param string $column
     * @param string $direction
     *
     * @return void
     */
    public function enableSort(string $column, string $direction): void
    {
        $this->enabledSorts[$column] = $direction;
    }

    /**
     * @return bool
     */
    public function hasEnabledSorts(): bool
    {
        return count($this->getEnabledSorts());
    }

    /**
     * @param string|null $column
     *
     * @return bool
     */
    public function hasSortEnabled(?string $column): bool
    {
        return !is_null($column) && $this->getSort($column) !== null;
    }

    /**
     * @param string $column
     *
     * @return string|null
     */
    public function getSort(string $column): ?string
    {
        return $this->enabledSorts[$column] ?? null;
    }

    /**
     * @return array
     */
    public
    function getEnabledSorts(): array
    {
        return $this->enabledSorts;
    }

    /**
     * @param string|null $column
     *
     * @return bool
     */
    public function isSortedAsc(?string $column): bool
    {
        return !is_null($column) && $this->getSort($column) === 'asc';
    }

    /**
     * @param string|null $column
     *
     * @return bool
     */
    public function isSortedDesc(?string $column): bool
    {
        return !is_null($column) && $this->getSort($column) === 'desc';
    }

    /**
     * @param string|null $column
     *
     * @return void
     */
    public function enableAscSort(?string $column): void
    {
        !is_null($column) && $this->enableSort($column, 'asc');
    }

    /**
     * @param string|null $column
     *
     * @return void
     */
    public function enableDescSort(?string $column): void
    {
        !is_null($column) && $this->enableSort($column, 'desc');
    }

    /**
     * @param string|null $column
     */
    public function clearSort(?string $column): void
    {
        unset($this->enabledSorts[$column]);
    }

    /**
     * Clear the enabledSorts array
     */
    public function clearSorts(): void
    {
        $this->enabledSorts = [];
    }

}
