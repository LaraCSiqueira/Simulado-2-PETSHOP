<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{

    public $busca = '';

    public function render(){
        $produtos = Produto::where(
            'nome',
            'marca',
            'like',
            '%' . $this->busca . '%'
        )->get();

        $produtos = Produto::all();

        return view('livewire.produtos-index', compact('produtos'));
    }

}
