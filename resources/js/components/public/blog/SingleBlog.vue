<template>
<span id="singleBlog">

 <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Post right sidebar</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Blog</a><i class="icon-angle-right"></i></li>
              <li class="active">Blog post right sidebar</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

 <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
            <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#">{{singlePost.title}}</a></h3>
                    </div>
                    <img :src="`images/post/${singlePost.image}`" alt="" width="300" height="300" />
                  </div>
                  <p>{{singlePost.description | sortlength(500,"....") }} </p>
                  <blockquote>
                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
                  </blockquote>
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li v-if="singlePost.user"><i class="icon-user"></i><a href="#"> {{ singlePost.user.name }}</a></li>
                      <li v-if="singlePost.category"><i class="icon-folder-open"></i><a href="#"> {{singlePost.category.name}}</a></li>
                      <li><i class="icon-tags"></i><a href="#">{{singlePost.created_at | timeformate  }}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>

<!-- include blog sidebar  -->
 <BlogSidebar/>

        </div>
      </div>
    </section>

</span>
     
</template>

<script>
import BlogSidebar from "./BlogSidebar.vue"
export default {
    name:"SingleBlog",
    components:{
        BlogSidebar
    },
    mounted(){
        this.$store.dispatch('SingleBlogPost',this.$route.params.id);
    },
    computed:{
        singlePost(){
            return this.$store.getters.SinglePost
        }
    },
    methods:{

    }


}
</script>>