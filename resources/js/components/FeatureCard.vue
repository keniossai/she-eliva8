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

<!-- <script>
    function clearLocalStorage() {
      localStorage.clear();
    }
    window.onload = function() {
      clearLocalStorage();
    };
</script> -->

<template>
    <div class="">
        <div class="card simple-overlay-card">
            <a :href="`/post/${post.slug}`">
                <img :src="`/storage/post/${post.image}`" class="card-img-top " alt="" style="height: 400px;" />
            </a>
            <div class="card-img-overlay">
            <ul class="category-tag-list d-flex">
                <li class="category-tag-name">
                    <a href="#" class="text-white">{{ post?.category?.name }}</a>
                </li>
                <div class="comments_and_views">
                    <li class="category-tag-name text-white">
                        <a v-if="isGuest" href="javascript:void(0)" class="likes space-x-1" onclick="toastr.info('You need to login to like a post','Info',{
                                closeButton: true,
                                progressBar: true,
                            })">
                                <i class="fas fa-heart"></i> <span>{{ post?.favorite_to_user?.length }}</span>
                            </a>

                            <a v-else @click="addToFavorite(post.id)" style="background: none; border: none; color: rgb(247, 69, 69);" type="submit" class="likes space-x-1">
                                <i class="fas fa-heart"></i> <span>{{ post?.favorite_to_user.length }}</span>
                            </a>
                    </li>
                    <li class="category-tag-name">
                        <a href="javascript:void(0)" class="view space-x-1" style="color: rgb(125, 128, 126);">
                            <i class="fas fa-eye"></i><span>{{ post.view_count }}</span>
                        </a>
                        </li>
                        <li class="category-tag-name">
                        <a href="javascript:void(0)" class="comment">
                            <i class="fas fa-comment"> {{ post?.comments?.length }}</i>
                        </a>
                    </li>
                </div>
            </ul>
            <h5 class="card-title title-font">
                <a :href="`/post/${post.slug}`">
                    {{ post.title }}
                </a>
            </h5>
            </div>
        </div>
    </div>
</template>

