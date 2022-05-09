<template>
<div>
  <div class="container flex justify-center py-10">
    <h1 class="uppercase font-bold text-xl my-5">Ultimi Posts</h1>
  </div>
  <div class="container grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
    <PostCard v-for="post in posts" :key="post.id" :post="post" />
  </div>
  <div class="container py-4">
    <p>last page: {{lastPage}}</p>
    <p>current page: {{currentPage}}</p>
  </div>
</div>
</template>

<script>
import PostCard from '../components/PostCard.vue'

export default {
  components: {
    PostCard,
  },

  data(){
    return{
      posts: [],
      lastPage: 0,
      currentPage: 1,
    }
  },

  methods:{
    fetchPosts() {
      
      axios.get('/api/posts')
      .then( res => {
        const { posts } = res.data
        const { data, last_page, current_page } = posts
        this.posts = data
        this.lastPage = last_page
        this.currentPage = current_page
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