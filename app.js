import { createApp } from 'vue'

const app = createApp({
  data() {
    return {
      tasks : [],
      api_url: "server.php"
    }
  },
  methods : {
    putTasks(url) {
    axios
        .get(url)
        .then(response => {
           // console.log(response);
           this.tasks = response.data;
        })
        .catch(error => {
            console.error(error.message);
        })
    }
  },
  mounted() {
    this.putTasks(this.api_url);
  }
})

app.mount('#app')