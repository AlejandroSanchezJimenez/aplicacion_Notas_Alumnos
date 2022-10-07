<?php
    function generarCSV($arreglo, $ruta, $delimitador, $encapsulador){
        $file_handle = fopen($ruta, 'w');
        foreach ($arreglo as $linea) {
          fputcsv($file_handle, $linea, $delimitador, $encapsulador);
        }
        rewind($file_handle);
        fclose($file_handle);
      }
    function escribeCSV($ruta) {
        $file = fopen($ruta,"r");
        while(! feof($file))
            {
            print_r(fgetcsv($file));
            }
        fclose($file);
    }
?>