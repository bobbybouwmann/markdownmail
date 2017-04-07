<template>

    <div>

        <div v-html="mail"></div>

    </div>

</template>

<script>

    export default {

        props: ['theme'],

        data() {
            return {
                mail: null
            }
        },

        mounted() {
            if (this.theme) {
                this.generatePreview();
            } else {
                this.generateDefaultPreview();
            }
        },

        methods: {
            generatePreview() {
                var url = '/api/themes/' + this.theme;

                axios.get(url)
                    .then(response => this.mail = response.data);
            },

            generateDefaultPreview() {
                var url = '/api/themes/preview';

                axios.get(url)
                    .then(response => this.mail = response.data);
            }
        }

    }

</script>
