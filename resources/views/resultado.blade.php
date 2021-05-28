<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root{
  --corhead: #999;
    }
*{
  margin: 0;
    padding: 0;
}
body,#container_all{
  position: absolute;
  width: 100%; height: 100%;
}
    table{
      border: 1px solid transparent;
      border-collapse: collapse;
    }
    td{
      border: 1px solid ;  text-align: center;  padding: 20px; font-size: 19px;
    }
    th{
      border: 1px solid ;  padding: 20px;
    }
    
    thead tr th:first-of-type{
      background: var(--corhead);
      border-radius:  15px 0 0 0;
    }
    
    thead tr th{
      background: var(--corhead);
    }
    
    thead tr th:last-of-type{
      background: var(--corhead);
      border-radius:  0 15px 0 0;
    }
    
    tfoot tr td{
      background: var(--corhead);;
      border-radius: 0 0 15px 15px;
      border: 1px solid ;
    }

div#table{
  border-radius: 17px;
  border: 2px inset;
  box-sizing: border-box; overflow: hidden;
  box-shadow: 4px 4px 4px black;
}
tfoot td{
  width: 100%; padding: 0; overflow: hidden;
}
td button{
  height: 64px; width: 296.2px; background: transparent;
}
#container_all{
  display: flex;
  justify-content: center;
  align-items: center;
}

</style>

</head>
<body>


    <div id="container_all">
        <div id="table">
            <table>
                <thead>
                    <tr>
                        <th>1º valor</th>
                        <th>operação</th>
                        <th>2º valor: </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$primeiro}}</td>
                        <td>{{$operacao}}</td>
                        <td>{{$segundo}}</td>
                    </tr>
                    <tr>
                        <td colspan="3">{{$total}}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan='3'><button><a href="{{route('home')}}">Clique aqui para voltar!</a></button></td>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>

    
</body>
</html>

