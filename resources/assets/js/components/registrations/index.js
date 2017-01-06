module.exports = {

    /**
     * Data.
     */
    data() {
        return {
            columns: [{
                name: 'id',
                title: 'ID',
                sortField: 'id'
            }, {
                name: 'student.name',
                title: 'Lapse nimi',
            }, {
                name: 'student.personal_code',
                title: 'Lapse isikukood',
            }, {
                name: 'field.name',
                title: 'Rühm',
            }, {
                name: 'created_at',
                title: 'Kuupäev',
                sortField: 'created_at'
            }, {
                name: 'status',
                title: 'Status',
                sortField: 'status'
            }, {
                name: '__component:registrations-actions',
                dataClass: 'text-center'
            }]
        }
    }
};

Vue.component('registrations-actions', {
    template: [
        `
    <div>
      <a v-bind:href="url" >
        <button class="button is-primary is-small">
          <i class="fa fa-eye"></i>
        </button>
      </a>
    </div>
    `
    ].join(''),
    props: {
        rowData: {
            type: Object,
            required: true
        }
    },
    computed: {
        url() {
            return '/admin/registrations/' + this.rowData.id
        }
    }
});
