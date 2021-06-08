const app = new Vue({

  el: '#app',

  data:{
    dischi: [],
  },

  created(){
    this.callApi('api.php');
  },

  methods:{
    callApi(url){
      axios.get(url)
      .then((resp)=> {
        console.log(resp);
        this.dischi.push(resp.data);
        console.log(this.dischi);
      })
      .catch((err)=>{
        console.log(err);
      })
    }
  }



})