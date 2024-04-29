# Formattavaluta

Formattavaluta è un pacchetto Laravel che fornisce funzionalità di formattazione valuta per le applicazioni web.

## Installazione

Per installare il pacchetto, esegui il seguente comando Composer:

`composer require alessandro.mineo/formattavaluta`

## Uso

Ci sono due helper globali disponibili:
* formattaImporto()
* deformattaImporto()

formattaImporto(1200);  
// ***echo € 1.200,00***

deformattaImporto('€ 1.200,00');  
// ***echo  1200.00***

