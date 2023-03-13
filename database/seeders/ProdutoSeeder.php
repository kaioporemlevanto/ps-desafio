<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::factory(['nome' => 'Romeu e Julieta', 'imagem' => '\produtos\romeuejulieta.jpg', 'categoria_id' => '1'])->count(1)->create();
        Produto::factory(['nome' => '1984', 'imagem' => '\produtos\1984.jpg', 'categoria_id' => '1'])->count(1)->create();
        Produto::factory(['nome' => 'Acotar', 'imagem' => '\produtos\acotar.jpg', 'categoria_id' => '5'])->count(1)->create();
        Produto::factory(['nome' => 'A culpa é das estrelas', 'imagem' => '\produtos\aculpa.jpg', 'categoria_id' => '2'])->count(1)->create();
        Produto::factory(['nome' => 'A descoberta do mundo', 'imagem' => '\produtos\adescoberta.jpg', 'categoria_id' => '1'])->count(1)->create();
        Produto::factory(['nome' => 'A hipótese do amor', 'imagem' => '\produtos\ahipotese.jpg', 'categoria_id' => '2'])->count(1)->create();
        Produto::factory(['nome' => 'Quem é você Alasca?', 'imagem' => '\produtos\alasca.jpg', 'categoria_id' => '4'])->count(1)->create();
        Produto::factory(['nome' => 'É assim que acaba', 'imagem' => '\produtos\assimqueacaba.jpg', 'categoria_id' => '6'])->count(1)->create();
        Produto::factory(['nome' => 'Carrie a estranha', 'imagem' => '\produtos\carrie.jpg', 'categoria_id' => '3'])->count(1)->create();
        Produto::factory(['nome' => 'Daisy Jones and the six', 'imagem' => '\produtos\daisy.jpg', 'categoria_id' => '6'])->count(1)->create();
        Produto::factory(['nome' => 'E não sobrou nenhum', 'imagem' => '\produtos\enaosobrou.jpg', 'categoria_id' => '4'])->count(1)->create();
        Produto::factory(['nome' => 'Os 7 maridos de Evelyn Hugo', 'imagem' => '\produtos\evelynhugo.jpg', 'categoria_id' => '6'])->count(1)->create();
        Produto::factory(['nome' => 'It a coisa', 'imagem' => '\produtos\it.jpg', 'categoria_id' => '3'])->count(1)->create();
        Produto::factory(['nome' => 'Jantar Secreto', 'imagem' => '\produtos\jantar.jpg', 'categoria_id' => '6'])->count(1)->create();
        Produto::factory(['nome' => 'O ladrão de raios', 'imagem' => '\produtos\ladrao.jpg', 'categoria_id' => '5'])->count(1)->create();
        Produto::factory(['nome' => 'Mentirosos', 'imagem' => '\produtos\mentirosos.jpg', 'categoria_id' => '6'])->count(1)->create();
        Produto::factory(['nome' => 'O cemitério', 'imagem' => '\produtos\ocemiterio.jpg', 'categoria_id' => '3'])->count(1)->create();
        Produto::factory(['nome' => 'O hobbit', 'imagem' => '\produtos\ohobbit.jpg', 'categoria_id' => '1'])->count(1)->create();
        Produto::factory(['nome' => 'Os dois morrem no final', 'imagem' => '\produtos\osdoismorrem.jpg', 'categoria_id' => '6'])->count(1)->create();
        Produto::factory(['nome' => 'A revolução dos bichos', 'imagem' => '\produtos\revolucao.jpg', 'categoria_id' => '1'])->count(1)->create();
        Produto::factory(['nome' => 'Tartarugas até lá embaixo', 'imagem' => '\produtos\tartarugas.jpg', 'categoria_id' => '2'])->count(1)->create();
        Produto::factory(['nome' => 'Torto Arado', 'imagem' => '\produtos\tortoarado.jpg', 'categoria_id' => '6'])->count(1)->create();
        Produto::factory(['nome' => 'Tudo é rio', 'imagem' => '\produtos\tudoerio.jpg', 'categoria_id' => '6'])->count(1)->create();
    }
}
