<template>
<span id="contactpage">
   <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">

            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">Liên hệ</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">


      <div class="container">
          <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.654569198036!2d106.68075971359534!3d10.761082962422199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b91dddf0b%3A0x5138ed521c61d678!2zMjgwIEFuIEQuIFbGsMahbmcsIFBoxrDhu51uZyA0LCBRdeG6rW4gNSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1605263204328!5m2!1svi!2s" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="row">
          <div class="span12">
            <h4 class="m-4"><strong>Liên hệ với chúng tôi bằng cách điền vào biểu mẫu vào bên dưới</strong></h4>

            <form action="" method="post" role="form" class="contactForm " @submit.prevent="addContact()">
              <div id="sendmessage"></div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span6 form-group">
                  <input type="text" v-model="form.name" name="name" :class="{ 'is-invalid': form.errors.has('name') }" class="form-control" id="name" placeholder="Tên" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  />
                 <has-error :form="form" field="name"></has-error>
                </div>
                 <div class="span6 form-group">
                  <input type="text"  v-model="form.phone" name="phone" :class="{ 'is-invalid': form.errors.has('phone') }" class="form-control" id="phone" placeholder="Số điện thoại" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                 <has-error :form="form" field="phone"></has-error>
                </div>
                <div class="span6 form-group">
                  <input type="email" class="form-control"  v-model="form.email" name="email" :class="{ 'is-invalid': form.errors.has('email') }" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                 <has-error :form="form" field="email"></has-error>
                </div>
                <div class="span6 form-group">
                  <input type="text"  v-model="form.address" name="address" :class="{ 'is-invalid': form.errors.has('address') }" class="form-control" id="address" placeholder="Địa chỉ" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                 <has-error :form="form" field="address"></has-error>
                </div>

                <div class="span12 margintop10 form-group">
                  <textarea class="form-control"  v-model="form.message" name="message" :class="{ 'is-invalid': form.errors.has('message') }" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Nhập nội dung..."></textarea>
                 <has-error :form="form" field="message"></has-error>
                  <p class="text-center">
                    <button class="btn btn-large btn-primary margintop10" type="submit">Gửi</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</span>
</template>
<script>
export default {
    name:"ContactPage",
    components:{

    },
    data(){
            return {
                form: new Form({
                    name:'',
                    phone:'',
                    email:'',
                    address:'',
                    message:'',

                })
            }
        },
        methods:{
            addContact(){
                this.form.post('/contact')
                    .then((response)=>{
                       this.$router.push('/contact')
                        toast({
                            type: 'success',
                            title: 'Thêm danh mục thành công'
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
