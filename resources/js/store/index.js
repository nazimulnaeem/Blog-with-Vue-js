import axios from "axios"
export default{
    state: {
        category:[],
        post:[],


        ///====== state for frontend ======= ///
        BlogPost:[],
        SinglePost:[],
    },


    getters: {
        // method for category
        getCategory(state){
            return state.category
        },
        // method for post 
        getpost(state){
            return state.post
        },


        /// ======== getters for frontend =========== ////
        BlogPost(state){
            return state.BlogPost
        },
        SinglePost(state){
            return state.SinglePost
        }

    },


    actions:{

        // method for category
            allCategory(context){
            // category route ta web.php theke nia esechi. 
            // category route er mardhome category table theke all data json formate e nia esechi.
            axios.get('/category')
            .then((response)=>{
                // categories come from categoryController all_category method
                // console.log(response.data.categories)
                context.commit('categories',response.data.categories)
            })
        },

        // method for post from post->list folder
        getAllPost(context){
            axios.get('/post')
            .then((response)=>{
                console.log(response.data)
                context.commit('allposts',response.data.posts)
            })
        },


        ///// ======= action for frontend ========= ////
        getBlogPost(context){
            axios.get('/blog-post')
            .then((response)=>{
                context.commit('blogposts',response.data.posts)
            })
        },
        SingleBlogPost(context,payload){
            axios.get('/single-post/'+payload)
            .then((response)=>{
                context.commit('Single_Blog_Post',response.data.post)
            })
        }


    },


    mutations: {
        categories(state,data){
            return state.category = data
        },

        // method come from action commit first parameter.
        blogposts(state,data){
            return state.post = data
        },
        

        /// ======== mutation for frontend ======== //////
        blogposts(state,data){
            return state.BlogPost = data
        },
        Single_Blog_Post(state,data){
            return state.SinglePost = data
        }

    }
}