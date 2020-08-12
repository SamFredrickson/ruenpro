<template>
    <a class="btn btn-primary float-right" href="#" @click="showPost">Подробнее...</a>
</template>

<script>
    export default {
        
        props : ['postId'],

        mounted() {
            console.log('Component mounted.')
        },
        
        methods:{
            showPost(){
                
            }
        }
    }
</script>
