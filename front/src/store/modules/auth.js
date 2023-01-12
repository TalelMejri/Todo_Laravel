import "@/plugins/axios";
import router from "@/router";
export default{
    state:{
        user:localStorage.getItem("user")??null,
        token:localStorage.getItem("token")??null,
        isAuth:localStorage.getItem("user") && localStorage.getItem("token") 
    },
    mutations:{
        SET_USER(state,user){
            state.user=user;
        },
        SET_TOKEN(state,token){
            state.token=token;
        },
        SET_LOGGEDIN(state,isAuth){
            state.isAuth=isAuth;
        },
        LOGIN(state,payloder){
            state.user=payloder.user;
            state.token=payloder.token;
            state.isAuth=true;
            router.push({name:"post"});
        },
        LOGOUT(state){
            state.user=null;
            state.token=null;
            state.isAuth=false;
            router.push({name:"login"});
        }
    },
    actions:{
        login({commit},payloder){
            return new Promise((resolve, reject)=>{
                axios.post("login",payloder).then((response)=>{
                    const{user,token}=response.data;
                    commit('LOGIN',{user,token});
                    localStorage.setItem("user", JSON.stringify(user));
                    localStorage.setItem("token",token);
                    resolve(response)
                }) .catch((error)=>{
                    reject(error);
                })
            })
        },
        logout({commit}){
            return new Promise((resolve, reject)=>{
                axios.post("logout").then((response)=>{
                    commit('LOGOUT');
                    localStorage.removeItem("user");
                    localStorage.removeItem("token");
                    resolve(response);
                }).catch((error)=>{ 
                    reject(error);
                })
            })
        }
    },
    getters:{
        user(state){
            return state.user;
        },
        token(state){
            return state.token;
        },
        isAuth(state){
            return state.isAuth;
        }, 
        role(state){
            return state.user?.is_admin==1;
        }
    }
}