import axios from "axios"
export default{
    state: {
        category:[],
    },
    getters: {
        getCategory(state){
            return state.category
        }
    },
    actions:{
        // allCategory(state,payload){
            allCategory(context){
            // category route ta web.php theke nia esechi. 
            // category route er mardhome category table theke all data json formate e nia esechi.
            axios.get('/category')
            .then((response)=>{
                // categories come from categoryController all_category method
                // console.log(response.data.categories)
                context.commit('categories',response.data.categories)
            })
        }
    },
    mutations: {
        categories(state,data){
            return state.category = data
        }

    }
}