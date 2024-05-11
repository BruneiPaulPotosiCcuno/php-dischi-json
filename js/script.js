const { createApp } = Vue;

createApp({
  data() {
    return {
      discs: []
    };
  },
  methods: {
    getDiscsFromApi() {
      axios.get('content_server.php')
        .then((response) => {
          this.discs = response.data; 
        });
       
    }
  },
  mounted() {
    this.getDiscsFromApi();
  }
}).mount('#app');