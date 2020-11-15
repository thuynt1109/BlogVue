<template>
    <div>
        <section class="content">
            <div class="row justify-content-around" >
                <div class="col-8 ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách danh mục</h3>

                            <div class="card-tools">
                                <button class="btn btn-primary">
                                    <router-link to="/add-category" style="text-decoration:none" class="text-white">Thêm danh mục</router-link>
                                </button>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        <select name="" id="" v-model="select" @change="deleteSelected">
                                            <option value="">Xem tất cả</option>
                                            <option value="">Xóa tất cả</option>
                                        </select><br>
                                        <input type="checkbox" @click.prevent="selectAll" v-model="all_select">
                                        <span v-if="all_select==false">Chọn tất cả</span>
                                        <span v-else>Hủy chọn</span>
                                    </th>
                                    <th>Stt</th>
                                    <th>Tên</th>
                                    <th>Ngày tạo</th>
                                    <th>Tác vụ</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr v-for="(category,index) in getallCategory" :key="category.id">
                                    <td><input type="checkbox" v-model="categoryItem" :value="category.id" ></td>
                                    <td>{{index+1}}</td>
                                    <td>{{category.cat_name}}</td>
                                    <td>{{category.created_at | timeformat}}</td>
                                    <td>
                                       <button class="btn btn-success "><router-link :to="`/edit-category/${category.id}`" class="text-white " style="text-decoration:none">Sửa</router-link> </button>
                                       <button class="btn btn-danger "> <a class="text-white" @click.prevent = "deletecategory(category.id)" >Xóa</a> </button>
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
        data(){
            return{
                categoryItem:[],
                select:'',
                all_select:false
            }
        },
        mounted(){
            this.$store.dispatch("allCategory")
        },
        computed:{
           getallCategory(){
            return this.$store.getters.getCategory
           }
        },
        methods:{
            deletecategory(id){
               axios.get('/category/'+id)
                   .then(()=>{
                       this.$store.dispatch("allCategory")
                       toast({
                           type: 'success',
                           title: 'Xóa danh mục thành công!'
                       })
                   })
                   .catch(()=>{

                   })
            },
            deleteSelected(){
                console.log(this.categoryItem)
               axios.get('/deletecategory/'+this.categoryItem)
                   .then(()=>{
                       this.categoryItem = []
                       this.$store.dispatch("allCategory")
                       toast({
                           type: 'success',
                           title: 'Đã xóa thành công!'
                       })

                   })
            },
            selectAll(){
                if(this.all_select==false){
                    this.all_select = true
                    for(var category in this.getallCategory){
                        this.categoryItem.push(this.getallCategory[category].id)
                    }
                }else{
                    this.all_select = false
                    this.categoryItem = []
                }


            }
        }
    }
</script>

<style scoped>
</style>
