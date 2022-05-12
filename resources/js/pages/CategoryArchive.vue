<template>
  <div>
    <div class="container">
      <h1 v-if="category"> {{ category.name }} </h1>
      Pagina archivio della categoria
      {{$route.params.slug}}
    </div>
  </div>
</template>

<script>
  export default {
    data(){
      return {
        category: null,
        posts: []
      }
    },
    
    methods: {
      
      fetchPostByCategorySlug(){
        axios.get(`/api/categories/${this.$route.params.slug}/posts`)
        .then(res => {
          const {posts, category} = res.data;
          this.post = posts;
          this.category = category;
        })
      }

    },

    beforeMount(){
      this.fetchPostByCategorySlug();
    }

  }
</script>

<style lang="scss" scoped>

</style>