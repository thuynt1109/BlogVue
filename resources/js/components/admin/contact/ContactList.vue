<template>
    <div>
        <section class="content">
            <div class="row justify-content-around" >
                <div class="col-8 ">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Danh sách danh mục</h3>

                            <div class="card-tools">
                                <button class="btn btn-primary">
                                    <router-link to="/add-category" style="text-decoration:none" class="text-white">Thêm danh mục</router-link>
                                </button>
                            </div>
                        </div> -->

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
                                    <th>Điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Nội dung</th>
                                     <th>Tác vụ</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr v-for="(contact,index) in getallContact" :key="contact.id">
                                    <td><input type="checkbox" v-model="contactItem" :value="contact.id" ></td>
                                    <td>{{index+1}}</td>
                                    <td>{{contact.name}}</td>
                                    <td>{{contact.created_at | timeformat}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                       <!-- <button class="btn btn-success "><router-link :to="`/edit-category/${category.id}`" class="text-white " style="text-decoration:none">Sửa</router-link> </button> -->
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
        name: "ContactList",
        data(){
            return{
                contactItem:[],
                select:'',
                all_select:false
            }
        },
        mounted(){
            this.$store.dispatch("allContact")
        },
        computed:{
           getallContact(){
            return this.$store.getters.getContact
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
                    for(var contact in this.getallContact){
                        this.contactItem.push(this.getallContact[contact].id)
                    }
                }else{
                    this.all_select = false
                    this.contactItem = []
                }


            }
        }
    }
</script>

<style scoped>
</style>
