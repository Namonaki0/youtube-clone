<script setup>
import { Head, Link } from "@inertiajs/vue3";
import NavLayout from "@/Layouts/NavLayout.vue";

defineProps({ videos: Array });
</script>

<template>
    <Head title="youtube" />

    <NavLayout>
        <div class="max-w-2xl mx-auto p-4">
            <table class="min-w-full">
                <thead class="border-b">
                    <tr class="text-white flex justify-between">
                        <th
                            scope="col"
                            class="text-sm font-medium px-6 py-4 text-left"
                        >
                            Videos
                        </th>
                        <th
                            scope="col"
                            class="text-sm font-medium px-6 py-4 text-left"
                        >
                            Options
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <div v-for="video in videos" :key="video">
                        <tr class="border-b flex justify-between">
                            <td
                                class="px-6 py-4 w-7/12 text-sm font-medium text-gray-900"
                            >
                                <video
                                    width="320"
                                    class="min-w-[200px]"
                                    :src="video.video"
                                    type="video/mp4"
                                    controls
                                ></video>
                            </td>
                            <td
                                class="px-6 py-4 w-5/12 text-sm font-medium text-gray-900 relative"
                            >
                                <div class="text-white font-extrabold mb-4">
                                    {{ video.title }}
                                </div>
                                <div class="w-full">
                                    <Link
                                        as="button"
                                        method="delete"
                                        :href="
                                            route('videos.destroy', {
                                                id: video.id,
                                            })
                                        "
                                        class="text-white text-xs bg-red-600 hover:bg-red-700 font-bold py-1 px-1 rounded cursor-pointer"
                                    >
                                        Delete
                                    </Link>
                                </div>
                            </td>
                        </tr>
                    </div>
                </tbody>
            </table>
        </div>
    </NavLayout>
</template>
