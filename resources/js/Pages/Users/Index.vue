<template>
  <layout>
    <user-data-table></user-data-table>
    <template v-slot:heading>
      <h2 class="text-2xl py-2">All Users</h2>
    </template>
  </layout>
</template>

<script>
import UserDataTable from '@/Components/DataTable/UserDataTable';
import Layout from '@/Layouts/AppLayoutTwo';
export default {
  components: {
    UserDataTable,
    Layout
  }
};
</script>
