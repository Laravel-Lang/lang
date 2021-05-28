<?php

namespace LaravelLang\Lang\Helpers;

use Helldar\Support\Facades\Helpers\Str;

class Arr
{
    public function flatten(array $array, string|int $key = null): array
    {
        $result = [];

        foreach ($array as $index => $value) {
            if (! is_array($value)) {
                $new_key = $key ? "$key.$index" : $index;

                $result[$new_key] = $value;

                continue;
            }

            $values = $this->flatten($value, $index);

            $result = array_merge($result, $values);
        }

        return $result;
    }
}
