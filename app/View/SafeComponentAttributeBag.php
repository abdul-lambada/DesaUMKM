<?php

namespace App\View;

use Illuminate\View\ComponentAttributeBag;

class SafeComponentAttributeBag extends ComponentAttributeBag
{
    /**
     * Implode the attributes into a single HTML ready string.
     *
     * @return string
     */
    public function __toString()
    {
        $string = '';

        foreach ($this->attributes as $key => $value) {
            if ($value === false || is_null($value)) {
                continue;
            }

            if ($value === true) {
                $value = $key;
            }

            // Handle arrays safely
            if (is_array($value)) {
                $value = json_encode($value);
            }

            // Ensure value is string before trimming
            if (!is_string($value)) {
                $value = (string) $value;
            }

            $string .= ' '.$key.'="'.str_replace('"', '\\"', trim($value)).'"';
        }

        return trim($string);
    }
} 