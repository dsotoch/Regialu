<style>
    #title {
        background-color: red;
        color: white;
        height: 50px;
        font-size: 45px;
        width: 100%;
    }

    #title tr th {
        width: 100%;
    }

    #cabecera {
        width: 100%;
        background-color: black;
        font-size: 14px;
        color: white;
        padding: 10px;
    }

    #cabecera tr th {
        width: 100% / 3;
    }

    #contenido thead tr {
        background-color: red;
        color: white;
        font-size: 12px;
        padding: 5px;

    }

    #contenidonote thead tr {
        background-color: black;
        color: white;
        font-size: 15px;
        height: 30px;


    }

    #contenidonote {
        width: 100%;

    }

    #contenidonote tr {
        font-size: 12px;


    }

    #contenidonote td {
        text-align: center;
        width: 100% /2;

    }

    #contenido1 {
        width: 100%;
    }

    #contenido1 td {

        width: 50%;
    }
</style>

<body>
    <table id="title">
        <tr>
            <th>
                <center>Reporte de Notas </center>
            </th>

        </tr>
    </table>




    <div>
        <table id="cabecera">
            <tr>
                <th>Periodo : {{$periodo}} </th>
                <th>Institucion : {{$institucions}}</th>
                <th>Fecha de Reporte : {{$fechas}}</th>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <table id="contenido1">
            <thead>
                <tr>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>AREA : {{$areas}}</td>
                    <td id="alumno">ALUMNO : {{$alumnoss}}</td>

                </tr>
                <tr>
                    <td>TIPO : {{$tipos}}</td>
                    <td>NUMERO DE NOTAS : {{$notas}}</td>
                </tr>
                <tr>
                    <td>UNIDAD : {{$unidad}}</td>
                    <td>PROMEDIO POR NUMERO DE NOTAS : {{$promedio}} </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <table id="contenidonote">
        <thead>
           
                <th style="text-align: center;">Descripcion</th>
                <th style="text-align: center;">Calificativo</th>

        </thead>
        <tbody>
            @foreach($notes as $n)
            
            <tr>
                <td>{{$n->descripcion}}</td>
                <td>{{$n->valor}}</td>

            </tr>

            @endforeach
        </tbody>
    </table>

</body>