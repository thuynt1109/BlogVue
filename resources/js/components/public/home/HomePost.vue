<template>
<span id="homepost">
    <!-- end header -->
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li><i class="icon-home"></i><i class="icon-angle-right"></i></li>
                        <li>
                            Trang chủ<i class="icon-angle-right"></i>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <h5 style="font-weight:bold">TIN NỔI BẬT</h5>
            </div>
            <div class="row">
                <div class="span6" v-for="(post,index) in blogpost" v-if="index<4">

                    <div class="post-heading">
                        <h6>
                            <router-link :to="`/blog/${post.id}`" href="#">{{post.title}}</router-link>
                        </h6>
                    </div>
                    <div class="post-image">
                        <router-link :to="`/blog/${post.id}`" href="#"><img :src="`uploadimage/${post.photo}`" alt="" /></router-link>
                    </div>
                    <div>
                        <p>
                            {{post.description | sortlength(200,"...")}}
                        </p>
                    </div>

                    <router-link :to="`/blog/${post.id}`" class="pull-right">Xem chi tiết<i class="icon-angle-right"></i></router-link>
                </div>
            </div>

        </div>
    </section>
</span>
</template>

<script>
export default {
    name: "HomePost",
    components: {

    },
    mounted() {
        this.$store.dispatch('getblogPost');
    },
    computed: {
        blogpost() {
            return this.$store.getters.getblogPost
        }
    },
    methods: {
        getAllCategoryPost() {
            if (this.$route.params.id != null) {
                this.$store.dispatch('getPostByCatId', this.$route.params.id);
            } else {
                this.$store.dispatch('getblogPost');
            }

        }
    },
    watch: {
        $route(to, from) {
            this.getAllCategoryPost();
        }
    }
}
</script>

<style scoped>
</style>
