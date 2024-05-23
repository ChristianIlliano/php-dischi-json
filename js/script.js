const { createApp } = Vue;

createApp({
    data() {
        return {
            // message: "hello"
            cardSong: []
        };
    },
    created() {
        axios.get("http://localhost/boolean/php-dischi-json/server.php").then((resp) => {
            this.cardSong = resp.data.result;
            console.log(resp);
        });
    }
}).mount("#app");