<template>
  <transition
    name="expand"
    @enter="enter"
    @after-enter="afterEnter"
    @leave="leave"
  >
    <ul v-show="list.open" class="px-3 text-indent-1 bg-gray-900">
      <li class="-mx-3" v-for="(item, index) in list.submenus" :key="index">
        <inertia-link
          class="pl-6 py-2 border-t border-gray-700 flex items-center text-gray-200"
          :href="item.link"
          preserve-state
        >
          <button class="">
            <icon :name="item.icon" class="w-6 h-6" />
          </button>
          <span class="pl-2">{{ item.name }}</span></inertia-link
        >
      </li>
    </ul>
  </transition>
</template>

<script>
import Icon from '@/Shared/Icon';
export default {
  components: { Icon },
  props: ['list'],
  methods: {
    enter(el) {
      // set the element to his natural hight
      el.style.height = 'auto';
      /*
          get the calculated height.
          getComputedStyle returns an object containing all the CSS properties
          of the element after all active styles have been loaded and the basic
          calculations have been performed.
          We need the height after all basic calculations have been performed,
          then the height of each element here is dynamically,
          based on the number of items in the sublist.
        */
      const height = getComputedStyle(el).height;
      // set the height to zero for the opening animation
      el.style.height = 0;
      /*
          Force the repaint to make sure the animation is triggered correctly,
          then you can fire the method getComputedStyle again.
          This is not necessary, but sometimes the animation may not start depending on the case.
        */
      getComputedStyle(el);
      /*
          Set the height from the element to the calculated height.
          With setTimeout you make sure the browser has finished the painting
          after setting the height to zero.
        */
      setTimeout(() => {
        el.style.height = height;
      });
    },
    afterEnter(el) {
      el.style.height = 'auto';
    },
    leave(el) {
      /*
          Same as with the enter method, but only the other way around.
        */
      el.style.height = getComputedStyle(el).height;

      getComputedStyle(el);
      setTimeout(() => {
        el.style.height = 0;
      });
    }
  }
};
</script>

<style lang="scss" scoped>
.expand-enter-active,
.expand-leave-active {
  transition: all 0.5s ease-in-out;
  transition-property: margin, height;
  overflow: hidden;
}
</style>
