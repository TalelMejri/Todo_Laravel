<template>
    <v-app id="inspire">
       <v-content>
          <v-container fluid fill-height>
             <v-layout align-center justify-center>
                <v-flex xs12 sm8 md4>
                   <v-card class="elevation-12">
                      <v-toolbar dark color="primary">
                         <v-toolbar-title>Login form</v-toolbar-title>
                      </v-toolbar>
                      <v-card-text>
                         <v-form>
                            <v-text-field
                               v-model="cardential.email"
                               name="login"
                               label="Login"
                               type="text"
                            ></v-text-field>
                            <v-text-field
                               id="password"
                                v-model="cardential.password"
                               name="password"
                               label="Password"
                               type="password"
                            ></v-text-field>
                         </v-form>
                      </v-card-text>
                      <v-card-actions>
                         <v-spacer></v-spacer>
                         <v-btn color="primary" @click="firelogin()">Login</v-btn>
                      </v-card-actions>
                   </v-card>
                </v-flex>
             </v-layout>
          </v-container>
       </v-content>
    </v-app>
 </template>

 <script>
 import "@/store/index";
 export default{
    data(){
        return{
            cardential:{
                email:"",
                password:""
            }
        }
    },
    methods:{
        firelogin(){
          /*  axios.post('login',this.cardential).then((response)=>{
                console.log(response);
            })*/
            this.$store.dispatch("login",this.cardential).then((res)=>{
               this.$store.getters.role==1 ? this.$router.push("/") :  this.$router.push("/about"); 
                //console.log("");
            })
        }
    }
 }
</script>