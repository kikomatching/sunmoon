<template>
    <div class="d-flex justify-content-around">
        <div>
            <button v-on:click="start" class="btn btn-primary">Start</button>
            <button v-on:click="stop" class="btn btn-primary">Stop</button>
        </div>

        <h2>{{ fullClock }}</h2>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                running: false,
                timeBegan: null,
                timeStopped: null,
                stoppedDuration: 0,
                started: null,
                clock: {
                    hours: 0,
                    minutes: 0,
                    seconds: 0,
                }
            }
        },
        methods: {
            start() {
                let self = this;

                if (this.running) return

                if (this.timeBegan === null) {
                    this.timeBegan = new Date();
                }

                if (this.timeStopped !== null) {
                    this.stoppedDuration += (new Date() - this.timeStopped);
                }

                this.runClock();

                this.$emit('start');
            },
            stop() {
                let self = this;

                this.running = false;
                this.timeStopped = new Date();

                clearInterval(this.started);

                this.$emit('stop')
            },
            runClock() {
                let self = this;

                this.running = true;

                this.started = setInterval(() => {
                    let currentTime = new Date()
                    let timeElapsed = new Date(currentTime - self.timeBegan - self.stoppedDuration)

                    self.clock.hours = timeElapsed.getUTCHours()
                    self.clock.minutes = timeElapsed.getUTCMinutes()
                    self.clock.seconds = timeElapsed.getUTCSeconds()
                }, 1000);
            }
        },
        computed: {
            fullClock() {
                let clock = this.clock;

                return clock.hours + ':' + clock.minutes + ':' + clock.seconds;
            }
        },
    }
</script>