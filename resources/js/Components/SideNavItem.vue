<template>
    <li
        :class="[!openSideNav ? 'p-2' : 'flex items-center p-2']"
        class="text-white text-sm font-semibold text-center hover:bg-gray-700 rounded-lg cursor-pointer"
    >
        <div :class="[!openSideNav ? 'w-full flex justify-center' : '']">
            <component :is="icon" />
        </div>
        <div :class="[!openSideNav ? '' : 'mt-1 ml-4']">
            <span v-if="!openSideNav">{{ iconString.substring(0, 4) }}</span>
            <span v-else>{{ iconString }}</span>
        </div>
    </li>
</template>

<script setup>
import { defineProps, toRefs } from "vue";

import Home from "vue-material-design-icons/Home.vue";
import FolderPlayOutline from "vue-material-design-icons/FolderPlayOutline.vue";
import ImageMultiple from "vue-material-design-icons/ImageMultiple.vue";
import ThumbUpOutline from "vue-material-design-icons/ThumbUpOutline.vue";
import History from "vue-material-design-icons/History.vue";
import ClockOutline from "vue-material-design-icons/ClockOutline.vue";
import VideoPlusOutline from "vue-material-design-icons/VideoPlusOutline.vue";
import DeleteIcon from "vue-material-design-icons/Delete.vue";

const props = defineProps({
    openSideNav: Boolean,
    iconString: String,
});

const { openSideNav, iconString } = toRefs(props);

const iconMap = {
    Home: Home,
    Subscriptions: FolderPlayOutline,
    Library: ImageMultiple,
    Liked: ThumbUpOutline,
    History: History,
    "Watch Later": ClockOutline,
    "Add Video": VideoPlusOutline,
    "Delete Video": DeleteIcon,
};

let icon = iconMap[iconString.value] || null;
</script>
