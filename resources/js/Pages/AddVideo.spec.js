import { shallowMount } from "@vue/test-utils";
import YourComponent from "@/path/to/YourComponent.vue"; // Replace with the actual path to your component

describe("YourComponent", () => {
    it("renders correctly", () => {
        const wrapper = shallowMount(YourComponent);
        expect(wrapper.exists()).toBe(true);
        // Write more test cases for your component here...
    });
});
