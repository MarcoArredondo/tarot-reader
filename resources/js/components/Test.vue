<template>
    <div id="test">
        <div v-for="(name, index) in names" :key="index">    
            {{ name.name }}    
        </div>
    </div>
</template>  

<script>
export default {
    data: function(){
        return {
            names: [
                {name: 'marco'},
                {name: 'marco2'},
                {name: 'marco3'},
                {name: 'marco4'},
            ]
        }
    }
}
</script>