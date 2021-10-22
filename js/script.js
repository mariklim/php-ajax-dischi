const app = new Vue({
  el: "#app",
  data: {
    //creo due arr dove andranno i dati che arriveranno da API
    albums: [],
    genres: [],
    select: "",

  },

  //Chiamo il file JSON originale con tutti album
  created() {
    axios.get('http://localhost/api/index.php')
      .then((response) => {
        this.albums = response.data;
      })


      //chiamo api per prendere info sui generi e li salvo in un array 
      axios.get('http://localhost/api/index.php?genres=genres')
      .then((response) => {
        this.genres = response.data;
      })

  },
  methods: {
     //Al cambio della select (in file html )chiamo il file JSON filtrato di album
    onChange(event) {

      //aseegno alla variable "select" il valore della select (quello che sceglie utente)
      this.select = event.target.value;
      axios.get('http://localhost/api/index.php', {
        params: {

          //specifico il parametro da considerare per la stampa degli album
          genre: this.select,
        },
      })
        .then((response) => {
          this.albums = response.data;
        });


    }
  },
})