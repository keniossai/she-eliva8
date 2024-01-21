import './bootstrap';
import { createApp } from 'vue';
import PostCard from './components/PostCard.vue'
import FeatureCard from './components/FeatureCard.vue'



const app = createApp({});
app.component('post-card', PostCard);
app.component('feature-card', FeatureCard);

app.mount('#app')
