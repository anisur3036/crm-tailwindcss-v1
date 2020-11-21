<template>
  <table class="w-full text-md bg-white shadow-md rounded mb-4 data-table">
    <thead>
      <tr class="border-b">
        <th
          v-for="column in columns"
          :key="column.name"
          @click="$emit('sort', column.name)"
          :class="
            sortKey === column.name
              ? sortOrders[column.name] > 0
                ? 'sorting_asc'
                : 'sorting_desc'
              : 'sorting'
          "
          :style="'cursor:pointer;'"
          class="text-left p-3 px-5"
        >
          {{ column.label }}
        </th>
      </tr>
    </thead>
    <slot></slot>
  </table>
</template>

<script>
export default {
  props: ['columns', 'sortKey', 'sortOrders']
};
</script>
