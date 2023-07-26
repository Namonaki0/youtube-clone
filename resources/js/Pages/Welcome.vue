<script setup>
import { Head, Link } from "@inertiajs/vue3";
import NavLayout from "@/Layouts/NavLayout.vue";
import VideoCard from "@/Components/VideoCard.vue";

defineProps({
    videos: Array,
});
</script>
<template>
    <Head title="youtube-clone" />
    <NavLayout>
        <div
            class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2"
        >
            <div v-for="(video, i) in videos" :key="video">
                <Link :href="route('videos.show', { id: video.id })">
                    <VideoCard
                        :title="video.title"
                        :user="video.user"
                        :views="video.views"
                        :videoUrl="video.video"
                        :thumbnail="video.thumbnail"
                        :image="`https://picsum.photos/${i}`"
                    />
                </Link>
            </div>
        </div>
    </NavLayout>
</template>
