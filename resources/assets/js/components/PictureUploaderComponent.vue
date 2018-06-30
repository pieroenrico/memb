<script>
    export default {
        template: require('./templates/picture-uploader.html'),
        mounted() {
            this.initDropify()
        },
        data: function(){
            return {
                loading: false,

            }
        },
        props: [],
        computed: {},
        methods: {
            initDropify: function() {
                $('.dropify').dropify()
            }
        }
    }
</script>