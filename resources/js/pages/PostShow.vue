<template>
  <div class="">
    <div v-if="!loading">
      {{post.title}}
    </div>
  </div>
</template>

<script>

export default {
  data(){
    return {
      post: null,
      loading: true
    }
  },
  
  beforeMount(){
    
    axios.get(`/api/posts/${ this.$route.params.slug }`)
    .then(res =>{
      const { post } = res.data
      this.post = post
      this.loading = false
    })
    .catch(err=>{
      console.warn(err)
    });
  }
}
</script>

<style>

</style>