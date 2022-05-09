<template>
  <div class="app bg-slate-900 text-teal-200 p-5">
    <header>
      <nav>
        <ul class="flex justify-center items-center gap-3">
          <li class="border rounded border-white/30 px-2 cursor-pointer">Home</li>
          <li class="border rounded border-white/30 px-2 cursor-pointer">Posts</li>
          <li class="border rounded border-white/30 px-2 cursor-pointer">Category</li>
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