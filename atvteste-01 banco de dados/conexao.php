
<?php

	class Conexao
	{
		private static $instancia;

		public static function getConexao()
		{
			if(!isset(self::$instancia)){
				self::$instancia = new PDO('mysql:host=localhost;dbname=atvteste; charset=utf8', 'root','vertrigo');
				return self::$instancia;
			}else{
				return self::$instancia;
			}	
		}
	}
?>