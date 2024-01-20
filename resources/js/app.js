import './bootstrap';
import { createApp } from 'vue';
import PostCard from './components/PostCard.vue'



const app = createApp({});
app.component('post-card', PostCard);

app.mount('#app')
