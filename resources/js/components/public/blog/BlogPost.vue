<template>
    <div id="blogPost">
      <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Blog left sidebar</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Blog</a><i class="icon-angle-right"></i></li>
              <li class="active">Blog with left sidebar</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">

            <article v-for="post in blogpost" :key="post.id">
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#">{{post.title}}</a></h3>
                    </div>
                    <img :src="`images/post/${post.image}`" alt="" width="200" height="200" />
                  </div>
                  <p>
                 {{ post.description | sortlength(500,"....") }}
                  </p>
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-calendar"></i><a href="#">{{ post.created_at | timeformate  }}</a></li>
                      <li v-if="post.user"><i class="icon-user"></i><a href="#"> {{ post.user.name }}</a></li>
                      <li v-if="post.category"><i class="icon-folder-open"></i><a href="#">{{ post.category.name }}</a></li>
                      <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                    </ul>
                    <router-link :to="`single-post/${post.id}`" href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></router-link>
                  </div>
                </div>
              </div>
            </article>
            
            <div id="pagination">
              <span class="all">Page 1 of 3</span>
              <span class="current">1</span>
              <a href="#" class="inactive">2</a>
              <a href="#" class="inactive">3</a>
            </div>
          </div>

 <!-- blog sidebar name e je vue file ta ache oita eikhane include korci -->
         <BlogSidebar/>


        </div>
      </div>
    </section>
    </div>
</template>


<script>
import BlogSidebar from "./BlogSidebar.vue"
export default {
    name:"BlogPost",
   
    components:{
        BlogSidebar
    },
    mounted(){
        this.$store.dispatch("getBlogPost")
    },
    computed:{
            blogpost(){
            return this.$store.getters.BlogPost
            }
    },
    methods:{

    },
    
}
</script>>