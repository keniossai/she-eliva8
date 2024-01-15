import './bootstrap';
import { createApp } from 'vue';
import CounterComponent from './components/CounterComponent.vue'
import PostCard from './components/PostCard.vue'



const app = createApp({});
app.component('counter-component', CounterComponent);
app.component('post-card', PostCard);

app.mount('#app')
