Vue.config.devtools = true;  

new Vue(    
    {
        el: '#app',
        data: {
            discs: []
        },
        created() { 
            
            axios.get('http://localhost:8888/php-ajax-dischi/api/api.php')
                .then((response) => {
                    this.discs = response.data;
                    console.log(this.discs)
            })   
        }

    }
);

Vue.config.devtools = true;  
