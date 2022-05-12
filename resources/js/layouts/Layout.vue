<template>
    <div class="app bg-slate-900 text-teal-200 p-5">
      <header>
        <nav>
          <ul class="flex justify-center items-center gap-3">
            <li class="hover:bg-cyan-300/70 hover:text-slate-900 ease-in duration-300 border rounded border-white/30 px-2 cursor-pointer">Home</li>
            <li class="hover:bg-cyan-300/70 hover:text-slate-900 ease-in duration-300 border rounded border-white/30 px-2 cursor-pointer">
              <router-link to="/posts">Post</router-link>
            </li>
            <li class="hover:bg-cyan-300/70 hover:text-slate-900 ease-in duration-300 border rounded border-white/30 px-2 cursor-pointer">Category</li>
            <li class="hover:bg-cyan-300/70 hover:text-slate-900 ease-in duration-300 border rounded border-white/30 px-2 cursor-pointer">
              <router-link :to=" {name: 'contact'} ">Contact</router-link>
            </li>
          </ul>
        </nav>
      </header>
      <main>
  
        <slot />
  
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

<style scoped lang="scss">
.app{
  min-height: 100vh;
}
</style>