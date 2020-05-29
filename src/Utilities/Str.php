<?php
namespace Jtl\Connector\Core\Utilities;

use Jawira\CaseConverter\Convert;

class Str
{
    /**
     * @param string $string
     * @return string
     * @throws \Exception
     */
    public static function toCamelCase(string $string): string
    {
        return (new Convert($string))->toCamel();
    }

    /**
     * @param string $string
     * @return string
     * @throws \Exception
     */
    public static function toPascalCase(string $string): string
    {
        return (new Convert($string))->toPascal();
    }

    /**
     * @param string $string
     * @return string
     * @throws \Exception
     */
    public static function toSnakeCase(string $string): string
    {
        return (new Convert($string))->toSnake();
    }
}
