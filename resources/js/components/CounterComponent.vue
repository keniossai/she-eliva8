<script setup>
import {ref} from 'vue';
const counter = ref(0);
</script>
<template>
    <div>
       number of times incremented: {{ counter }}
    </div>
    <button type="button" @click="counter++">increment</button>
</template>


{{  }}
