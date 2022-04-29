<template>
    <ul class="notifications userbox">
        <li>
            <el-tooltip class="item" effect="dark" content="Periodo" placement="bottom">
                <a href="#" data-toggle="dropdown" style="color:#777">
                    <i class="el-icon-date"></i>
                </a>
            </el-tooltip>
            <div class="dropdown-menu">
                <li class="container">
                    <!-- <a role="menuitem" href="#" > -->
                        <el-date-picker v-model="fecha_periodo"  type="month" placeholder="Escoge periodo" value-format="yyyy-MM" format="MM/yyyy" :clearable="false" @change="cambiarPeriodo()"></el-date-picker>
                    <!-- </a> -->
                </li>
            </div>
        </li>
    </ul>
</template>
<script>
export default {
    data() {
        return {
            resource: 'periodo',
            fecha_periodo: null,
        }
    },
    methods: {
        cambiarPeriodo(){
            this.$message.success('Escogió el periodo: ' + this.fecha_periodo)
        }
    }
}
</script>