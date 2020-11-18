export default {
    state: {
        category: [],
        post: [],
        blogpost: [],
        singlepost: [],
        allcategories: [],
        latestpost: [],
        contact: [],
        blogcontact: [],
    },
    getters: {
        getCategory(state) {
            return state.category
        },
        getAllPost(state) {
            return state.post
        },
        getAllContact(state) {
            return state.contact
        },
        getblogPost(state) {
            return state.blogpost
        },
        getblogContact(state) {
            return state.blogcontact
        },
        singlepost(state) {
            return state.singlepost
        },
        allcategories(state) {
            return state.allcategories
        },
        latestpost(state) {
            return state.latestpost
        }

    },
    actions: {
        allCategory(context) {
            axios.get('/category')
                .then((response) => {
                    context.commit('categoreis', response.data.categories)
                })
        },
        gelAllPost(context) {
            axios.get('/post')
                .then((response) => {
                    console.log(response.data)
                    context.commit('allpost', response.data.posts)
                })
        },
        gelAllContact(context) {
            axios.get('/all-contact')
                .then((response) => {
                    console.log(response.data)
                    context.commit('allcontact', response.data.contacts)
                })
        },
        getblogPost(context) {
            axios.get('/blogpost')
                .then((response) => {
                    // console.log(response.data)
                    context.commit('getblogPost', response.data.posts)
                })
        },

        getPostById(context, payload) {
            axios.get('/singlepost/' + payload)
                .then((response) => {
                    context.commit('siglePost', response.data.post)
                })
        },

        allcategories(context) {
            axios.get('/categories')
                .then((response) => {

                    context.commit('allcategories', response.data.categories)
                })
        },
        getPostByCatId(context, payload) {
            axios.get('/categorypost/' + payload)
                .then((response) => {
                    console.log(response.data.posts)
                    context.commit('getPostByCatId', response.data.posts)
                })
        },
        SearchPost(context, payload) {
            axios.get('/search?s=' + payload)
                .then((response) => {
                    context.commit('getSearchPost', response.data.posts)
                })

        },
        latestPost(context) {
            axios.get('/latestpost')
                .then((response) => {
                    // console.log(response.data)
                    context.commit('latestpost', response.data.posts)
                })
        }
    },
    mutations: {
        categoreis(state, data) {
            return state.category = data
        },
        allpost(state, payload) {
            return state.post = payload
        },
        allcontact(state, payload) {
            return state.contact = payload
        },
        getblogPost(state, payload) {
            return state.blogpost = payload
        },
        siglePost(state, payload) {
            return state.singlepost = payload
        },
        allcategories(state, payload) {
            return state.allcategories = payload
        },
        getPostByCatId(state, payload) {
            state.blogpost = payload
        },
        getSearchPost(state, payload) {
            state.blogpost = payload
        },
        latestpost(state, payload) {
            state.latestpost = payload
        }


    }
}