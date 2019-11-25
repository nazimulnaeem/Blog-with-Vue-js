<template>
<div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-8 ">
                <div class="card card-primary">
                    <div class="card-header"><h3>Add new Category</h3></div>
                <form class="mt-3" role="form" @click.prevent="addCategory()">
            <div class="form-group row ml-2">
                <label for="name" class="col-sm-2 col-form-label">Category Name</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" name="name" id="category_name" v-model="form.name" placeholder="Enter a category name">
               <has-error :form="form" field="name"></has-error>
                </div>
            </div>
            
            <div class="form-group row ml-2">
                <div class="col-md-2"></div>
                    <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">Save</button>
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
            name: "new",
            data(){
                return{
                    form: new Form({
                        name:'',
                    })
                }
            },
            methods:{
                addCategory(){
                    // Submit the form via a POST request
                 this.form.post('/add-category')
                    .then((response)=>{
                        this.$router.push('/category-list')
                            Toast.fire({
                            icon: 'success',
                            title: 'Category added successfully'
                            })
                          
                    })
                    .catch(()=>{    

                    })

                }
            }
        }
        </script>>
