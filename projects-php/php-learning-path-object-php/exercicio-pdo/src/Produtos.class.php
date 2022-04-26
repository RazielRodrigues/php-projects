<?php 
declare(strict_types=1);

class Produto
{
	private $conexaoDB;

	public function __construct()
	{
		try {
			$this->conexaoDB = new PDO('mysql:host=localhost;dbname=pdo','root','');
		} catch (Exception $e) {
			$e->getMessage();
		}

	}


	public function list(): array
	{

		$select = 'select * from produtos';
		$produtos = [];
		foreach ($this->conexaoDB->query($select) as $key => $value) {
			array_push($produtos, $value);
		}

		return $produtos;
	}


	public function insert(string $descricao): int
	{

		$insert = 'insert into produtos(descricao) values(?)';
		$prepare = $this->conexaoDB->prepare($insert);
		$prepare->bindParam(1, $descricao);
		$prepare->execute();

		return $prepare->rowCount();
	}

	public function update(string $descricao, int $id): int
	{

		$update = 'update produtos set descricao = ? where id = ?';
		$prepare = $this->conexaoDB->prepare($update);
		$prepare->bindParam(1, $descricao);
		$prepare->bindParam(2, $id);
		$prepare->execute();

		return $prepare->rowCount();
	}

	public function delete(int $id): int
	{

		$delete = 'delete from produtos where id = ?';
		$prepare = $this->conexaoDB->prepare($delete);
		$prepare->bindParam(1, $id);
		$prepare->execute();

		return $prepare->rowCount();
	}
}
