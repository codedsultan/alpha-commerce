<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait EnumTrait
{
    public static function values(): array
    {
        return self::cases();
    }

    public static function asOptions()
    {
        return collect(self::labels())
            ->map(fn ($value, $key) => ['label' => $value, 'value' => $key])
            ->values()
            ->toArray();
    }

    public static function getOption($value)
    {
        return collect(self::asOptions())->firstWhere('value', $value);
    }

      /**
     * Show the enum values in title case
     *
     * @return array
     */
    public static function titleCaseOptions()
    {
        $values = array();

        /** @psalm-var T $value */
        foreach (self::values() as $key => $value) {
            $values[$value] = Str::title(Str::of($value)->replace('_', ' '));
        }

        return $values;
    }

    /**
     * Get the title case of the value
     *
     * @return string
     */
    public function titleCase()
    {
        return Str::title(Str::of($this->value)->replace('_', ' '));
    }

    /**
     * Show the enum values in title case
     *
     * @return array
     */
    public static function filterOptions()
    {
        $values = array();

        /** @psalm-var T $value */
        foreach (static::toArray() as $key => $value) {
            $values[Str::title(Str::of($value)->replace('_', ' '))] = $value;
        }

        return $values;
    }

    /**
     * Generate select option for frontend
     *
     * @return array
     */
    public static function toSelectOptions($except = [])
    {
        $values = [];
        foreach (static::asOptions() as $value) {
            if (!in_array($value, $except)) {
                $row = [];
                $row['value'] = $value;
                $row['name']  = Str::title(Str::of($value)->replace('_', ' '));
                array_push($values, $row);
            }
        }

        return $values;
    }
}
