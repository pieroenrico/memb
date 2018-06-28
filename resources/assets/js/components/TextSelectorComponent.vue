<script>
    export default {
        template: require('./templates/text-selector.html'),
        mounted() {
            this.loadParagraphs()
        },
        data: function(){
            return {
                loading: false,
                paragraphs: [],
                selectedParagraph: null,
            }
        },
        props: ['endpoint'],
        computed: {},
        methods: {
            loadParagraphs: function() {

                this.loading = true;

                axios.get(this.endpoint)
                    .then( response => {
                        this.paragraphs = response.data.paragraphs;
                        this.loading = false;
                })
                .catch( e => {
                    this.loading = false;
                    console.log(e)
                })
            },
            selectParagraph: function(id) {
                this.selectedParagraph = this.selectedParagraph == null ?  id : null;
            }
        }
    }
</script>