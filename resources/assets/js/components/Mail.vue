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
            this.generatePreview();
        },

        methods: {
            generatePreview() {
                var url = '/api/theme/' + this.theme;

                axios.get(url)
                    .then(response => this.mail = response.data);
            }
        }

    }

</script>
