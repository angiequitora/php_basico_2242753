<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //controladores esta compuesto de acciones
    //Cada acción estará vinculada a su correspondiente ruta

    public function mostrar_formulario(){
        //mostrar la vista del metabuscador
        return view('metabuscador');
    }

    //realizar la búsqueda por motor
    public function buscar_termino(){
        //realizar la busqueda
        $termino = $_POST["termino"];
        $motor = $_POST["motores"];

        //La busqueda se realiza acorde al motor
        //de búsqueda elegido
        switch($motor){
            case 1: return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 4: return redirect()->to("https://infinitysearch.co/results?q=$termino");
                break;
            case 5: return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 6: return redirect()->to("https://www.ask.com/web?q=$termino");
                break;
            case 7: return redirect()->to("https://www.wolframalpha.com/input/?i=$termino");
                break;
            case 8: return redirect()->to("https://www.ecosia.org/search?q=$termino");
                break;
            case 9: return redirect()->to("https://www.qwant.com/?q=$termino");
                break;
            case 10: return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
        }
    }

}
