<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use App\Models\Produtos;
use Livewire\Component;

class ProdutoCreate extends Component
{

    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $preco_custo;
    public $preco_venda;
    public $quantidade;
    public $estoque_min;

    public function salvar(){
        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria' => $this->categoria,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'quantidade' => $this->quantidade,
            'estoque_min' => $this->estoque_min
        ]);

        session()->flash(
            'sucess',
            'Produto cadastrado com sucesso!'
        );

        session()->flash(
            'error',
            'Não foi possível concluir o cadastro'
        );
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
