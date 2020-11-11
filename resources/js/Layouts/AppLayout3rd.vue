<template>
  <div class="bg-gray-300 min-h-screen">
    <!-- mobile-menu -->
    <div class="mobile-menu md:hidden">
      <div
        class="px-3 py-3 bg-gray-800 text-gray-200 flex items-center justify-between"
      >
        <a href="" class="flex">
          <icon
            name="academy"
            class="w-6 h-6 text-gray-200 hover:text-gray-300"
          />
        </a>
        <button @click="mobileMenu = ! mobileMenu">
          <icon
            name="menu"
            class="w-6 h-6 text-gray-200 hover:text-gray-300"
          ></icon>
        </button>
      </div>
      <ul class="px-3 bg-gray-800" :class="mobileMenu ? 'flex flex-col' : 'hidden'">
        <li class="-mx-3 border-t border-gray-700">
          <a class="px-3 py-3 flex items-center text-gray-200" href="">
            <icon name="home" class="w-6 h-6" />
            <span class="pl-2">Dashboard</span></a
          >
        </li>
        <li class="-mx-3 border-t border-gray-700">
          <a @click="menuOpen = !menuOpen" class="px-3 py-3 flex items-center text-gray-200" href="#">
            <icon name="users" class="w-6 h-6"/>
            <span class="pl-2 flex-grow">Users</span>
            <button class="">
              <icon name="savron_down" class="w-6 h-6" /></button
          ></a>
          <transition 
            name="expand"
            @enter="enter"
            @after-enter="afterEnter"
            @leave="leave">
          <ul
            v-show="menuOpen"
            class="m-3 px-3 bg-gray-700 rounded-md"
          >
            <li class="-mx-3">
              <a class="px-3 py-3 flex items-center text-gray-200" href="">
                <icon name="user-add" class="w-6 h-6" />
                <span class="pl-2">New user</span></a
              >
            </li>
            <li class="-mx-3 border-t border-gray-800">
              <a class="px-3 py-3 flex items-center text-gray-200" href="">
                <icon name="user" class="w-6 h-6" />
                <span class="pl-2">All Users</span></a
              >
            </li>
            <li class="-mx-3 border-t border-gray-800">
              <a class="px-3 py-3 flex items-center text-gray-200" href="">
                <icon name="home" class="w-6 h-6" />
                <span class="pl-2">New user</span></a
              >
            </li>
          </ul>
        </transition>
        </li>
      </ul>
    </div>
    <!-- end-mobile-menu -->
    <slot />
  </div>
</template>

<script>
import Icon from '@/Shared/Icon';
export default {
  components: {
    Icon
  },
  data() {
    return {
      menuOpen: false,
      mobileMenu: false,
    };
  },
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
        }, 0);
      }
    }
};
</script>

<style lang="scss" scoped>
  .expand-enter-active, .expand-leave-active {
    transition: height .5s cubic-bezier(0.49, 0.32, 0.24, 0.57);
    overflow: hidden;
  }
</style>
