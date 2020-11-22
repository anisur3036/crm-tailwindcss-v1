<template>
  <div class="projects">
    <div class="flex justify-between items-center">
      <input
        class="py-2 px-3 mb-2 rounded border border-gray-600 text-gray-600"
        type="text"
        v-model="tableData.search"
        placeholder="Search Table"
        @input="getProjects()"
        @keydown="getSearchData()"
      />

      <div class="control">
        <div class="relative mb-2">
          <select
            class="block appearance-none w-full border border-gray-600 text-gray-600 py-2 pl-8 pr-12 rounded"
            v-model="tableData.length"
            @change="getProjects()"
          >
            <option
              class="text-gray-600"
              v-for="(records, index) in perPage"
              :key="index"
              :value="records"
              >{{ records }}</option
            >
          </select>
          <div
            class="pointer-events-none absolute top-0 right-0 mt-4 flex items-center px-2"
          >
            <svg
              class="h-4 w-4"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
            >
              <path
                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
              />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <datatable
      :columns="columns"
      :sortKey="sortKey"
      :sortOrders="sortOrders"
      @sort="sortBy"
    >
      <tbody>
        <tr
          class="border-b hover:bg-orange-100 bg-gray-100"
          v-for="project in projects"
          :key="project.id"
        >
          <td class="py-3 px-5">{{ project.id }}</td>
          <td class="py-3 px-5">{{ project.name }}</td>
          <td class="py-3 px-5">{{ project.email }}</td>
          <td class="py-3 px-1">
            <inertia-link
              class="text-gray-600 hover:text-gray-300"
              :href="`user/${project.id}`"
              ><icon name="chevron_right" class="w-6 h-6"
            /></inertia-link>
          </td>
        </tr>
      </tbody>
    </datatable>
    <pagination
      class="flex justify-end items-center"
      :pagination="pagination"
      @prev="getProjects(pagination.prevPageUrl)"
      @next="getProjects(pagination.nextPageUrl)"
    >
    </pagination>
  </div>
</template>

<script>
import Datatable from './Datatable.vue';
import Pagination from './Pagination.vue';
import Icon from '@/Shared/Icon.vue';
export default {
  components: { datatable: Datatable, pagination: Pagination, Icon },
  created() {
    this.getProjects();
  },
  data() {
    let sortOrders = {};

    let columns = [
      { width: '30%', label: 'ID', name: 'id' },
      { width: '30%', label: 'Name', name: 'name' },
      { width: '30%', label: 'Email', name: 'email' }
    ];

    columns.forEach(column => {
      sortOrders[column.name] = -1;
    });
    return {
      projects: [],
      columns: columns,
      sortKey: 'name',
      sortOrders: sortOrders,
      perPage: ['10', '20', '30', '40', '50'],
      tableData: {
        draw: 0,
        length: 10,
        search: '',
        column: 0,
        dir: 'desc'
      },
      pagination: {
        lastPage: '',
        currentPage: '',
        total: '',
        lastPageUrl: '',
        nextPageUrl: '',
        prevPageUrl: '',
        from: '',
        to: ''
      }
    };
  },
  methods: {
    getProjects(url = '/api/users') {
      this.tableData.draw++;
      axios
        .get(url, { params: this.tableData })
        .then(response => {
          let data = response.data;
          if (this.tableData.draw == data.draw) {
            this.projects = data.data.data;
            this.configPagination(data.data);
          }
        })
        .catch(errors => {
          console.log(errors);
        });
    },
    configPagination(data) {
      this.pagination.lastPage = data.last_page;
      this.pagination.currentPage = data.current_page;
      this.pagination.total = data.total;
      this.pagination.lastPageUrl = data.last_page_url;
      this.pagination.nextPageUrl = data.next_page_url;
      this.pagination.prevPageUrl = data.prev_page_url;
      this.pagination.from = data.from;
      this.pagination.to = data.to;
    },
    sortBy(key) {
      this.sortKey = key;
      this.sortOrders[key] = this.sortOrders[key] * -1;
      this.tableData.column = this.getIndex(this.columns, 'name', key);
      this.tableData.dir = this.sortOrders[key] === 1 ? 'asc' : 'desc';
      this.getProjects();
    },
    getIndex(array, key, value) {
      return array.findIndex(i => i[key] == value);
    },

    getSearchData() {
      _.debounce(this.getProjects, 5000);
    }
  }
};
</script>
