<script>
    export default {
        template: require('./templates/picturext.html'),
        mounted() {
            this.displayPanel = this.displayBottomPanel ? true : false
        },
        data: function(){
            return {
                loading: false,
                displayPanel: true,
                mapOptions: {
                    fullscreenControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,

                }
            }
        },
        props: ['id', 'display-bottom-panel', 'picture', 'location', 'user', 'tags', 'likes', 'text', 'quickview'],
        computed: {

        },
        methods: {
            textIsLong: function(text) {
                return text.length > 100
            }
        }
    }
</script>