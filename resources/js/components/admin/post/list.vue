<template>
    <div>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-12">
                    <div class="card">
                    <div class="header">
                        <h2 class="card-title ml-2">Post List</h2>
                        <div class="card-tools ml-2">
                            <router-link to="/add-post" style="color:#fff"><button class="btn btn-primary btn-sm">Add New Post</button></router-link>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>SL</th>
                                    <th>User Name</th>
                                    <th>Category</th>
                                    <th>Post Title</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(post,index) in getallpost" :key="post.id">
                                    <td>{{ index + 1}}</td>
                                    <td v-if="post.user">{{ post.user.name }}</td>
                                    <td v-if="post.category">{{ post.category.name }}</td>
                                    <td>{{post.title | sortlength(20,"....")}}</td>
                                    <td>{{post.description | sortlength(35,"....")}}</td>
                                    <!-- <td><img :src="postImage(post.image)" alt="" width="50" height="50"></td> -->
                                    <td><img :src="postImage(post.image)" alt="" width="50" height="50"></td>
                                    <td>
                                        <!-- bind korar jonno amra clone symbol ta use korteci thats mean attribute binding -->
                                       <router-link :to="`/post-edit/${post.id}`"> <a href="" class="fa fa-edit"></a></router-link>
                                    <a href="" @click.prevent="PostDelete(post.id)" class="fa fa-trash"></a>
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

            <script>
            export default {
                name: "list",
                mounted(){
                    this.$store.dispatch("getAllPost")
                },
                computed:{
                    getallpost(){
                    return this.$store.getters.getpost
                    }
                },
                methods:{
                    postImage(image){
                        return "images/post/"+image;
                    },
                    PostDelete(id){
                        axios.get(`/post_delete/`+id)
                        .then(() => {
                             this.$store.dispatch("getAllPost")
                                swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Post delete Successfully',
                                showConfirmButton: false,
                                timer: 1500
                                })
                        })
                    }
                }
            }
            </script>>