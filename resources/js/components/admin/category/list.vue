<template>
    <div>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-12">
                    <div class="card">
                    <div class="header">
                        <h2 class="card-title">Category List</h2>
                        <div class="card-tools ml-2">
                            <router-link to="/add-category" style="color:#fff"><button class="btn btn-primary btn-sm">Add Category</button></router-link>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>SL</th>
                                    <th>Category Name</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(category,index) in getallCategory" :key="category.id">
                                    <td>{{ index + 1 }}</td>
                                    <td>{{ category.name }}</td>
                                    <!-- timeformate comes from app.js file for filtering time and show in formate wise -->
                                    <td>{{ category.created_at | timeformate }}</td>
                                    <td>
                                        <!-- bind korar jonno amra clone symbol ta use korteci thats mean attribute binding -->
                                        <router-link :to="`/edit-category/${category.id}`"><a href="" class="fa fa-edit"></a></router-link>
                                    <a href="" @click.prevent="deleteCategory(category.id)" class="fa fa-trash"></a>
                                    </td>
                                </tr> 
                                <!-- <tr>
                                    <td>1</td>
                                    <td>{{ getallCategory }}</td>
                                    <td><a href="" class="fa fa-edit"></a>
                                    <a href="" class="fa fa-trash"></a>
                                    </td>
                                </tr>    -->
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

            <script type="text/javscript">
            export default {
                name: "list",
                mounted(){
                      this.$store.dispatch("allCategory")
                // this.$store.getters.getCategory
                },
                computed:{
                    getallCategory(){
                      return  this.$store.getters.getCategory
                        // return this.$store.getCategory
                    }
                },
                methods:{
                    deleteCategory(id){
                        axios.get('category/'+id)
                        .then(()=>{
                            this.$store.dispatch("allCategory")
                            Toast.fire({
                            icon: 'success',
                            title: 'Category deleted successfully'
                            })
                        })
                    }
                    }
            }
            </script>