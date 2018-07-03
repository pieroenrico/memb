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
            }
        },
        props: ['display-bottom-panel', 'picture', 'location', 'user', 'tags', 'likes', 'text'],
        computed: {

        },
        methods: {

        }
    }
</script>