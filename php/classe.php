<?php
	// CÓDIGO ORIGINAL
    
    // class Carro
    // {
    //     public $marca;
    //     private $cor;
        
    //     public function __construct()
    //     {
    //         echo "instanciando a classe";
    //     }
        
    //     public function setCor($cor)
    //     {
    //         $this->cor = $cor;
    //     }
        
    //     public function getCor()
    //     {
    //         return $cor;
    //     }
    // }
    
    // $carro = new Carro;
    // $carro->marca = "Kombi";
    // $carro->cor = "branca";
    
    // echo $carro->marca;
    // echo $carro->cor;
    
    /*  ERROS AO VISUALIZAR
        O atributo $marca está definido como public mas deveria estar como private.
        Os dois atributos não estão com os tipos definidos.

        O contrutor está como private, não podendo ser utilizado no inicialização do objeto,
        não está passando nenhum parametro e não está instanciando nenhum atributo.

        Na segunda parte do código, ao criar o objeto ele, não pode ser usado o constructor como citado acima,
        ao definir o atributo $marca não foi usado nenhum método.
        Ao tentar settar o atributo $cor do objeto causará erro ao tentar, pois a mesma é privada
        para alterar um atributo privado de ser usado um metodo publico.
    */
    /* ERROS AO RODAR O CODIGO
        Deu erro no por ser privado construtor;
        definindo o construtor como publico o codigo continuou até a tentativa de redefinir o atributo $cor;

    */
    /* CORREÇÕES E SOLUÇÕES

        Definiria os atributos como private e definiria os tipos como String;

        Definiria o __construtor como public para poder criar um objeto,
        colocaria os tipos dos parametros como string para reduzir erros por parte da classe,
        Dentro do construtor, usaria o $this para instanciar os atributos com os parametros passados, apagaria o echo.
        
        Mudaria o nome do metrodo 'setCor()' para 'pintarCarro()', o parametro com o parametro string e caso haja,
        definiria a regra de negocio;

        Solução abaixo:
    */

    class Carro
    {
        private $marca;
        private $cor;
        
        public function __construct(string $marcaCarro, string $corCarro)
        {
            $this->marca = $marcaCarro;
            $this->cor = $corCarro;
        }
        
        public function pintarCarro(string $corTinta)
        {
            $this->cor = $corTinta;
        }
        
        public function cor()
        {
            return $this->cor;
        }

        public function marca()
        {
            return $this->marca;
        }
    }
    
    $listaCarros = [];

    $listaCarros[] = new Carro("Kombi", "Banca");
    $listaCarros[] = new Carro("Ford", "Prata");
    $listaCarros[] = new Carro("Fiat ", "Preto");

    echo PHP_EOL;

    // Exemplo/Teste Um
    echo "A marca do automovel é {$listaCarros[0]->marca()} e a cor era {$listaCarros[0]->cor()}!" . PHP_EOL;
    $listaCarros[0]->pintarCarro("Vermelho Metalico");
    echo "Mas agora é {$listaCarros[0]->cor()}" . PHP_EOL;

    echo PHP_EOL;

    // Exemplo/Teste Dois
    echo "A marca do automovel é {$listaCarros[2]->marca()} e a cor era {$listaCarros[2]->cor()}!" . PHP_EOL;
    $listaCarros[2]->pintarCarro("Vermelho Metalico");
    echo "Mas agora é {$listaCarros[2]->cor()}" . PHP_EOL;

?>