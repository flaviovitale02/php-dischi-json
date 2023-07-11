const { createApp } = Vue 

createApp({
    data(){
        return {
            apiUrl : './server.php',
            items : [],
        }
    },
    methods: {
        getDiscs() {
            
        }
    },
    created(){
        this.getItems()
    },
}).mount('#app')