<?php

namespace App\Http\Livewire;

use App\Models\Content;
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
        $content=Content::create(['content'=>$this->text]);
        $response = Http::asForm()->post('http://20.205.232.75/extractor', [
            'content' => $this->text,
            'id'=>$content->id
        ]);
        dd($response->body());
    }
}
