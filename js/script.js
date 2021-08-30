Vue.config.devtools = true;  

new Vue(    
    {
        el: '#app',
        data: {
            dischi: [],
            genreList: [],
            selectedGenre:''
        },
        created() { 
            
            axios.get('http://localhost:8888/es/08.30%20php-ajax-dischi/php-ajax-dischi/backend/api.php')
            .then((response) => {
                    this.dischi = response.data;
                    this.getGenresList();
                })
         
        },
        methods: {
            getGenresList() {       
                this.dischi.forEach((dischi) => {
                    if(!this.genreList.includes(dischi.genre)){
                        this.genreList.push(dischi.genre);
                    }
                }); 
            },

        }
        
    }
    );
    