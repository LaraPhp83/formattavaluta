<?php

namespace AlessandroMineo\FormattaValuta;

use Illuminate\Support\ServiceProvider;

class FormatProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        
         $this->loadHelpers();
    }


    private function loadHelpers()
    {
        // Ottieni il percorso alla cartella degli helper
        $helpersPath = __DIR__ . '/helper';

        // Includi tutti i file PHP nella cartella degli helper
        foreach (glob("{$helpersPath}/*.php") as $file) {
            require_once $file;
        }
    }
}







