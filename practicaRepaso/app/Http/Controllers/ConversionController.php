<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversionController extends Controller
{
    public function convertir(Request $request)
    {
        $cantidad = $request->input('cantidad');
        $conversion = $request->input('conversion');
        $resultado = 0;
        $unidad = '';
        switch ($conversion) {
            case 'MBaGB':
                $resultado = $cantidad / 1000;
                $unidad = "GB";
                break;
            case 'GBaMB':
                $resultado = $cantidad * 1000;
                $unidad = "MB";
                break;
            case 'GBaTB':
                $resultado = $cantidad / 1000;
                $unidad = "TB";
                break;
            case 'TBaGB':
                $resultado = $cantidad * 1000;
                $unidad = "GB";
                break;
        }

        $texto = "Resultado: " . number_format($resultado, 2) . " " . $unidad;

        return view ('vista_repaso_1', ['resultado' => $texto]);
    }
}