Vue.config.devtools = true;  

new Vue(    
    {
        el: '#app',
        data: {
            discs: [],
            gen: ""
        },
        created() { 
            
            axios.get('http://localhost:8888/php-ajax-dischi/api/api.php?gen=all')
                .then((response) => {
                    this.discs = response.data;
            })   
        },
        methods: {
            call: function() {
                var text = 'http://localhost:8888/php-ajax-dischi/api/api.php?gen=' + this.gen
                axios.get(text)
                .then((response) => {
                    this.discs = response.data;
            })  
            }
        }

    }
);

Vue.config.devtools = true;  
