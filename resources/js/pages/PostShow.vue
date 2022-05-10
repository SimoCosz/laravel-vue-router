<template>
  <div class="">
    <div v-if="!loading" class="container flex flex-col items-start py-3">
      <h1 class="text-3xl uppercase self-center text-cyan-500 mt-10"> {{post.title}} </h1>
      <p v-if="post.category" class="text-lg text-orange-300 mt-5"><span class="text-white">Categoria:</span> {{post.category.name}} </p>
      <div class="flex gap-3 items-center">
        <p v-for="tag in post.tags" :key="tag.id" class="after:content-[','] text-sm text-cyan-200/30"> {{tag.name}} </p>
      </div>
      <div class="my-5">
        <h2>Trama:</h2>
        <div>
          {{post.content}}
        </div>
      </div>
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