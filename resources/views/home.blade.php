<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Calculadora</title>


</head>
<body>

    <form action="{{route('resultado')}}" method="post">
        @csrf
        <table>
			<legend>Projeto Calculadora</legend>
<tr>
	<td><input type="number" name="primeiro" placeholder="Digite um numero" /></td>
	<td>
	<div class="operacao">
		<input id="adi" type="radio" name="operacao" value="+" checked><label for="adi">+</label>
		<input id="sub" type="radio" name="operacao" value="-"><label for="sub">-</label>
		<input id="mul" type="radio" name="operacao" value="*"><label for="mul">*</label>
		<input id="div" type="radio" name="operacao" value="/"><label for="div">/</label>
	</div>
	
	<!--<select name="operacao">
		<option value="+" >+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>-->


	</td>
	<td><input type="number" name="segundo" placeholder="Digite um numero" /></td>
	<td> <input type="submit" value="enviar"> </td>
</tr>
</table>
    </form>

	<style>
		table{
			margin: 10px auto 10px auto;
			width: 30%;
			border: solid black 1px;
			padding: 3%
		}

		legend{
			text-align: center;
			padding: 6px;
			margin: 10px;
			border: solid black 0.5px;
			font-size: 100%;
			font-weight: bold;
			background-color: #e8e8e8;
		}
		
		td{
			display: block;
			font-size: 13px;
		}
		input{
			width: 100%;
			border: solid #ccc 1px;
			font-size: 13px;
			margin-bottom: 10px;
		}
		input[name=operacao]{
			display: none;
		}

		label{
			width: 21%; border: solid #ccc 0.5px; 
		    text-align: center; line-height: 22px;
		}

		input[name=operacao]:checked +label{
			color: white; font-size: 20px; font-weight: bold; background: #3336;
		}

		div {
			display: flex;
			justify-content: space-around;	margin-bottom: 10px;
		}
		input[value=enviar]:hover{
			background-color:  #3333;
		}

	</style>
</body>
</html>