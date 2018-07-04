<script>
    import Picturext from './Picturext.vue';
    export default {
        template: require('./templates/lister-component.html'),
        mounted() {
            this.loadPicturexts()
            this.correctHeights()
        },
        data: function(){
            return {
                loading: false,
                mode: 'map',
                picturexts: [],
                showQuickView: false,
                selectedPicturext: null,
                mapOptions: {
                    fullscreenControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,

                }
            }
        },
        props: ['endpoint', 'search-paragraph'],
        components: {
            'memb-picturext': Picturext,
        },
        computed: {

        },
        methods: {
            correctHeights() {
                var height = $(document).outerHeight() - $('header.topbar').outerHeight() - $('header.header-upload').outerHeight() - 145
                $('.vue-map-container').css({
                    height: height + 'px'
                })
            },
            loadPicturexts() {
                this.loading = true;
                axios.get('/api/picturexts')
                    .then( response => {
                    this.picturexts = response.data;
                    this.loading = false;
                })
                .catch( e => {
                        this.loading = false;
                    console.log(e)
                })
            },
            showPreview(id) {
                this.showQuickView = true
                for(var i = 0; i < this.picturexts.length; i++) {
                    if(this.picturexts[i].id == id) {
                        this.selectedPicturext = this.picturexts[i];
                        break;
                    }
                }
            },
            setMode: function(mode) {
                this.mode = mode
            }
        }
    }
</script>