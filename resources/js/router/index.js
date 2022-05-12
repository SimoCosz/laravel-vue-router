import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

import Posts from '../pages/PostsIndex.vue'
import Post from '../pages/PostShow.vue'
import Contact from '../pages/Contact.vue'
import NotFound from '../pages/404.vue'
import CategoryArchive from '../pages/CategoryArchive.vue'


const routes = [
  {
    path: '/posts',
    name: 'posts.index',
    component: Posts
  },
  {
    path: '/posts/:slug',
    name: 'post.show',
    component: Post,
  },
  {
    path: '/categories/:slug',
    name: 'categories.archive',
    component: CategoryArchive
  },
  {
    path: '/contact',
    name: 'contact',
    component: Contact
  },
  {
    path: '/*',
    component: NotFound
  }
]

const router = new VueRouter({
  mode: 'history',
  routes: routes
})

export default router