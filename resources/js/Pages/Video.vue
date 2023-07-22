<script setup>
import { Head, Link } from "@inertiajs/vue3";
import NavLayout from "@/Layouts/NavLayout.vue";
import RecommendedVideos from "@/Components/RecommendedVideos.vue";
import CheckCircle from "vue-material-design-icons/CheckCircle.vue";
import ThumbUpOutline from "vue-material-design-icons/ThumbUpOutline.vue";
import ThumbDownOutline from "vue-material-design-icons/ThumbDownOutline.vue";
</script>
<template>
    <Head title="youtube-clone" />
    <NavLayout>
        <div class="xl:flex">
            <div class="p-3">
                <video src="/videos/sample-video.mp4" controls autoplay></video>
                <div class="text-white text-2xl font-extrabold mt-4">
                    sample video
                </div>
                <div class="flex items-center mb-4">
                    <div class="flex mt-1.5">
                        <img
                            :src="
                                `https://picsum.photos/id/${(
                                    Math.random() * 100
                                ).toFixed(0)}/100` || ''
                            "
                            alt="video thumbnail"
                            class="rounded-full m-1.5 mt-2 flex items-baseline w-8 h-8"
                        />
                        <div class="pl-2 mt-1">
                            <div
                                class="text-white text-lg font-extrabold flex items-center"
                            >
                                Example text
                                <CheckCircle fillColor="#888888" :size="17" />
                            </div>
                            <div class="text-sm text-gray-400 font-extrabold">
                                example views text
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#3f3f3f] rounded-lg w-full p-3 text-white">
                    <div class="text-white text-lg font-extra-bold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Incidunt, beatae.
                    </div>
                    <div class="text-sm font-extrabold mb-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Incidunt, beatae.
                    </div>
                    <div class="text-sm font-extrabold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Incidunt, beatae. Lorem, ipsum. Lorem ipsum dolor, sit
                        amet consectetur adipisicing elit. Tempora quos
                        dignissimos repudiandae odio obcaecati optio non
                        voluptas nemo, incidunt voluptatibus?
                    </div>
                </div>
                <div class="mt-6">
                    <div class="text-white text-lg font-extrabold">
                        10 comments
                    </div>
                    <div class="flex items-flex mb-4 mt-2">
                        <img
                            :src="
                                `https://picsum.photos/id/${(
                                    Math.random() * 100
                                ).toFixed(0)}/100` || ''
                            "
                            alt="video thumbnail"
                            class="rounded-full w-12 h-12 mt-2"
                        />
                        <div class="pl-6 mt-1">
                            <div
                                class="text-white font-extrabold flex items-baseline"
                            >
                                <p>Mark Examp</p>
                                <div class="text-gray-400 pl-3">3 days ago</div>
                            </div>
                            <div class="text-gray-200 text-sm font-semibold">
                                Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Quisquam ullam voluptatibus,
                                commodi accusantium iure, a suscipit culpa
                                doloremque quae beatae neque obcaecati ad nobis
                                at, eius recusandae. Illum, vero cupiditate?
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Fugiat iste non deserunt
                                molestias cupiditate qui molestiae tempore
                                reprehenderit, officiis esse quas beatae. Hic
                                architecto, unde illum reiciendis dolorem
                                aspernatur ullam?
                            </div>
                            <div class="mt-4 flex items-center">
                                <ThumbUpOutline
                                    fillColor="#FFFFFF"
                                    :size="20"
                                    class="pr-2"
                                />
                                <div
                                    class="text-gray-400 text-sm font-extrabold pr-10"
                                >
                                    {{ (Math.random() * 100).toFixed(0) }}
                                </div>
                                <ThumbDownOutline
                                    fillColor="#FFFFFF"
                                    :size="20"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[500px] p-3 sm:block hidden">
                <div class="flex mb-3">
                    <RecommendedVideos
                        :vid="{
                            title: 'title example',
                            video: '/videos/sample-video.mp4',
                            thumbnail: '/videos/Thumbnails/sample-video.PNG',
                            user: 'example user',
                            views: '2332',
                        }"
                    />
                </div>
            </div>
        </div>
    </NavLayout>
</template>
