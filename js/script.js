Vue.config.devtools = true;  

new Vue(    
    {
        el: '#app',
        data: {
            dischi: [],
        },
        created() { 
            
            axios.get('http://localhost:8888/es/08.30%20php-ajax-dischi/php-ajax-dischi/backend/api.php')
            .then((response) => {
                    this.dischi = response.data;
            })
        
        },
        methods: {
            getRock(){
                axios.get('http://localhost:8888/es/08.30%20php-ajax-dischi/php-ajax-dischi/backend/api.php?genre=Rock')
                .then((response) => {
                        this.dischi = response.data;
                        console.log("Rock")
                })
            }
        }
        
    }
    );
    