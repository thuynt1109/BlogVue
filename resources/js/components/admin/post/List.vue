<template>
    <div>
        <section class="content">
            <div class="row justify-content-around" >
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách tin tức</h3>

                            <div class="card-tools">
                                <button class="btn btn-primary">
                                    <router-link to="/add-post"  style="color:#fff ;text-decoration:none">Thêm tin tức mới</router-link>
                                </button>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>

                                    <th>Stt</th>
                                    <th>Người đăng</th>
                                    <th>Danh mục</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Ảnh</th>
                                    <th>Ngày đăng</th>
                                    <th>Tác vụ</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr v-for="(post,index) in allpost">
                                    <td>{{index+1}}</td>
                                    <td v-if="post.user">{{post.user.name}}</td>
                                    <td v-if="post.category">{{post.category.cat_name}}</td>
                                    <td>{{post.title | sortlength(20,"---")}}</td>
                                    <td>{{post.description | sortlength(40,"....")}}</td>
                                    <td><img :src="ourImage(post.photo)" alt="" width="40" height="50"></td>
                                    <td>{{post.created_at}}</td>
                                    <td class="d-flex">
                                        <button class="btn btn-success mr-2 "><router-link :to="`edit-post/${post.id}`" class="text-white " style="text-decoration:none">Sửa</router-link> </button>
                                        <button class="btn btn-danger "><a href="" @click.prevent = "deletePost(post.id)" class="text-white " >Xóa</a></button>


                                    </td>
                                </tr>
                                </tbody>


                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</template>

<script>
    export default {
        name: "List",
        mounted(){
            this.$store.dispatch('gelAllPost')
        },
        computed:{
            allpost(){
                return this.$store.getters.getAllPost
            }
        },
        methods:{
            ourImage(img){
                return "uploadimage/"+img;
            },
            deletePost(id){
               axios.get('/delete/'+id)


                   .then(()=>{
                       this.$store.dispatch('gelAllPost')
                       toast({
                           type: 'success',
                           title: 'Xóa thành công'
                       })
                   })
                   .catch(()=>{

                   })
            }

        }
    }
</script>

<style scoped>

</style>
