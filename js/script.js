const app = new Vue({
    el: "#app",
    data:{
        albums: null,

    },
    created(){
        axios.get('http://localhost/api/index.php')
  .then((response) => {
    this.albums = response.data;
    // console.log(this.albums); 
    
  })
  .catch(function (error) {
    console.log(error);
  })
    }
})