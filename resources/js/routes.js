import Vue from 'vue'
import Router from 'vue-router'
import AdminHome from './components/admin/AdminHome.vue'
import CategoryList from './components/admin/category/List.vue'
import AddCategory from './components/admin/category/New.vue'
import EditCategory from './components/admin/category/Edit.vue'

// FrontEnd Component
import PublicHome from './components/public/PublicHome.vue'
import BlogPost from './components/public/blog/BlogPost.vue'
import SinglePost from './components/public/blog/SingleBlog.vue'




// Post
import PostList from './components/admin/post/List.vue'
import AddPost from './components/admin/post/New.vue'
import EditPost from './components/admin/post/Edit.vue'

import HomePost from './components/public/home/HomePost.vue'

import ContactPage from './components/public/contact/ContactPage.vue'

export const routes = [
    {
        path: '/admin',
        component: AdminHome
    },
    {
        path: '/category-list',
        component: CategoryList
    },
    {
        path: '/add-category',
        component: AddCategory
    },
    {
        path: '/edit-category/:categoryid',
        component: EditCategory
    },
    // Post
    {
        path: '/post-list',
        component: PostList
    },
    {
        path: '/add-post',
        component: AddPost
    },
    {
        path: '/edit-post/:postid',
        component: EditPost
    },

    // Frontend Route
    {
        path: '/',
        redirect: { path: "home" }
    },
    {
        path: '/blog',
        component: BlogPost
    },
    {
        path: '/blog/:id',
        component: SinglePost
    },
    {
        path: '/categories/:id',
        component: BlogPost
    },

    {
        path: '/home',
        name: 'HomePost',
        component: HomePost
    },
    {
        path: '/contact',
        name: 'ContactPage',
        component: ContactPage
    },



];
