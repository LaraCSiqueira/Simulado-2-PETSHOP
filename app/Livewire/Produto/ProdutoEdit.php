<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{

    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $preco_custo;
    public $preco_venda;
    public $quantidade;
    public $estoque_min;

    public function editar($id){
        Produto::edit([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria' => $this->categoria,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'quantidade' => $this->quantidade,
            'estoque_min' => $this->estoque_min
        ]);

        

    }

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
