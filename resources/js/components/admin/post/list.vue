<template>
    <div>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-12">
                    <div class="card">
                    <div class="header">
                        <h2 class="card-title">Post List</h2>
                        <div class="card-tools ml-2">
                            <router-link to="/admin-post" style="color:#fff"><button class="btn btn-primary btn-sm">Add Post</button></router-link>
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
                                    <td><img :src="post.image" alt="" width="50" height="50"></td>
                                    <td>
                                        <!-- bind korar jonno amra clone symbol ta use korteci thats mean attribute binding -->
                                        <a href="" class="fa fa-edit"></a>
                                    <a href="" class="fa fa-trash"></a>
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

    }
}
</script>>