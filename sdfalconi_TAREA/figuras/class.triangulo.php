<?php
class triangulo extends figura implements formulas
{

	protected $area;
	protected $perimetro;
	protected $tipo;
	function __construct($tipo = '', $a = '', $p = '')
	{
		parent::__construct($tipo, $a, $p);
	}

	public function GetArea()
	{
		$this->area;
	}

	public function GetPerimetro()
	{
		$this->perimetro;
	}

	public function GetTipo()
	{
		$this->tipo;
	}

	public function area()
	{
	}

	public function perimetro()
	{
	}
}
?>