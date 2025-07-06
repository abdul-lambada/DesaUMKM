<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\ComponentAttributeBag;
use App\View\SafeComponentAttributeBag;

class ComponentAttributeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Bind the safe component attribute bag
        $this->app->bind(ComponentAttributeBag::class, SafeComponentAttributeBag::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Override the __toString method to handle arrays safely
        ComponentAttributeBag::macro('safeToString', function () {
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
        });
    }
}
