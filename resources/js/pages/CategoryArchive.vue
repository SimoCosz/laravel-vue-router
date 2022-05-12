<template>
<Layout>
  <div>
    <div class="container py-10">
      <h1 v-if="category" class="text-orange-400 uppercase text-3xl"> {{ category.name }} </h1>
        <router-link v-for="post in posts" :key="post.id" tag="li" :to="{name: 'post.show', params: {slug: post.slug} }"
        class="border
         border-white/30
         rounded-sm
         my-5
         p-3
         cursor-pointer
         shadow-xl
         shadow-black
         hover:bg-cyan-300/70
         hover:text-slate-900
         hover:shadow-white/20
         hover:scale-105
         ease-in duration-200
         uppercase
         hover:underline" >
          {{ post.title }}
        </router-link>
    </div>
  </div>
</Layout>
</template>

<script>
import Layout from '../layouts/Layout.vue'

  export default {
    components: {
      Layout,
    },

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
          this.posts = posts;
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
ul, li{
  list-style: none;
}
</style>