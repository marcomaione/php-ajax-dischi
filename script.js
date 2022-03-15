const root= new Vue(
    {
        el: '#app',
        data: {
            albums: []
        },
        created() {
            this.getAlbum();
            console.log(this.albums);
        },
        methods: {
            getAlbum(){
                axios.get('http://localhost/php-ajax-dischi/serverAPI.php')
                .then((response) =>{
                    this.albums = response.data;
                    console.log(response);
                });

            }

            
        },
        
    }
);