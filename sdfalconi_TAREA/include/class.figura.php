<?php
abstract class figura
{

	private $tipo;
	private $a; //area
	private $p; //perimetro

	function __construct($tipo, $a, $p)
	{

	}

	public static function get_form()
	{
		$html = '
			
			<form name="figuras" method="POST" action="" >
			<table border=0 align="center" class="table">
				<tr>
					<th colspan="2">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
					<div class="form-group">
						<select name="tipo" OnChange="activar()">
						<option value="sel">Seleccione...</option>
							<option value="cuadrado" id="valor1">Cuadrado</option>
							<option value="rectangulo" id="valor2">Rectángulo</option>
							<option value="triangulo" id="valor3">Triángulo</option>
						</select>
					</div>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					
						<td>
						<div class="form-group">
						<input type="text" name="lado_1"size="4" id="lado_1" disabled></td>
					</td>
				</tr>
				<tr>
					<td>Lado 2:</td>
				    
						<td>
						<div class="form-group">
						<input type="text" name="lado_2"size="4" id="lado_2" disabled></td>
					</div>
				</tr>
				<tr>
					<td>Lado 3:</td>
					
						<td><div class="form-group"><input type="text" name="lado_3"size="4" id="lado_3" disabled></td>
					</div>
				</tr>							
				<tr>
					
						<th colspan="2">
						<div class="form-group">
						<input type="submit" name="calcular" value="Calcular"></th>
					</div>
				</tr>
			</table>
			</form>';
		return $html;
	}

	// METODOS ABSTRACTOS	
	public abstract function GetArea();


	public abstract function GetPerimetro();


	public abstract function GetTipo();
}
?>