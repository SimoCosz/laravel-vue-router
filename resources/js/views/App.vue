<template>
  <div class="app bg-teal-700 text-teal-200">
    <header>
      <nav>
        <ul>
          <li>Home</li>
          <li>Posts</li>
          <li>Category</li>
        </ul>
      </nav>
    </header>
    <main>
      <PostsIndex />
    </main>
    <footer>
      &copy; Boolpress 2022
    </footer>
</div>
</template>

<script>
import PostsIndex from "./PostsIndex.vue";

export default {
  components:{
    PostsIndex,
}
}
</script>

<style lang="scss" scoped>
.app{
  min-height: 100vh;
}
</style>