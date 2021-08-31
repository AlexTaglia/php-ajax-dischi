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
            getfilter(){
                axios.get(`http://localhost:8888/es/08.30%20php-ajax-dischi/php-ajax-dischi/backend/api.php?genre=${this.selectedGenre}`)
                .then((response) => {
                        this.dischi = response.data;
                        console.log("select")
                })
            },
            /*
            getRock(){
                axios.get('http://localhost:8888/es/08.30%20php-ajax-dischi/php-ajax-dischi/backend/api.php?genre=Rock')
                .then((response) => {
                        this.dischi = response.data;
                        console.log("Rock")
                })
            },
            getPop(){
                axios.get('http://localhost:8888/es/08.30%20php-ajax-dischi/php-ajax-dischi/backend/api.php?genre=Pop')
                .then((response) => {
                        this.dischi = response.data;
                        console.log("Pop")
                })
            },
            getAll(){
                axios.get('http://localhost:8888/es/08.30%20php-ajax-dischi/php-ajax-dischi/backend/api.php')
                .then((response) => {
                        this.dischi = response.data;
                        console.log("All")
                })
            },
            */
            
        }
        
    }
    );
    