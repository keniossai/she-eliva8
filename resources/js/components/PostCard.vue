<script setup>
import {ref} from 'vue';
import axios from 'axios'
import { useLocalStorage } from '@vueuse/core'

const props = defineProps(['post', 'createdAt', 'isGuest']);
const post = useLocalStorage(`post-${props.post.id}`, props.post)

const addToFavorite = async (postId) => {
    const response = await axios.post(`/favorite/${postId}`);
    post.value = response.data.post
};
</script>
<script>
    function clearLocalStorage() {
      localStorage.clear();
    };
    window.onload = function() {
      clearLocalStorage();
    };
</script>

<template>
    <div class="card">
        <a :href="`/post/${post.slug}`">
            <img :src="`/storage/post/${post.image}`" class="card-img-top " alt="" />
        </a>
        <div class="card-body px-0">
            <ul class="category-tag-list d-flex" >
                <li class="category-tag-name flex-grow-1">
                <a :href="`/category-posts/${post.category.slug}`">{{ post?.category?.name }}</a>
                </li>
                <div class="comments_and_views">
                <li class="category-tag-name" >
                    <a v-if="isGuest" href="javascript:void(0)" class="likes" onclick="toastr.info('You need to login to like a post','Info',{
                            closeButton: true,
                            progressBar: true,
                        })">
                            <i class="fas fa-heart"></i> <span>{{ post?.favorite_to_user?.length }}</span>
                        </a>

                        <a v-else @click="addToFavorite(post.id)" style="background: none; border: none; color: rgb(247, 69, 69);" type="submit" class="likes space-x-1">
                            <i class="fas fa-heart"></i> <span> {{ post?.favorite_to_user.length }}</span>
                        </a>
                    </li>
                    <li class="category-tag-name">
                    <a href="" class="view" style="color: rgb(125, 128, 126);">
                        <i class="fas fa-eye"></i> <span> {{ post.view_count }}</span>
                    </a>
                    </li>
                    <li class="category-tag-name">
                    <a href="" class="comment">
                        <i class="fas fa-comment"> <span>{{ post?.comments?.length }}</span></i>
                    </a>
                    </li>
                </div>
            </ul>
            <h5 class="card-title title-font">
            <a :href="`/post/${post.slug}`">
                {{ post.title }}
            </a>
            </h5>
            <div class="author-date">
            <a class="author" :href="`/profile/${post.user.username}`">
                <img :src="`/storage/profile/${post?.user?.image}`" alt="profile" class="rounded-circle" />
                <span class="writer-name-small">{{post?.user?.name}}</span>
            </a>
            <a class="date" href="javascript:void(0)">
                <span>{{ createdAt }}</span>
            </a>
            </div>
        </div>
    </div>
</template>

