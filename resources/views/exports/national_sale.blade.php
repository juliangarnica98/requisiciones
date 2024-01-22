<table>
    <thead>
    <tr>
        <th>FECHA</th>
        <th>STATUS</th>
        <th>RECLUTADOR</th>
        <th>EFECTIVIDAD</th>

        <th>NOMBRE INGRESO</th>
        <th>CEDULA INGRESO</th>
        <th>FECHA INGRESO</th>

        <th>AÑO SOLICITUD</th>
        <th>AÑO CIERRE</th>
        <th>MES SOLICITUD</th>
        <th>MES CIERRE</th>

        <th>CREADOR</th>
       
        <th>CIUDAD</th>
        <th>SEXO</th>
        <th>CARGO SOLICITADO</th>
        
        <th>NOMBRE REEMPLAZO</th>
        <th>IDENTIFICACION REEMPLAZO</th>

        <th>NOMBRE CAMBIO</th>
        <th>IDENTIFICACION CAMBIO</th>
        <th>RAZON CAMBIO</th>

        <th>NOMBRE REINTEGRO</th>
        <th>IDENTIFICACION REINTEGRO</th>
        <th>FECHA DE RETIRO</th>
        <th>FECHA DE REINGRESO</th>

   

        <th>TIPO DE ACTIVACION</th>
        <th>COMENTATIOS</th>


    </tr>
    </thead>
    <tbody>
    @foreach($national_sale as $ad)
        <tr>
          
            <td>{{ $ad->created_at}}</td>
            <td>{{ $ad->status}}</td>
            <td>{{ $ad->reclutador}}</td>

            <td>{{ $ad->efectividad}}</td>
            <td>{{ $ad->nombre_ingreso}}</td>
            <td>{{ $ad->cedula_ingreso}}</td>
            <td>{{ $ad->fecha_ingreso}}</td>

            <td>{{ $ad->ano_solicitud}}</td>
            <td>{{ $ad->ano_cierre}}</td>
            <td>{{ $ad->mes_solicitud}}</td>
            <td>{{ $ad->mes_cierre}}</td>

            <td>{{ $ad->requisition->user->name}} {{ $ad->requisition->user->last_name}}</td>
         
            <td>{{ $ad->city->description}}</td>
            <td>{{ $ad->sex->description}}</td>
            <td>{{ $ad->activation_charge->description}}</td>
            
            <td>{{ $ad->activation->replacement_name}}</td>   
            <td>{{ $ad->activation->replacement_ide}}</td>  
            
            <td>{{ $ad->activation->change_name}}</td>   
            <td>{{ $ad->activation->change_ide}}</td>  
            <td>{{ $ad->activation->change_reason}}</td>  

            <td>{{ $ad->activation->refund_name}}</td>   
            <td>{{ $ad->activation->refund_ide}}</td>  
            <td>{{ $ad->activation->refund_date_retirement}}</td>  
            <td>{{ $ad->activation->refund_date}}</td>  

            <td>{{ $ad->activation->type_activation->description}}</td>  
            <td>{{ $ad->comentaries}}</td>  
        </tr>
    @endforeach
    </tbody>
</table>