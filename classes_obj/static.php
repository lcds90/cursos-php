<div class="titulo">Membros Estáticos</div>

<?php 
class A {
    public $naoStatic = 'Variavel de Instância';
    public static $static = 'Variavel de classe (estática)';

    public function mostrarA(){
        echo "Não estática = {$this->naoStatic} <br>";
        
        // Tentativa 1
        //echo "Estática = {$this->static} <br>";
        
        // Tentativa 2
        //echo "Estática = {self::$static} <br>";
        
        // Tentativa 3
        echo "Estática = " . self::$static . " <br>";
    }

    public static function mostrarStaticA(){

        // echo "Não estática {$this->naoStatic} <br>";
        // echo "Estática {$static} <br>";
        echo "Estática = " . self::$static . "<br>";
    }
}

//$objA = new A();
//$objA->mostrarA();
//$objA->mostrarStaticA(); não é a forma ideal

echo A::$static, '<br>'; // acessar diretamente pela classe
A::mostrarStaticA(); // fica explicito, que está  usando membro que pertence á classe e não a instancia
A::$static = "Alterado membro da classe";
echo A::$static;