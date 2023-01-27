const { createApp } = Vue;

createApp({
    data() {
        return {
            urlAdress: './server.php'
        }
    },

    methods: {
        getDiscsInfos() {
            axios.get(this.urlAdress, {
                params: {
                }
            })
                .then(function (response) {
                    console.log(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                })
                .then(function () {
                    // always executed
                });
        }
    },

    created() {
        this.getDiscsInfos()
    }
}).mount('#app')