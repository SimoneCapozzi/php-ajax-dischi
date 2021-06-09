const app = new Vue({

  el: '#app',

  data:{
    albums: [],
    genres: [],
    genreToSearch: 'all',
  },

  created(){
    this.callApi('api.php');
  },

  methods:{
    callApi(url){
      axios.get(url,{
        params:{
          genre: this.genreToSearch
        }
      })
      .then((resp)=> {
        console.log(resp);
        this.albums = resp.data.albums;
        this.genres = resp.data.genres;
      })
      .catch((err)=>{
        console.log(err);
      })
    }
  }



})