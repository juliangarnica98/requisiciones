<table>
    <thead>
        <tr>
            <th style="font-weight: bold;">NOMBRE</th>
            <th style="text-align: left;text-transform: uppercase;">{{$user->name}} {{$user->last_name}}</th>
        </tr>
        <tr> 
            <th style="font-weight: bold;">CEDULA</th>
            <th style="text-align: left;">{{$user->cedula}}</th>
        </tr>
        <tr> 
            <th style="font-weight: bold;">ESTADO</th>
            @if($user->status ==  1)
                <th style="text-align: left;">ACTIVO</th>
            @else
                <th style="text-align: left;">INACTIVO</th>
            @endif
        </tr> 
        <tr >  
            <th style="font-weight: bold;">FECHA INGRESO</th>
            <th style="text-align: left;">{{$user->fecha_ingreso}}</th>
        </tr>
        <tr> 
            @if($user->status !=  1)
                <th style="font-weight: bold;" >FECHA RETIRO</th>
                <th style="text-align: left;">{{$user->fecha_retiro}}</th>
            @endif
        </tr>
        <tr>
            @if($user->status !=  1)
                <th style="font-weight: bold;">MOTIVO RETIRO</th>
                <th style="text-align: left;">{{$user->razon_retiro}}</th>
            @endif
        </tr>
        @if($user->status !=  1)
        <tr>
            <th style="font-weight: bold;"></th>
            <th style="text-align: left;"></th>
        </tr>
        @endif
    </thead>
    <thead>
        <tr>
            <th style="text-align: center;font-weight: bold;border: 1px solid #000000;">SEMANA</th>
            <th style="text-align: center;font-weight: bold;border: 1px solid #000000;">PREGUNTA</th>
            <th style="text-align: center;font-weight: bold;border: 1px solid #000000;">RESPUESTA</th>
        </tr>
    </thead>
    <tbody >
        @foreach($answers as $ans)
        <tr style="">
            <td style="text-align: center;border: 1px solid #000000;">{{ $ans->week }}</td>
            <td style="text-align: center;border: 1px solid #000000;">{{ $ans->description_que }}</td>
            <td style="text-align: center;border: 1px solid #000000;">{{ $ans->description_ans }}</td>
        </tr>
        @endforeach
    </tbody>
</table>