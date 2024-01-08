<table>
    <thead>
        <tr>
            <th>CARGO</th>
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
            <td>ASESOR INTEGRAL</td>
            <td>{{$aseint_region_anti_san}}</td>
            <td>{{$aseint_region_cent_nor}}</td>
            <td>{{$aseint_region_cent_sur}}</td>
            <td>{{$aseint_region_costa}}</td>
            <td>{{$aseint_region_sur}}</td>
            <td>{{$aseint_venta_nal}}</td>
            <td>{{$aseint_region_anti_san + $aseint_region_cent_nor + $aseint_region_cent_sur + $aseint_region_costa +$aseint_region_sur + $aseint_venta_nal}}</td>
         </tr>
         <tr>
            <td>ASESOR PUNTO DE COMPRA</td>
            <td>{{$asepun_region_anti_san}}</td>
            <td>{{$asepun_region_cent_nor}}</td>
            <td>{{$asepun_region_cent_sur}}</td>
            <td>{{$asepun_region_costa}}</td>
            <td>{{$asepun_region_sur}}</td>
            <td>{{$asepun_venta_nal}}</td>
            <td>{{$asepun_region_anti_san + $asepun_region_cent_nor +  $asepun_region_cent_sur + $asepun_region_costa + $asepun_region_sur + $asepun_venta_nal}}</td>
         </tr>
         <tr>
            <td>AUXILIAR INTEGRAL</td>
            <td>{{$auxint_region_anti_san}}</td>
            <td>{{$auxint_region_cent_nor}}</td>
            <td>{{$auxint_region_cent_sur}}</td>
            <td>{{$auxint_region_costa}}</td>
            <td>{{$auxint_region_sur}}</td>
            <td>{{$auxint_venta_nal}}</td>
            <td>{{$auxint_region_anti_san + $auxint_region_cent_nor + $auxint_region_cent_sur + $auxint_region_costa + $auxint_region_sur + $auxint_venta_nal}}</td>
         </tr>
         <tr>
            <td>COORDINADOR DE TIENDA</td>
            <td>{{$coorti_region_anti_san}}</td>
            <td>{{$coorti_region_cent_nor}}</td>
            <td>{{$coorti_region_cent_sur}}</td>
            <td>{{$coorti_region_costa}}</td>
            <td>{{$coorti_region_sur}}</td>
            <td>{{$coorti_venta_nal}}</td>
            <td>{{$coorti_region_anti_san + $coorti_region_cent_nor + $coorti_region_cent_sur + $coorti_region_costa + $coorti_region_sur + $coorti_venta_nal}}</td>
         </tr>
         <tr>
            <td>LIDER DE TIENDA</td>
            <td>{{$lidtie_region_anti_san}}</td>
            <td>{{$lidtie_region_cent_nor}}</td>
            <td>{{$lidtie_region_cent_sur}}</td>
            <td>{{$lidtie_region_costa}}</td>
            <td>{{$lidtie_region_sur}}</td>
            <td>{{$lidtie_venta_nal}}</td>
            <td>{{$lidtie_region_anti_san + $lidtie_region_cent_nor + $lidtie_region_cent_sur + $lidtie_region_costa + $lidtie_region_sur + $lidtie_venta_nal }}</td>
         </tr>
        <tr>
            <td>SUMA TOTAL</td>
            <td>{{$lidtie_region_anti_san + $coorti_region_anti_san + $auxint_region_anti_san + $asepun_region_anti_san + $aseint_region_anti_san  }}</td>
            <td>{{$lidtie_region_cent_nor + $coorti_region_cent_nor + $auxint_region_cent_nor + $asepun_region_cent_nor + $aseint_region_cent_nor}}</td>
            <td>{{$lidtie_region_cent_sur + $coorti_region_cent_sur + $auxint_region_cent_sur + $asepun_region_cent_sur + $aseint_region_cent_sur}}</td>
            <td>{{$lidtie_region_costa + $coorti_region_costa + $auxint_region_costa + $asepun_region_costa + $aseint_region_costa}}</td>
            <td>{{$lidtie_region_sur + $coorti_region_sur + $auxint_region_sur + $asepun_region_sur + $aseint_region_sur}}</td>
            <td>{{$lidtie_venta_nal + $coorti_venta_nal + $auxint_venta_nal + $asepun_venta_nal + $aseint_venta_nal}}</td>
            <td>
                {{$lidtie_region_anti_san + $coorti_region_anti_san + $auxint_region_anti_san + $asepun_region_anti_san + $aseint_region_anti_san +
                $lidtie_region_cent_nor + $coorti_region_cent_nor + $auxint_region_cent_nor + $asepun_region_cent_nor + $aseint_region_cent_nor + 
                $lidtie_region_cent_sur + $coorti_region_cent_sur + $auxint_region_cent_sur + $asepun_region_cent_sur + $aseint_region_cent_sur +
                $lidtie_region_costa + $coorti_region_costa + $auxint_region_costa + $asepun_region_costa + $aseint_region_costa +
                $lidtie_region_sur + $coorti_region_sur + $auxint_region_sur + $asepun_region_sur + $aseint_region_sur + 
                $lidtie_venta_nal + $coorti_venta_nal + $auxint_venta_nal + $asepun_venta_nal + $aseint_venta_nal}}
            </td>
            
        </tr> 
    </tbody>
</table>