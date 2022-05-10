<template>
  <div class="app bg-slate-900 text-teal-200 p-5">
    <header>
      <nav>
        <ul class="flex justify-center items-center gap-3">
          <li class="border rounded border-white/30 px-2 cursor-pointer">Home</li>
          <li class="border rounded border-white/30 px-2 cursor-pointer">
            <router-link to="/posts">Post</router-link>
          </li>
          <li class="border rounded border-white/30 px-2 cursor-pointer">Category</li>
          <li class="border rounded border-white/30 px-2 cursor-pointer">
            <router-link :to=" {name: 'contact'} ">Contact</router-link>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <router-view></router-view>
    </main>
    <footer>
      &copy; Boolpress 2022
    </footer>
</div>
</template>

<script>


export default {

}
</script>

<style lang="scss" scoped>
.app{
  min-height: 100vh;
}
</style>