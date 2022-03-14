const root= new Vue(
    {
        el: '#app',
        data : {
            albums : []
        },
        methods: {
            getAlbums(){
                axios.get('http://localhost/php-ajax-dischi/database.php')
                .then((response) => {
                    this.albums.push(response.data);
                    console.log(this.albums);
                });

            }

            
        },
    }
);