import "@/plugins/axios";

export default{
    state:{
       posts:[]
    },
    mutations:{
        SET_POSTS(state,posts){
            state.posts=posts;
        },
    },
    actions:{
        fetchposts({commit}){
            return new Promise((resolve, reject)=>{
                axios.get("posts").then((response)=>{
                    commit('SET_POSTS',response.data.data);
                    console.log(response);
                    resolve(response)
                }) .catch((error)=>{
                    reject(error);
                })
            })
        },
       
    },
    getters:{
        posts(state){
            return state.posts;
        },
      
    }
}