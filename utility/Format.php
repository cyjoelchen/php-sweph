<?php

/**
 * Class Formatter.
 *
 * Helper methods for making test expectations more predictable.
 */
class Format
{
    /**
     * Convert a Julian datetime value into a human-readable datetime string.
     *
     * @param float $jdt Julian datetime value.
     * @return string
     */
    public static function date(float $jdt): string
    {
        $r = swe_jdut1_to_utc($jdt, SE_GREG_CAL);
        $sec = floor($r['sec']);

        return sprintf(
            '%s %s %s  %s:%s:%s UT',
            $r['year'],
            $r['month'],
            $r['day'],
            $r['hour'],
            $r['min'],
            $sec
        );
    }

    /**
     * Round all decimal values in an array to specified precision.
     *
     * @param array $input Input array.
     * @param int $precision Number of decimal places to keep.
     * @return array
     */
    public static function round(array $input, int $precision = 6): array
    {
        return array_map(function ($value) use ($precision) {
            return is_double($value) ? round($value, $precision) : $value;
        }, $input);
    }
}
