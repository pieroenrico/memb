<script>
    export default {
        template: require('./templates/location-selector.html'),
        mounted() {

        },
        data: function(){
            return {
                loading: false,
                marker: {lat:-34.6066663, lng:-58.4336508},
            }
        },
        props: [],
        computed: {},
        methods: {
            getMarkerPosition: function(position) {
                this.marker.lat = position.lat();
                this.marker.lng = position.lng();
            }
        }
    }
</script>