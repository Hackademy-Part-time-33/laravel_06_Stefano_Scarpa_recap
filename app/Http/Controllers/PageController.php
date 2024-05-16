<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public static $services = [
        [
            'uri' => 'serviziofotografico',
            'name' => 'Servizio Fotografico',
            'costo' => 500,
            'img' => 'https://picsum.photos/500.jpg'
        ],
        [
            'uri' => 'ritratto',
            'name' => 'Ritratto',
            'costo' => 200,
            'img' => 'https://picsum.photos/500.jpg'
        ],
        [
            'uri' => 'fotoprodotto',
            'name' => 'Foto Prodotto',
            'costo' => 1200,
            'img' => 'https://picsum.photos/500.jpg'
        ],
        [
            'uri' => 'artdirection',
            'name' => 'Art Direction',
            'costo' => 2000,
            'img' => 'https://picsum.photos/500.jpg'
        ],
    ];

    public function welcome(){
        return view('welcome', ['servizi' => self::$services]);
    }

    public function service(){
        return view('service', ['servizi' => self::$services]);
    }

    public function servizio($dettaglio) {
        
        foreach (self::$services as $element){
            if ($dettaglio == $element['uri']) {
                return view('servizio', ['detail' => $dettaglio]);
            }
        }
        abort(404);
    }

    public function send(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|min:15',
        ]);

        $data = [
            'nome' => $request->fullname,
            'indirizzo' => $request->input('email'),
            'telefono' => '+39' . $request->input('phone'),
            'messaggio' => $request->message,
        ];

        //use Illuminate\Support\Facades\Mail;
        Mail::to('admin@stefano.it')->send(new ContactMail($data));
        //QUi invio i dati appena mappati alla classe ContactMail
        return redirect()->route('homepage');
    }
}
