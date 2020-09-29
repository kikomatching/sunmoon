import StopwatchComponent from '@components/Stopwatch'

export let Logs = new Vue({
    components: {
        stopwatch: StopwatchComponent,
    },
    data: {
        logs: {},
    },

    mounted() {
        this.getAll()
    },

    methods: {
        getAll() {
            axios.get('api/logs').then((response) => {
                this.logs = response.data
            });
        },
        store(type) {
            axios.post('api/logs', {
                'log_type': type
            }).then((response) => {
                let log = response.data.data

                this.logs.push(log)
            });
        },
        destroy(id) {
            axios.delete('api/logs/' + id).then((response) => {
                let logs = Object.keys(this.logs).map((k) => this.logs[k])

                logs = logs.filter((log) => {
                    return log.log_id !== id;
                })

                this.logs = logs;
            });
        },
    },
});