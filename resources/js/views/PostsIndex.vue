<template>
<div>
  <div class="container">
    <h1>Ultimi Posts</h1>
  </div>
  <div class="container">
    <div v-for="post in posts" :key="post.id">
      {{ post.title }}
    </div>
  </div>
</div>
</template>

<script>
import Axios from "axios";


export default {

  data(){
    return{
      posts: []
    }
  },

  methods:{
    fetchPosts() {
      
      Axios.get('api/posts')
      .then( res => {
        console.log(res.data)
      })
      .catch( err => {
        console.warn(err)
      })

    }
  },

  mounted(){
    this.fetchPosts();
  }

}
</script>

<style scoped lang="scss">

</style>