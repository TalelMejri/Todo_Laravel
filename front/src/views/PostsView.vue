<!-- <template>
    <table> 
        <thead> 
            <th>
                <td>titel</td>
                <td>body</td>
                <td>published</td>
                <td>Actions</td>
            </th>
        </thead>
        <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <td>{{post.titel}}</td>
                    <td>{{post.body}}</td>
                    <td>
                        <button>delete</button>
                        <button>edit</button>
                    </td>
                </tr>
        </tbody>
    </table>
    
  </template>
  
  <script>
     import "@/store/index";
    export default {
      name: 'post',
      data(){
        return{
            posts:[]
        }
      },
      methods:{
        created() {
            this.$store.dispatch('fetchposts').then(()=>{
                this.posts=this.$store.getters.posts;
            })
        }
      }
    }
  </script> -->
  <template>
    <v-data-table
        :headers="headers"
        :items="posts"
        :items-per-page="10"
        class="elevation-1"
    ></v-data-table>
</template>

<script>
import "@/store/index";
export default {
    name: "Posts",
    data() {
        return {
            headers: [
                {
                    text: "Title",
                    align: "left",
                    value: "title",
                },
                { text: "Body", value: "body" },
                { text: "Published", value: "published" },
                { text: "Actions", value: "actions" },
            ],
            posts: [],
        };
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            this.$store.dispatch("fetchposts").then((response) => {
               // this.posts=(this.$store.getters.posts).filter((v)=>v.user_id==this.$store.getters.user.id)
                this.posts = this.$store.getters.posts;
            });
        },
    },
};
</script>
  