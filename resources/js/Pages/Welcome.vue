<script setup>
import { Head, Link } from "@inertiajs/vue3";
import NavLayout from "@/Layouts/NavLayout.vue";
import VideoCard from "@/Components/VideoCard.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
});
</script>
<template>
    <Head title="youtube-clone" />
    <NavLayout>
        <div
            class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2"
        >
            <VideoCard
                title="sample video"
                user="sample text"
                views="2000 views"
                videoUrl="/videos/sample-video.mp4"
                thumbnail="/videos/Thumbnails/sample-video.PNG"
                image="https://images.pexels.com/photos/4309369/pexels-photo-4309369.jpeg"
            />
        </div>
    </NavLayout>
</template>
