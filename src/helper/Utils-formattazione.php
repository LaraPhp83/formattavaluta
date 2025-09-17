<?php

if (!function_exists('deformattaImporto')) {
    function deformattaImporto($importo)
    {
        //tolgo il simbolo dell'euro e lo spazio
        $importoSenzaEuro = trim(str_replace('€', '', $importo));

        //Dove c'è la virgola metto il punto e dove c'è il punto lo tolgo
        $importoFormatted = str_replace(",", ".", str_replace(".", "", $importoSenzaEuro));

        
        return $importoFormatted;
    }

}



if (!function_exists('formattaImporto')) {
    function formattaImporto($importo)
    {
        
        // Controlla se il valore è numerico
        if (!is_numeric($importo) ) {
            // Se non è numerico, restituisci il valore iniziale
            return $importo;

        }else{

        $value = number_format($importo,2,',','.');

        return '€ '.$value;

        }

    }

}
