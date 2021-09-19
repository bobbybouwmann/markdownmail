<template xmlns:v-bind="http://www.w3.org/1999/xhtml">

    <div>

        <div class="color-wrapper">

            <h5 class="color-title" v-text=headingText></h5>

            <input v-model="color" value="test" class="color-input">

        </div>

    </div>

</template>

<script>

    export default {

        props: ['id', 'theme', 'defaultColor'],

        computed: {
            headingText() {
                var string = this.id.replace(/([A-Z]+)/g, " $1").replace(/([A-Z][a-z])/g, " $1");

                return string[0].toUpperCase() + string.substr(1);
            }
        },

        mounted() {
            var vm = this;

            var changeColor = function (color) {
                this.setColor(color.toHexString());
            }.bind(vm);

            var pushColor = function (color) {
                this.setColor(color.toHexString());
                this.pushColor();
            }.bind(vm);

            var stopDragPushColor = function (e, color) {
                this.setColor(color.toHexString());
                this.pushColor();
            }.bind(vm);

            $(this.$el).find('input').spectrum({
                color: this.color,
                preferredFormat: 'hex',
                showInput: true,
                move: changeColor,
                change: pushColor,
            });

            $(this.$el).on("dragstop.spectrum", stopDragPushColor);
        },

        methods: {
            setColor(color) {
                this.color = color;

                this.$emit('color_selected', this.id, this.color);
            },

            pushColor() {
                var url = '/api/themes/' + this.theme + '/colors/' + this.id;

                axios.patch(url, {
                    id: this.id,
                    color: this.color
                });
            }
        },

        data() {
            return {
                color: this.defaultColor,
            }
        }

    }



</script>
