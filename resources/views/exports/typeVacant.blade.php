<table>
    <thead>
        <tr>
            <th>TIPO VACANCIA</th>
            <th>REGIONAL ANTIOQUIA/SANTANDERES</th>
            <th>REGIONAL CENTRO NORTE</th>
            <th>REGIONAL CENTRO SUR</th>
            <th>REGIONAL COSTA</th>
            <th>REGIONAL SUR</th>
            <th>VENTA NACIONAL</th>
            <th>TOTAL</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>APERTURA TIENDA</td>
            <td>{{$aper_region_anti_san}}</td>
            <td>{{$aper_region_cent_nor}}</td>
            <td>{{$aper_region_cent_sur}}</td>
            <td>{{$aper_region_costa}}</td>
            <td>{{$aper_region_sur}}</td>
            <td>{{$aper_venta_nal}}</td>
           <td>{{$aper_region_anti_san + $aper_region_cent_nor + $aper_region_cent_sur + $aper_region_costa + $aper_region_sur + $aper_venta_nal}}</td>
         </tr>
        <tr>
            <td>PLAN CAMBIOS</td>
            <td>{{$plan_region_anti_san}}</td>
            <td>{{$plan_region_cent_nor}}</td>
            <td>{{$plan_region_cent_sur}}</td>
            <td>{{$plan_region_costa}}</td>
            <td>{{$plan_region_sur}}</td>
            <td>{{$plan_venta_nal}}</td>
            <td>{{$plan_region_anti_san + $plan_region_cent_nor + $plan_region_cent_sur + $plan_region_costa + $plan_region_sur + $plan_venta_nal}}</td>
        </tr>
         <tr>
            <td>REEMPLAZO</td>
            <td>{{$reem_region_anti_san}}</td>
            <td>{{$reem_region_cent_nor}}</td>
            <td>{{$reem_region_cent_sur}}</td>
            <td>{{$reem_region_costa}}</td>
            <td>{{$reem_region_sur}}</td>
            <td>{{$reem_venta_nal}}</td>
            <td>{{$reem_region_anti_san + $reem_region_cent_nor + $reem_region_cent_sur + $reem_region_costa + $reem_region_sur + $reem_venta_nal}}</td>
        </tr>
        <tr>
            <td>SUMA TOTAL</td>
            <td>{{$aper_region_anti_san + $plan_region_anti_san + $reem_region_anti_san}}</td>
            <td>{{$aper_region_cent_nor + $plan_region_cent_nor + $reem_region_anti_san}}</td>
            <td>{{$aper_region_cent_sur + $plan_region_cent_sur + $reem_region_cent_sur}}</td>
            <td>{{$aper_region_costa + $plan_region_costa + $reem_region_costa}}</td>
            <td>{{$aper_region_sur + $plan_region_sur + $reem_region_sur}}</td>
            <td>{{$aper_venta_nal + $reem_venta_nal + $reem_venta_nal}}</td>
            <td>{{$aper_region_anti_san + $aper_region_cent_nor + $aper_region_cent_sur + $aper_region_costa + $aper_region_sur + $aper_venta_nal +  $plan_region_anti_san + $plan_region_cent_nor + $plan_region_cent_sur + $plan_region_costa + $plan_region_sur + $plan_venta_nal + $reem_region_anti_san + $reem_region_cent_nor + $reem_region_cent_sur + $reem_region_costa + $reem_region_sur + $reem_venta_nal }}</td> 
        </tr> 
    </tbody>
</table>