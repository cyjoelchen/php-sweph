<?php
declare(strict_types=1);

/**
 * Class Formatter.
 *
 * Helper methods for making test expectations more predictable.
 */
class Format
{
    /**
     * Default precision value to use for truncating floating-point values.
     *
     * @const int
     */
    const PRECISION = 6;

    /**
     * Convert a Julian datetime value into a human-readable datetime string.
     *
     * @param float $jdt Julian datetime value.
     * @return string
     */
    public static function asUtc(float $jdt): string
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
                ? sprintf('%f %s', Format::truncate($value, Format::PRECISION), Format::asUtc($value))
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
            switch (gettype($value)) {
                case 'double':
                    return Format::truncate($value, $precision);

                case 'array':
                    return Format::round($value, $precision);

                default:
                    return $value;
            }
        }, $input);
    }

    /**
     * Convert input float to a string, then truncate the string to `$precision`.
     * This method is preferred to `round()`ing the value which can change the last digit.
     *
     * @param float $value Value to truncate.
     * @param int $precision Amount of non-rounded precision to retain.
     * @return float
     */
    public static function truncate(float $value, int $precision = Format::PRECISION): float
    {
        $maxPrecision = (int)ini_get('precision');
        $string = (string)$value;

        # Handle scientific notation.
        if (stripos($string, 'E') !== false) {
            $string = number_format($value, $maxPrecision, '.', null);
            $string = rtrim($string, '0');

            if ($string === '0.') {
                $string = '0.0';
            }
        }

        $len = strlen($string);

        if (strchr($string, '.') !== false) {
            $len--;
        }

        if ($len >= $maxPrecision) {
            $string = sprintf("%.{$maxPrecision}f", $value);
        }

        // there were no decimals, put a zero back on the end
        if (strrchr($string, '.') === false) {
            $string .= '.0';
        }

        $value = explode('.', $string);

        return (float)sprintf('%s.%s', $value[0], substr($value[1], 0, $precision));
    }
}
