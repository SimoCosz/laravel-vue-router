<template>
  <Layout>
    <div>
      <div class="container pt-10">
        <ul class="flex flex-wrap gap-4 items-center justify-center">
          <router-link tag="li" :to="{ name: 'categories.archive', params:{slug: category.slug} }" v-for="category in categories" :key="category.id"
          class="cursor-pointer
            px-2
            rounded-full
            border
            border-white/30
            text-xs
            whitespace-nowrap
            hover:bg-orange-300/70
            hover:text-slate-900
            hover:shadow-white/20
            hover:scale-125
            ease-in duration-200">
            {{category.name}}
          </router-link>
        </ul>
      </div>
      <div class="container flex justify-center py-10">
        <h1 class="uppercase font-bold text-xl my-5">Ultimi Posts</h1>
      </div>
      <div class="container grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
        <PostCard v-for="post in posts" :key="post.id" :post="post" />
      </div>
      <div class="container py-4">
        <ul class="pagination flex justify-center item-center gap-4">
          <li @click="fetchPosts(n)" :class="[ currentPage === n ? 'bg-orange-400' : 'bg-white/30', 'dot cursor-pointer rounded-full w-10 h-10 flex items-center justify-center text-sm']" v-for="n in lastPage" :key="n" > {{ n }} </li>
        </ul>
      </div>
    </div>
  </Layout>
</template>

<script>
import PostCard from '../components/PostCard.vue'
import Layout from '../layouts/Layout.vue'

export default {
  components: {
    PostCard,
    Layout
  },

  data(){
    return{
      posts: [],
      categories: [],
      lastPage: 0,
      currentPage: 1,
    }
  },

  methods:{
    fetchPosts(page = 1) {
      
      axios.get('/api/posts', {
        params: {
          page
        }
      })
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

    },

    fetchCategories(){
      axios.get('/api/categories')
      .then(res => {
        const {categories} = res.data
        this.categories =categories
      })
    }
  },

  mounted(){
    this.fetchPosts();
    this.fetchCategories();
  }

}
</script>

<style scoped lang="scss">

</style>