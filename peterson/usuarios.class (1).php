<?php 
Class Usuarios{
	public function cadastrar($nome, $email, $senha){
		//instancia do arquivo config
		global $pdo;
		//verifica se existe email cadastrado
		$sql  =  $pdo->prepare("SELECT id FROM usuario WHERE email = :email");
		//bindValue proteçao
		$sql->bindValue(":email", $email);
		$sql->execute();
		//se não  existe email pode inserir usuario
		if($sql->rowCount() == 0){
			//inserir
			$sql = $pdo->prepare("INSERT INTO usuario SET nome = :nome, email = :email, senha = :senha");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", md5($senha));
			$sql->execute();
		return true;	
		}else{
			return false;
		}

	}
}



 ?>