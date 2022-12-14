let { createApp } = Vue

createApp({
  data() {
    return {
      tasks : [],
      api_url: "server.php",
      task: ""
    }
  },
  methods : {
    putTasks(url) {
        axios.get(url)
        .then(response => {
           console.log(response);
           this.tasks = response.data;
        })
        .catch(error => {
            console.error(error.message);
        })
    },
    putNewTasks(url) {
        const data = {
            task
        }
        axios.post(url, data,
        {
            headers: {"Content-Type" : "multipart/form-data"}
        }) .then((response) => {
            this.tasks = response.data
        });
    }
  },
  mounted() {
    this.putTasks(this.api_url);
  }
}).mount('#app')