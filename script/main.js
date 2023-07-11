const { createApp } = Vue 

createApp({
    data(){
        return {
            apiUrl : './server.php',
            discs : [],
        }
    },
    methods: {
        getDiscs() {
            
        }
    },
    created(){
        this.getDiscs ()
    },
}).mount('#app')