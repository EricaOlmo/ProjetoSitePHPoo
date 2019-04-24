<?php
//controller
namespace SitePHP; 
	
class Sobre 
{
	public function listarSobre()
	{
		$texto= "O que é um framework? \n
				R:Frameworks são bibliotecas de codigos para que se possa ser reutilizado em aplicações,  \n
					é a interface da aplicação que geralmente mantem padrões de telas e evita que o desenvolvedor \n
					perca tempo refazendo codigos que antes já foram feitos.  \n \n 
					
				O que é padrão de projeto? \n
				R: Padrões de projeto são uma forma de organizar um software para que fique mais facil de entender \n
					e até mesmo dar suporte para a aplcação futuramente, evitando muitos problemas. \n \n
					
				Quais as principais categorias de padrões de projetos? \n
				R:Singleton, Factory Method, MVC, VCL, Startegy. \n \n 
				
				Qual o principal padrão de projeto utilizado nesta aplicação? \n
				R: MVC (Model View Controller). \n";
				
		echo nl2br ($texto);
	}
	
	
}
	