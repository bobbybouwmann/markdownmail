<template>

    <div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" @click="generateCss">
            Generate Laravel markdown theme
        </button>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" @click="generateCss">
            Generate html
        </button>

        <hr>

        <div class="colors-collection">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <color v-for="color in colors"
                       v-on:color_selected="colorSelected"
                       :id="color.id"
                       :theme="theme"
                       :color="color.color"></color>

            </div>

        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Laravel CSS theme</h4>
                    </div>
                    <div class="modal-body">
                        <h4>How to use this theme in your Laravel applications</h4>
                        <ol>
                            <li>Create a new themes file in "resources/views/vendor/mail/html/themes"</li>
                            <li>Copy the below css and past it in the new theme file</li>
                            <li>Update the "config/mail.php" file to use the new theme</li>
                            <li>Congrats! You just created your own unique markdown theme</li>
                        </ol>
                        <textarea disabled="disabled" style="width: 100%; height: 400px;">{{ css }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Copy css</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>

<script>

    export default {

        props: ['theme'],

        data() {
            return {
                colors: [],
                css: null
            }
        },

        created() {
            if (this.theme) {
                this.fetchColors();
            } else {
                this.fetchDefaultColors();
            }

        },

        methods: {
            colorSelected(id, color) {
                this.updateColorCollection(id, color);

                this.handleColorSelected(id, color);
            },

            fetchColors() {
                var url = '/api/themes/' + this.theme + '/colors';

                axios.get(url)
                    .then(response => this.colors = response.data);
            },

            fetchDefaultColors() {
                var url = '/api/themes/colors';

                axios.get(url)
                    .then(response => this.colors = response.data);
            },

            generateCss() {
                if (this.theme) {
                    this.fetchCssForTheme();
                } else {
                    this.fetchCssForColors();
                }
            },

            fetchCssForTheme() {
                var url = '/api/themes/' + this.theme + '/css';

                axios.get(url)
                    .then(response => this.css = response.data);
            },

            fetchCssForColors() {
                var url = '/api/themes/css-colors';

                axios.get(url, {
                    params: {
                        colors: this.colors
                    }
                }).then(response => this.css = response.data);
            },

            updateColorCollection(id, color) {
                var index = this.colors.map(function(color) {
                    return color.id;
                }).indexOf(id);

                var data = {
                    id: id,
                    color: color
                }

                if (index >= 0) {
                    this.$set(this.colors, index, data);
                } else {
                    this.$set(this.colors, data);
                }
            },

            handleColorSelected(id, color) {
                switch(id) {
                    case 'basicBackground':
                        this.applyStyle('#mail-demo .wrapper', function (element) {
                            element.style.backgroundColor = color;
                        });

                        break;
                    case 'bodyBackground':
                        this.applyStyle('#mail-demo .body', function (element) {
                            element.style.backgroundColor = color;
                        });

                        break;

                    case 'buttonBlueBackground':
                        this.applyStyle('#mail-demo .button-blue', function (element) {
                            element.style.backgroundColor = color;
                            element.style.borderColor = color;
                        });

                        break;

                    case 'buttonGreenBackground':
                        this.applyStyle('#mail-demo .button-green', function (element) {
                            element.style.backgroundColor = color;
                            element.style.borderColor = color;
                        });

                        break;

                    case 'buttonRedBackground':
                        this.applyStyle('#mail-demo .button-red', function (element) {
                            element.style.backgroundColor = color;
                            element.style.borderColor = color;
                        });

                        break;

                    case 'buttonColor':
                        this.applyStyle('#mail-demo .button', function (element) {
                            element.style.color = color;
                        });

                        break;

                    case 'companyNameColor':
                        this.applyStyle('#mail-demo .header a', function (element) {
                            element.style.color = color;
                        });

                        break;

                    case 'companyNameTextShadow':
                        this.applyStyle('#mail-demo .header a', function (element) {
                            element.style.textShadow = "0 1px 0 " + color;
                        });

                        break;

                    case 'headingColor':
                        this.applyStyle('#mail-demo h1, #mail-demo h2, #mail-demo h3', function (element) {
                            element.style.color = color;
                        });

                        break;

                    case 'linkColor':
                        this.applyStyle('#mail-demo a:not(.button)', function (element) {
                            element.style.color = color;
                        });

                        break;

                    case 'textColor':
                        this.applyStyle('#mail-demo, #mail-demo p, #mail-demo .table th, #mail-demo .table td', function (element) {
                            element.style.color = color;
                        });

                        break;

                    case 'bodyBorderColor':
                        this.applyStyle('#mail-demo .body', function (element) {
                            element.style.borderTopColor = color;
                            element.style.borderBottomColor = color;
                        });

                        break;

                    case 'innerBodyBackground':
                        this.applyStyle('#mail-demo .inner-body', function (element) {
                            element.style.backgroundColor = color;
                        });

                        break;

                    case 'subCopyBorderColor':
                        this.applyStyle('#mail-demo .subcopy', function (element) {
                            element.style.borderTopColor = color;
                        });

                        break;

                    case 'footerColor':
                        this.applyStyle('#mail-demo .footer p', function (element) {
                            element.style.color = color;
                        });

                        break;

                    case 'tableBorderColor':
                        this.applyStyle('#mail-demo .table th', function (element) {
                            element.style.borderBottomColor = color;
                        });

                        break;

                    case 'panelBackground':
                        this.applyStyle('#mail-demo .panel-content', function (element) {
                            element.style.backgroundColor = color;
                        });

                        break;

                    case 'promotionBackground':
                        this.applyStyle('#mail-demo .promotion', function (element) {
                            element.style.backgroundColor = color;
                        });

                        break;

                    case 'promotionBorderColor':
                        this.applyStyle('#mail-demo .promotion', function (element) {
                            element.style.borderColor = color;
                        });

                        break;
                }
            },

            applyStyle(selector, callback) {
                document.querySelectorAll(selector).forEach(callback);
            }
        }

    }




</script>
