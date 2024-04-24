<template>
    <TableTopComponents></TableTopComponents>
    <activies v-if="$store.getters.getActive == 'innerActivies'"></activies>
    <logs v-if="$store.getters.getActive == 'innerLogs'"></logs>
</template>

<script>
import activies from './monitoring/activies.vue';
import logs from './monitoring/logs.vue';
import TableTopComponents from './tablecomponents/tableSubComponents/TableTopComponents.vue';

export default {
    data(){
        
    }
    ,
    components:{
        activies,
        logs,
        TableTopComponents
    }
}

</script>