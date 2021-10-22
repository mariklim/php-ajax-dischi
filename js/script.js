const app = new Vue({
  el: "#app",
  data: {
    albums: [],
    genres: [],
    select: "",

  },
  created() {
    axios.get('http://localhost/api/index.php')
      .then((response) => {
        this.albums = response.data;
      })

      axios.get('http://localhost/api/index.php?genres=genres')
      .then((response) => {
        this.genres = response.data;
      })

  },
  methods: {
    onChange(event) {
      this.select = event.target.value;
      axios.get('http://localhost/api/index.php', {
        params: {
          genre: this.select,
        },
      })
        .then((response) => {
          this.albums = response.data;
        });


    }
  },
})