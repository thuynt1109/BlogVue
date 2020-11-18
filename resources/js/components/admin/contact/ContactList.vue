<template>
    <div>
        <section class="content">
            <div class="row justify-content-around" >
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách liên hệ</h3>


                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>

                                    <th>Stt</th>
                                    <th>Tên</th>
                                    <th>Điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Nội dung</th>
                                    <th>Ngày đăng</th>
                                    <th>Trạng thái</th>
                                    <th>Tác vụ</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr v-for="(contact,index) in allcontact">
                                    <td>{{index+1}}</td>
                                    <td >{{contact.name}}</td>
                                    <td>{{contact.phone}}</td>
                                    <td>{{contact.email}}</td>
                                    <td>{{contact.address}}</td>
                                    <td>{{contact.message| sortlength(40,"....")}}</td>
                                    <td>{{contact.created_at}}</td>
                                     <td class="text-center">
                                         <div class="form-check" style="font-size:20px">

                                   <input v-if="contact.status==1" type="checkbox" class="form-check-input "  id="exampleCheck1" checked>
                                    <input v-else type="checkbox" class="form-check-input "  id="exampleCheck1" >
                                    </div></td>
                                    <td class="d-flex">
                                        <button class="btn btn-success mr-2 ">Xem chi tiết</button>
                                        <button class="btn btn-danger ">
                                            <a href="" @click.prevent = "deleteContact(contact.id)" class="text-white " >
                                                Xóa
                                                </a>
                                                </button>


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
        mounted(){
            this.$store.dispatch('gelAllContact')
        },
        computed:{
            allcontact(){
                return this.$store.getters.getAllContact
            }
        },
        methods:{
            // ourImage(img){
            //     return "uploadimage/"+img;
            // },
            deleteContact(id){
               axios.get('/delete-contact/'+id)


                   .then(()=>{
                       this.$store.dispatch('gelAllContact')
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
