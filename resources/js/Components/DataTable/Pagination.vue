<style lang="scss">
.pagination {
  justify-content: flex-end !important;
  .page-stats {
    align-items: center;
    margin-right: 5px;
  }
  i {
    color: #3273dc !important;
  }
}
</style>

<template>
  <nav class="flex" v-if="!client">
    <span class="page-stats"
      >{{ pagination.from }} - {{ pagination.to }} of
      {{ pagination.total }}</span
    >
    <a
      v-if="pagination.prevPageUrl"
      class="btn-indigo mx-1 cursor-pointer"
      @click="$emit('prev')"
    >
      Prev
    </a>
    <a
      class="btn-indigo bg-gray-600 mx-1 cursor-not-allowed"
      v-else
      :disabled="true"
    >
      Prev
    </a>

    <a
      v-if="pagination.nextPageUrl"
      class="btn-indigo mx-1 cursor-pointer"
      @click="$emit('next')"
    >
      Next
    </a>
    <a class="btn-indigo mx-1 cursor-not-allowed" v-else :disabled="true">
      Next
    </a>
  </nav>

  <nav class="flex" v-else>
    <span class="page-stats">
      {{ pagination.from }} - {{ pagination.to }} of {{ filtered.length }}
      <span v-if="filtered.length < pagination.total"
        >(filtered from {{ pagination.total }} total entries)</span
      >
    </span>
    <a
      v-if="pagination.prevPage"
      class="btn-indigo mx-1 cursor-pointer"
      @click="$emit('prev')"
    >
      Prev
    </a>
    <a class="btn-indigo mx-1 cursor-not-allowed" v-else :disabled="true">
      Prev
    </a>

    <a
      v-if="pagination.nextPage"
      class="btn-indigo mx-1 cursor-pointer"
      @click="$emit('next')"
    >
      Next
    </a>
    <a class="btn-indigo mx-1 cursor-not-allowed" v-else :disabled="true">
      Next
    </a>
  </nav>
</template>

<script>
export default {
  props: ['pagination', 'client', 'filtered']
};
</script>
