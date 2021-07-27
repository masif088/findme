<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Extractor extends Component
{
    public $text;
    public $keyword;
    public $keyphrases;
    public function render()
    {
        return view('livewire.extractor');
    }
    public function mount(){

    }
    public function extraction(){
        $response = Http::asForm()->post('http://20.205.232.75/extractor', [
            'content' => $this->text
        ]);

//        $client = new \GuzzleHttp\Client();
        // Send an asynchronous request.
//        $request = $client->request('POST', 'http://20.205.232.75/extractor/',[
//            'form_params' => [
//                'content'=>$this->text
//            ]
//        ]);
////        $request->getBody();
//        dd($request->getBody());
//        dd("asda");

//        $promise = $client->sendAsync($request)->then(function ($response) {
//            $this->keyword=$response->getBody()['keyword'];
//            $this->keyphrases=$response->getBody()['keyphrases'];
//        });
//        $promise->wait();
    }
}
