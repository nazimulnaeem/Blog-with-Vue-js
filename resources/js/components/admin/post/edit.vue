<template>
<div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-10 ">
                <div class="card card-primary">
                    <div class="card-header"><h3>Update post - {{this.$route.params.postid}}</h3></div>
                <form class="mt-3" role="form" @submit.prevent="updatePost()" enctype="multipart/form-data">
            <div class="form-group row ml-2">
                <label for="title" class="col-sm-2 col-form-label">Post Title</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('title') }" name="title" id="post_title" v-model="form.title" placeholder="Enter post title">
               <has-error :form="form" field="title"></has-error>
                </div>
            </div> 
            <div class="form-group row ml-2">
                <label for="title" class="col-sm-2 col-form-label">Post Description</label>
                <div class="col-sm-8">
                <!-- <textarea type="text" class="form-control" rows="5" cols="30" :class="{ 'is-invalid': form.errors.has('description') }" name="description" id="post_description" v-model="form.description" placeholder="Enter post description">
                </textarea> -->
                <markdown-editor v-model="form.description"></markdown-editor>
               <has-error :form="form" field="description"></has-error>
                </div>
            </div>
             <div class="form-group row ml-2">
                <label for="title" class="col-sm-2 col-form-label">Select Category</label>
                <div class="col-sm-8">
                    <select class="form-control" name="" id="" :class="{ 'is-invalid': form.errors.has('category_id') }" v-model="form.category_id">
                        <option value="" disabled>Select One</option>
                        <option v-for="category in getallCategory" :key="category.id" :value="category.id">{{ category.name }}</option>
                    </select>
               <has-error :form="form" field="category_id"></has-error>
                </div>
            </div>
             <div class="form-group row ml-2">
                <label for="title" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-8">
                    <input type="file" @change="changeImage($event)"  :class="{ 'is-invalid': form.errors.has('image') }" name="image" id="post_image">
                    <!-- <img :src="updateImage()" alt="" width="80" height="80"> -->
                    <img :src="`postImage(post.image)`" alt="" width="80" height="80">
               <has-error :form="form" field="image"></has-error>
                </div>
            </div>
            
            <div class="form-group row ml-2">
                <div class="col-md-2"></div>
                    <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>
</template>


<script>
export default {
    name:'create',
    data(){
        return{
            form: new Form({
                title: '',
                description: '',
                category_id: '',
                image: '',
            })
        }
    },
              mounted(){
                      this.$store.dispatch("allCategory")
                    // this.getallCategory();
                },
                computed:{
                   getallCategory(){
                      return  this.$store.getters.getCategory
                    }
                },
                created(){
                    // this route get from the web route 
                    axios.get(`/post-edit/${this.$route.params.postid}`)
                    .then((response) =>{
                    this.form.fill(response.data.post)
                })
                },
                methods:{
                    
                    postImage(image){
                        return "images/post/"+image;
                    },
                    // this method for when i insert an image in database first show beside of my form
                   changeImage(event){
                    //    here i am using filereader onload . this site is developer.mozilla.org there have some content need to check it all 
                        let file = event.target.files[0];
                        // console.log(file)
                        if(file.size > 5242880){
                             swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Input an image this image size max 5MB!',
                            footer: '<a href>Thank you</a>'
                            })
                        }else{
                            let reader = new FileReader();
                        reader.onload = event => {
                            return this.image =event.target.result
                           
                        };

                        reader.readAsDataURL(file);
                        }
                        
                   },
                //    this method for add new post
                   updatePost(){
                    //    post route comes from the web route
                       this.form.post(`/post-update/${this.$route.params.postid}`)
                       .then((response) =>{
                        //    here i use router.js route 
                           this.$router.push('/post-list')
                            Toast.fire({
                            icon: 'success',
                            title: 'Post added successfully'
                            })
                       })
                       .catch(() =>{

                       })
                   },
                //    updateImage(){
                //        let img = this.form.image;
                //        if(img.length > 100){
                //            return this.form.image;
                //        }
                //        else{
                //            return `images/post/${this.form.image}`
                //        }
                //    }
                    }
}
</script>>