<template>

    <div>

        <div class="action-buttons">

            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cssModal"
                    @click="generateCss">
                Generate Laravel markdown theme
            </button>

            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#htmlModal">
                Generate html
            </button>

            <div class="pull-right responsive-buttons">

                <div class="btn-group" role="group">

                    <button v-for="item in modes"
                            type="button"
                            :class="[mode == item ? 'btn btn-default' : 'btn']" @click="mode = item"
                    >
                        <i :class="['fa fa-' + item]" aria-hidden="true"></i>
                    </button>

                </div>

            </div>

        </div>

        <div class="browser" :style="mailWidth">

            <div class="browser-top">

                <div class="button-close"></div>
                <div class="button-min"></div>
                <div class="button-full"></div>
                <div class="url"></div>

                <div><i class="fa fa-paper-plane icon"></i></div>

            </div>

            <div class="browser-content">

                <div id="mail-demo">

                    <div v-html="mail"></div>

                </div>

            </div>

        </div>

        <div class="modal fade" id="cssModal" tabindex="-1" role="dialog" aria-labelledby="cssModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="cssModalLabel">Laravel Markdown Theme</h4>
                    </div>
                    <div class="modal-body">
                        <h4>How to use this theme in your Laravel applications</h4>
                        <ol>
                            <li>Create a new themes file in "resources/views/vendor/mail/html/themes"</li>
                            <li>Copy the below css and past it in the new theme file</li>
                            <li>Update the "config/mail.php" file to use the new theme</li>
                            <li>Congrats! You just created your own unique markdown theme</li>
                        </ol>
                        <textarea id="css-textarea" readonly style="width: 100%; height: 400px;">{{ css }}</textarea>
                    </div>
                    <div class="modal-footer">
                      <div v-if="copySucceeded" class="pull-left">
                        <h4><strong class="text-success">Copied to clipboard!</strong></h4>
                      </div>
                      <div class="pull-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click="copyElement('css-textarea')">Copy CSS</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="htmlModal" tabindex="-1" role="dialog" aria-labelledby="htmlModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="htmlModalLabel">HTML Mail</h4>
                    </div>
                    <div class="modal-body">
                        <h4>How to use this html in your applications</h4>
                        <ol>
                            <li>Copy the below html and past it in your mail template</li>
                            <li>Update the text, buttons, etc. to your preferences</li>
                            <li>Congrats! You just created a good looking email</li>
                        </ol>
                        <textarea id="html-textarea" readonly style="width: 100%; height: 400px;">{{ mail }}</textarea>
                    </div>
                    <div class="modal-footer">
                      <div v-if="copySucceeded" class="pull-left">
                        <h4><strong class="text-success">Copied to clipboard!</strong></h4>
                      </div>
                      <div class="pull-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click="copyElement('html-textarea')">Copy HTML</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>

<script>

    export default {

        props: ['theme', 'name'],

        data() {
            return {
                css: null,
                mail: null,
                copySucceeded: false,
                modes: ['mobile', 'tablet', 'desktop'],
                mode: 'desktop',
            }
        },

        mounted() {
            this.generatePreview();
        },

        computed: {
            mailWidth() {
                let width = '100%';
                let innerWidth = 570;

                if (this.mode == 'tablet') {
                    width = '768px';
                }

                if (this.mode == 'mobile') {
                    width = '375px';
                    innerWidth = 335;
                }

                $('#mail-demo .inner-body, #mail-demo .footer').width(innerWidth);

                return {
                    'width': width,
                }
            },
        },

        methods: {
            generatePreview() {
                var url = '/api/themes/' + this.theme;

                axios.get(url)
                    .then(response => this.mail = response.data);
            },

            generateCss() {
                var url = '/api/themes/' + this.theme + '/css';

                axios.get(url)
                    .then(response => this.css = response.data);
            },

            copyElement(elementId) {
              var element = document.getElementById(elementId);

              // Attempt 'execCommand' method, though deprecated.
              // Fallback to the future-proof method, albeit non-ubiquitous.
              try {
                element.focus();
                element.select();

                this.copySucceeded = document.execCommand('copy');

                if (this.copySucceeded) {
                  setTimeout(() => this.copySucceeded = false, 3000);
                } else {
                  this.copyElementFuture(element);
                }
              } catch (e) {
                this.copyElementFuture(element);
              }
            },

            copyElementFuture: function (element) {
              if (navigator.clipboard) {
                try {
                  navigator.permissions.query({'name': 'clipboard-write'}).then(function (result) {
                    if (['granted', 'prompt'].includes(result.state)) {
                      navigator.clipboard.writeText(element.value)
                          .then(() => this.copySucceeded = true,
                              () => this.copySucceeded = false)
                          .then(() => setTimeout(() => this.copySucceeded = false, 3000))
                          .catch(() => this.copySucceeded = false)
                    }
                  }.bind(this));
                } catch (e) {
                  // No markdown for you :(
                }
              }
            }
          }
    }


</script>
