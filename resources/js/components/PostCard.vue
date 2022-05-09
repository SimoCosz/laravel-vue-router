<template>
<div class="card post rounded-lg border border-white/30 bg-black/50 overflow-hidden">
  <img src="https://picsum.photos/300/150" class="w-full object-cover" alt="">
  <div class="card__body p-3">
    <h4 class="post__title font-bold uppercase my-3 text-xl"> {{ post.title }} </h4>
    <p v-if="post.category" class="text-orange-300 mb-2"> {{ post.category.name }} </p>
    <ul class="tags flex gap-3 item-center">
      <li class="tag rounded-full bg-orange-300/60 px-3 text-xs" v-for="tag in post.tags" :key="tag.id"> {{ tag.name }} </li>
    </ul>
  </div>
</div>
  
</template>

<script>
export default {
  props:{
    post:{
      type:Object,
      required: false
    }
  }
}
</script>

<style lang="scss" scoped>

</style>