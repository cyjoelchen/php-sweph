<?php

/**
 * Class Formatter.
 *
 * Helper methods for making test expectations more predictable.
 */
class Format
{
    /**
     * Round all decimal values in an array to specified precision.
     *
     * @param array $input Input array.
     * @param int $precision Number of decimal places to keep.
     *
     * @return array
     */
    public static function round(array $input, int $precision = 6): array
    {
        return array_map(function ($value) use ($precision) {
            return is_double($value) ? round($value, $precision) : $value;
        }, $input);
    }
}
