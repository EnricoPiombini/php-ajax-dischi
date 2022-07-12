new Vue({
    el: "#app",
    data: {
    discList: []
    },
    mounted() {
        axios.get("api/disc.php")
            .then(resp => {
                this.discList = resp.data.response;
                
            })
    }
})