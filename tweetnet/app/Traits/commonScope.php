<?php

namespace App\Traits;

trait commonScope
{
    public function scopeWhereEqual($query, $value, $column)
    {
        if ($value !== '') {
            return $query->where($column, $value);
        }
    }

    public function scopeOrWhereEqual($query, $value, $column)
    {
        if ($value !== '') {
            return $query->orWhere($column, $value);
        }
    }

    public function scopeWherelesser($query, $value, $column)
    {
        if ($value !== '') {
            return $query->where($column, '<=', $value);
        }
    }

    public function scopeWhereUnder($query, $value, $column)
    {
        if ($value !== '') {
            return $query->where($column, '<', $value);
        }
    }

    public function scopeWhereGreater($query, $value, $column)
    {
        if ($value !== '') {
            return $query->where($column, '>=', $value);
        }
    }

    public function scopeWhereExcess($query, $value, $column)
    {
        if ($value !== '') {
            return $query->where($column, '>', $value);
        }
    }

    public function scopeWhereValBetween($query, array $values, $column)
    {
        if ($values !== '') {
            return $query->whereBetween($column, [$values[0], $values[1]]);
        }
    }

    public function scopeWhereStatusNull($query, $column)
    {
        return $query->whereNull($column);
    }

    public function scopeWhereStatusNotNull($query, $column)
    {
        return $query->whereNotNull($column);
    }

    public function scopeWhereValIn($query, $column, $values)
    {
        return $query->whereIn($column, $values);
    }

    public function scopeWhereValNotIn($query, $column, $values)
    {
        return $query->whereNotIn($column, $values);
    }


    // ===============================
    // Orderby
    // ===============================

    public function scopeOrderByASC($query, $column)
    {
        return $query->orderby($column, 'ASC');
    }

    public function scopeOrderByDESC($query, $column)
    {
        return $query->orderby($column, 'DESC');
    }


    // ===============================
    // Like
    // ===============================

    public function scopeWhereLike($query, $value, $column)
    {
        if ($value !== '') {
            return $query->where($column, 'like', '%' . $value . '%');
        }
    }

    public function scopeOrWhereLike($query, $value, $column)
    {
        if ($value !== '') {
            return $query->orWhere($column, 'like', '%' . $value . '%');
        }
    }
}
