const { createApp } = Vue;

createApp({
    data() {
        return {
            urlAdress: './server.php',
            dataFromServer: [],
        }
    },

    methods: {
        getDiscsInfos() {
            axios.get(this.urlAdress).then((response) => {
                console.log(response.data);
                this.dataFromServer = response.data;
            })
        },

    },

    created() {
        this.getDiscsInfos();
    },


}).mount('#app')