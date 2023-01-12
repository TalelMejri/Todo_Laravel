<template>
  <v-app>
    <v-app-bar
      app
      color="primary"
      dark
    >
      <div class="d-flex align-center">
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          contain
          src="https://cdn.vuetifyjs.com/images/logos/vuetify-logo-dark.png"
          transition="scale-transition"
          width="40"
        />

        <v-img
          alt="Vuetify Name"
          class="shrink mt-1 hidden-sm-and-down"
          contain
          min-width="100"
          src="https://cdn.vuetifyjs.com/images/logos/vuetify-name-dark.png"
          width="100"
        />
      </div>

      <v-spacer></v-spacer>
      <button @click="log()">log</button>
      <h1 v-if="logged">
        welcome Admin
      </h1>
      <h1 v-else>
        Hiiii
      </h1>

      <v-btn
        router to="/login"
        text
      >
        <span class="mr-2">Login</span>
        <v-icon>mdi-open-in-new</v-icon>
      </v-btn>
    </v-app-bar>

    <v-main>
      <router-view/>
    </v-main>
  </v-app>
</template>

<script>
 import "@/store/index";
export default {
  name: 'App',

  data: () => ({
    
  }),
  methods:{
    log(){
       return this.$store.dispatch("logout");
      }
  },
  computed:{
    logged(){
      return this.$store.getters.token;
    }
  }
};
</script>
