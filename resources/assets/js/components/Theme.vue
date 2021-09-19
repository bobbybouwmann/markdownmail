<template>

    <div>

        <div class="colors-collection">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <div v-for="(colors, category) in categories" class="panel panel-default">

                    <div :href="'#collapse' + category"
                         :id="'heading' + category"
                         :aria-controls="'collapse' + category"
                         class="panel-heading collapsed"
                         data-toggle="collapse"
                         role="tab"
                         data-parent="#accordion"
                         aria-expanded="false">

                        <h4 class="panel-title">

                            {{ category[0].toUpperCase() + category.substr(1) }}

                        </h4>

                    </div>

                    <div :id="'collapse' + category"
                         :aria-labelledby="'heading' + category"
                         class="panel-collapse collapse"
                         role="tabpanel">

                        <div class="panel-body">

                            <color v-for="color in colors"
                                   v-on:color_selected="colorSelected"
                                   :id="color.id"
                                   :theme="theme"
                                   :defaultColor="color.color"></color>

                        </div>

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
                categories: [],
            }
        },

        created() {
            this.fetchColors();
        },

        methods: {
            colorSelected(id, color) {
                this.handleColorSelected(id, color);
            },

            fetchColors() {
                var url = '/api/themes/' + this.theme + '/colors';

                axios.get(url)
                    .then(response => this.categories = response.data);
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
                        this.applyStyle('#mail-demo .body a:not(.button)', function (element) {
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
