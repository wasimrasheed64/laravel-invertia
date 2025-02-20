<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from '@inertiajs/vue3';
defineProps({
    greatings: String,
    posts: Object,
})
</script>

<template>
    <Head title="Comments Screen">
        <meta name="description" content="Comments Screen">
    </Head>
    <authenticated-layout>
        <template #header>
        <h1>{{ greatings}} </h1>
        </template>
        <div v-for="post in  posts" class="posts">
            <h1>{{ post->title}}</h1>
        </div>
    </authenticated-layout>


</template>

<style scoped>

</style>
