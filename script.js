const root= new Vue(
    {
        el: '#app',
        data : {
            albums : []
        },
        methods: {
            getAlbums(){
                axios.get('http://localhost/php-ajax-dischi/serverAPI.php')
                .then((response) => {
                    this.albums.push(response.data.response);
                    console.log(this.albums);
                });

            }

            
        },
    }
);