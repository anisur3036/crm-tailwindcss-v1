<template>
  <layout>
    <template v-slot:heading>
      <h2 class="text-2xl py-2">All Users</h2>
    </template>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in userDatas.data" :key="user.id">
          <td>{{ user.id }}</td>
          <td>{{ user.name }}</td>
          <td>{{ user.email }}</td>
        </tr>
      </tbody>
    </table>
  </layout>
</template>

<script>
// import debounce from 'lodash/debounce';
// import axios from 'axios';
import Layout from '@/Layouts/AppLayoutTwo';
export default {
  components: {
    Layout
  },
  props: {
    users: Object
  },
  data() {
    return {
      userDatas: this.users
    };
  },

  mounted() {
    window.addEventListener(
      'scroll',
      _.debounce(() => {
        let pixelsFromBottom =
          document.documentElement.offsetHeight -
          document.documentElement.scrollTop -
          window.innerHeight;

        if (pixelsFromBottom < 200 && this.userDatas.next_page_url) {
          axios.get(this.userDatas.next_page_url).then(response => {
            this.userDatas = {
              ...response.data,
              data: [...this.userDatas.data, ...response.data.data]
            };
          });
        }
      }, 300)
    );
  }
};
</script>
