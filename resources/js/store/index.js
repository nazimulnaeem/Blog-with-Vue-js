import axios from "axios"
export default{
    state: {
        category:[],
        post:[],
    },


    getters: {
        // method for category
        getCategory(state){
            return state.category
        },
        // method for post 
        getpost(state){
            return state.post
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
        }
    },


    mutations: {
        categories(state,data){
            return state.category = data
        },

        // method come from action commit first parameter.
        allposts(state,data){
            return state.post = data
        }

    }
}