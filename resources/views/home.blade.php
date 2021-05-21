<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{route('resultado')}}" method="post">
        @csrf
        <table>
<tr>
	<td><input type="number" name="primeiro" /></td>
	<td>
	<select name="operacao">
		<option value="+" >+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	
	</td>
	<td><input type="number" name="segundo" /></td>
	<td> <input type="submit" value="enviar"> </td>
</tr>
</table>
    </form>
</body>
</html>