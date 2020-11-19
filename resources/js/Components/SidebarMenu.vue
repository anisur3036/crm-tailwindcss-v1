<template>
  <aside
    class="hidden md:block px-2 py-2 w-62 flex-shrink-0 min-h-screen bg-gray-800 hover:text-gray-400 shadow-xl"
  >
    <!-- Brand Logo -->
    <a
      href="#"
      class="py-4 flex justify-start items-center text-gray-100 hover:text-gray-400"
    >
      <img class="h-8 mr-2" src="img/logo-crm.svg" alt="CRM" />
      <span>CRM System</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <ul class="px-3 bg-gray-800">
        <li
          class="-mx-3 border-t border-gray-700"
          v-for="(item, index) in $page.props.menu.list"
          :key="'item' + index"
        >
          <!-- font awesome icon with a rotating animation -->
          <a
            class="px-3 py-3 flex items-center text-gray-200"
            href="#"
            @click="item.open = !item.open"
          >
            <icon name="users" class="w-6 h-6"/>
            <span class="pl-2 flex-grow">{{ item.title }}</span>
            <button class="">
              <icon
                :name="item.open ? 'chevron_down' : 'chevron_right'"
                class="w-6 h-6"
                @click="item.open = !item.open"
              /></button
          ></a>
          <!-- renders the ListItem Component for each list element -->
          <ListItem :list="item" />
        </li>
      </ul>
    </div>
    <!-- /.sidebar -->
  </aside>
</template>
<script>
import ListItem from '@/Shared/ListItem';
import Icon from '@/Shared/Icon.vue';
export default {
  data: () => {
    return {
      //
    };
  },
  components: {
    ListItem,
    Icon
  }
};
</script>

<style lang="scss" scoped>
.icon-move-enter-active,
.icon-move-leave-active {
  transition: all 0.5s fade-in;
  overflow: hidden;
}
</style>
