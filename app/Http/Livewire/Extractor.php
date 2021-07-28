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
        $response = Http::asForm()->post('http://52.163.211.98/extractor', [
            'content' => $this->text,
            'id'=>$content->id
        ]);
        $c=Content::find($content->id);
        while($c->keywords==null){
            sleep(5);
            $c=Content::find($content->id);
        }

        $this->keyword=str_replace(",","&#13;&#10",$c->keywords);
        $this->keyphrases=str_replace(",","&#13;&#10",$c->keyphrases);
    }

}
