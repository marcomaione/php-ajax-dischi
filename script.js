const root= new Vue(
    {
        el: '#app',
        data : {
            albums : [],
        },
        methods: {
            getAlbum(){
                axios.get('http://localhost/php-ajax-dischi/serverAPI.php')
                .then((response) =>{
                    this.albums.push(response.data.response);
                    console.log(this.albums);
                });

            }

            
        },
        created() {
            this.getAlbum();
            console.log(this.albums);
        }
    }
);