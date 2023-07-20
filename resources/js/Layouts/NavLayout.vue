<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
import SideNavItem from "@/components/SideNavItem.vue";
import MenuIcon from "vue-material-design-icons/Menu.vue";
import MagnifyIcon from "vue-material-design-icons/Magnify.vue";

let openSideNav = ref(true);
</script>

<template>
    <div class="relative">
        <div
            id="TopNav"
            class="fixed bg-black z-20 flex items-center justify-between w-[100%] h-[60px]"
        >
            <div class="w-[100%] flex items-center justify-between">
                <button
                    class="p-2 ml-3 rounded-full hover:gb-gray-800 inline-block cursor-pointer"
                    @click="openSideNav = !openSideNav"
                >
                    <MenuIcon fillColor="#FFFFFF" :size="26" />
                </button>
                <div class="mx-2"></div>
                <div
                    class="hidden md:block text-white flex items-center justify-center mr-10 cursor-pointer"
                >
                    YOUTUBE
                </div>
                <div class="flex flex-1 w-100 hidden md:block">
                    <div
                        class="w-[600px] rounded-full flex items-center bg-[#222222] m-auto"
                    >
                        <input
                            type="text"
                            placeholder="search..."
                            class="form-control block w-full px-5 py-1.5 text-base font-normal text-gray-200 bg-black placeholder-gray-400 bg-clip-padding border border-solid border-l-gray-700 border-y-gray-700 rounded-l-full transition ease-in-out m-0 border-transparent focus:ring-0"
                        />
                        <MagnifyIcon
                            class="mx-6"
                            fillColor="#FFFFFF"
                            :size="23"
                        />
                    </div>
                </div>
                <div>
                    <img
                        src="https://yt3.ggpht.com/yti/AOXPAcVAQCLjh-LCps_4yIjWiDQm8uAz-tBnzBh7Rg=s88-c-k-c0x00ffffff-no-rj-mo"
                        alt="profile image"
                        class="rounded-full mx-8"
                        width="35"
                    />
                </div>
            </div>
        </div>
        <div
            id="SideNav"
            class="h-[100%] fixed z-0 bg-black w-[240px]"
            :class="[!openSideNav ? 'w-[70px]' : 'w-[240px]']"
        >
            <ul
                class="mt-[60px] w-full"
                :class="[!openSideNav ? 'p-2' : 'px-5 pb-2 pt-[7px]']"
            >
                <SideNavItem :openSideNav="openSideNav" iconString="Home" />
                <SideNavItem
                    :openSideNav="openSideNav"
                    iconString="Add Video"
                />
                <SideNavItem
                    :openSideNav="openSideNav"
                    iconString="Delete Video"
                />
                <div class="border-b border-b-gray-700 my-2.5" />
                <SideNavItem
                    :openSideNav="openSideNav"
                    iconString="Subscriptions"
                />
                <SideNavItem :openSideNav="openSideNav" iconString="Library" />
                <SideNavItem :openSideNav="openSideNav" iconString="Liked" />
                <SideNavItem :openSideNav="openSideNav" iconString="History" />
                <SideNavItem
                    :openSideNav="openSideNav"
                    iconString="Watch Later"
                />
                <div v-if="openSideNav">
                    <div class="border-b border-b-gray-700 my-2.5" />
                    <div class="text-gray-400 text-[14px] text-extrabold">
                        Copyright
                        <div>Contact us</div>
                        Development
                    </div>
                    <div class="border-b border-b-gray-700 my-2.5" />
                    <div class="text-gray-400 text-[14px] text-extrabold">
                        T&C
                        <div>How YouTube works</div>
                        New features
                    </div>
                </div>
            </ul>
        </div>
        <div id="SideNavOverlay"></div>
        <div
            class="w-[100%] h-[calc(100vh-60px)] absolute right-0 top-[60px]"
            :class="{
                'w-[calc(100%-70px)]': !openSideNav,
                'w-[calc(100%-240px)]': openSideNav,
            }"
        >
            <slot />
        </div>
    </div>
</template>

<style>
body {
    background: black;
}
</style>
