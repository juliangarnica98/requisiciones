<table>
    <thead>
    <tr>
        <th>STATUS</th>
        <th>FECHA</th>
        <th>DOCUMENTO</th>
        <th>AREA</th>
        <th>REGIONAL</th>
        <th>TIENDA</th>
        <th>MARCA</th>
        <th>NOMBRE</th>
        <th>TIEMPO</th>
        <th>FECHA ENTRADA</th>
        <th>FECHA SALIDA</th>
        <th>NOMBRE JEFE</th>
        <th>CARGO DE JEFE</th>
        <th>RAZON DE RETIRO</th>
        <th>OTRA RAZON DE RETIRO</th>
        <th>RECIBIO BENEFICIOS</th>
        <th>ENTRENAMIENTO</th>
        <th>ASPECTOS A FORTALECER</th>
        <th>ASPECTOS POSITIVOS</th>
        <th>CARGO RETIRO</th>
        <th>CIUDAD</th>
    </tr>
    </thead>
    <tbody>
    @foreach($retreal as $re)
        <tr>
            @if ($re->status==1)
                <td>Completo</td>
            @else
                <td>Incompleto</td>
            @endif
            <td>{{ $re->updated_at}}</td>
            <td>{{ $re->num_document }}</td>
            @if ($re->area == 1)
                <td>CEDI</td>   
            @elseif ($re->area == 2)
                <td>ADMINISTRATIVOS</td> 
            @elseif ($re->area == 3)
                <td>COMERCIAL(TIENDAS)</td>
            @else 
                <td>COMERCIAL VENTA NAL</td>
            @endif
            
            <td>{{ $re->regional }}</td>
            <td>{{ $re->tienda }}</td> 
            <td>{{ $re->marca }}</td> 
            <td>{{ $re->name }}</td> 
            <td>{{ $re->time }}</td> 
            <td>{{ $re->date_entry }}</td> 
            <td>{{ $re->date_output }}</td> 
            <td>{{ $re->name_boss }}</td> 
            <td>{{ $re->charge_boss }}</td> 
            <td>{{ $re->reason_retreat }}</td> 
            <td>{{ $re->other_reason_retreat }}</td> 
            @if ($re->benefits == 1)
                <td>SI</td>   
            @elseif ($re->benefits == 2)
                <td>NO</td> 
            @else
                <td>NO CONOZCO ESTOS BENEFICIOS</td> 
            @endif
            @if ($re->training == 1)
                <td>SI</td>   
            @else
                <td>NO</td> 
            @endif


            @if ($re->reinforcement == 1)
                <td>TIPO DE CONTRATO</td>   
            @elseif ($re->reinforcement == 2)
                <td>DISTANCIA DE TU RESIDENCIA A TU LUGAR DE TRABAJO</td> 
            @elseif ($re->reinforcement == 3)
                <td>HONORARIOS</td>
            @elseif ($re->reinforcement == 4)
                <td>SALARIO</td>
            @else
                <td>AMBIENTE LABORAL</td> 
            @endif
            <td>{{ $re->positive_aspects }}</td> 

            <td>{{ $re->retirement_positions['description'] }}</td>
            @if ($re->retirement_cities != null )
                <td>{{ $re->retirement_cities['description'] }}</td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>