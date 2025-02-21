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

        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                    <h2 class="text-2xl font-bold text-gray-900">Collections</h2>

            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                <div class="group relative" v-for="post in  posts"  :key="post.id">
                    <img :src="post.image" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full rounded-lg bg-white object-cover group-hover:opacity-75 max-sm:h-80 sm:aspect-2/1 lg:aspect-square">
                    <h3 class="mt-6 text-sm text-gray-500">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                           {{ post.heading }}
                        </a>
                    </h3>
                    <p class="text-base font-semibold text-gray-900">{{ post.short_description }}</p>
                </div>
            </div>
                </div>
            </div>
        </div>
    </authenticated-layout>


</template>

<style scoped>

</style>
