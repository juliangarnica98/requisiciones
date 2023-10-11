<template>
    <div>
        <div class="row d-flex justify-content-center pb-5">
            <div class="col-md-6">
                <select class="form-control" name="area" id="area" v-model="area" @change="getdata(area)">
                    <option value="" selected>SELECCIONA UN ÁREA</option>
                    <option value="1">CEDI</option>
                    <option value="2">ADMINISTARTIVO</option>
                    <option value="3">COMERCIAL TIENDAS</option>
                    <option value="4">COMERCIAL VENTA NAL</option>
                </select>
            </div>          
        </div>
        <apexchart
            width="35%"
            type="bar"
            :options="options"
            :series="series"
        ></apexchart>
    </div>
</template>
<script>
export default {
    data() {
        return {
            area: "",
            total_entrevistas:0,
            respiesta_si:0,
            respiesta_no:0,
            options: {},
            series: [],
        };
    },
    methods:{
        getdata(value){
            axios.get(`/getdatainterview/`+value)
            .then((res) => { 
                this.options={
                    chart: {
                    id: "vuechart-example",
                    },
                    xaxis: {
                        categories: [
                            'SI','NO'
                        ],
                    },
                    colors:['#E6007E', '#E91E63']
                },
                this.series=[
                    {
                        name: "series-1",
                        data: [res.data.si,res.data.no],
                        
                    },
                ]
            });
        }
    }
};
</script>