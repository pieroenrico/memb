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
        props: ['endpoint', 'search-paragraph', 'mode', 'author', 'author-data', 'text', 'text-data'],
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
                axios.get(this.makeURL())
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
            },
            makeURL: function() {
                var baseURL = '/api/picturexts?';
                if(this.author) baseURL += 'author=' + this.author + '&'
                if(this.text) baseURL += 'text=' + this.text + '&'
                return baseURL
            }
        }
    }
</script>