<?php

/**
 * Class Formatter.
 *
 * Helper methods for making test expectations more predictable.
 */
class Format
{
    /**
     * Default precision value to use for rounding.
     *
     * @const int
     */
    public const PRECISION = 6;

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
     * Convert an array of Julian datetime values into their human-readable
     * datetime string equivalents, returning a rounded version of the
     * original JDT value as well.
     *
     * @param array $input Input array.
     * @return array
     */
    public static function jdtWithUtc(array $input): array
    {
        return array_map(function ($value) {
            return is_double($value)
                ? sprintf('%f %s', round($value, Format::PRECISION), Format::date($value))
                : $value;
        }, $input);
    }

    /**
     * Round all decimal values in an array to specified precision.
     *
     * @param array $input Input array.
     * @param int $precision Number of decimal places to keep.
     * @return array
     */
    public static function round(array $input, int $precision = Format::PRECISION): array
    {
        return array_map(function ($value) use ($precision) {
            return is_double($value) ? round($value, $precision) : $value;
        }, $input);
    }
}
