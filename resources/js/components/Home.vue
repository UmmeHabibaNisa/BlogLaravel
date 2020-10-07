<template>
    <div class="container">
        <div class="row">
            <div class="card mb-3" style="width: 1000px; margin-left: 50px;" v-for="(blog, index) in list" :key="index">
                <!--<img class="card-img-top" alt="1">-->
                <div class="card-body">
                    <img v-if="blog.image" v-bind:src="'/upload/'+ blog.image" class="card-img-top" >
                    <h3 class="card-title" v-model="title">{{ blog.title }}</h3>
                    <h6 v-model="category">{{ blog.category}}</h6>
                    <p class="card-text" v-model="description">{{ blog.description }}</p>
                    <div v-for="gallery in Object.values(blog.gallery)" style="display: inline-block; padding-right: 10px" >
                    <img  v-bind:src="'/upload/'+ gallery" height="150" width="auto">
                    </div>
                    <div v-for="tags in Object.values(blog.tags)">
                        <span class="badge badge-pill badge-primary" >{{ tags }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: '',
                description: '',
                image: '',
                category: '',
                tags: '',
                gallery:'',
                list: {

                },
            }
        },
        mounted() {
            console.log('Component mounted.');
            this.showBlog();
        },
        methods: {
            showBlog() {
                axios.get("/api/blogs").then(response => {
                    console.log(response.data);
                    this.list = response.data;
                }).catch(err => {
                    console.log(err);
                })
            },
        }
    }
</script>
