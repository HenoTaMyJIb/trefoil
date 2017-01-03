module.exports = {
    /**
     * Data.
     */
    data() {
        return {
            form: new Form({
                student: {
                    firstname: '',
                    lastname: '',
                    personal_code: '',
                    address: '',
                    phone: '',
                    email: '',
                },
                parent1: {
                    firstname: '',
                    lastname: '',
                    personal_code: '',
                    address: '',
                    phone: '',
                    email: '',
                    work_place: ''
                },
                parent2: {
                    firstname: '',
                    lastname: '',
                    personal_code: '',
                    address: '',
                    phone: '',
                    email: '',
                    work_place: ''
                },
                comment: '',
                field: '',
            }),
            fieldFull: false
        }
    },

    props: ['fields'],

    methods: {
        onSubmit() {
            this.form.submit('post', '/registrations')
                .then(response => {
                    alert('done');
                });
        },

        isFieldFull() {
          let selectedField = this.fields.find(field => {
            return field.id == this.form.field;
          })
          this.fieldFull = selectedField.is_full
        }
    }


}
