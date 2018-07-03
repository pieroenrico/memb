<script>
    export default {
        template: require('./templates/author-selector.html'),
        mounted() {
            this.loadAuthors()
        },
        data: function(){
            return {
                loading: false,
                authors: [],
                authorsList: [],
                selectedAuthor: null,
                search: '',
            }
        },
        props: ['endpoint'],
        computed: {
            filteredList() {
                return this.authorsList.filter(author => {
                    return author.fullname.toLowerCase().includes(this.search.toLowerCase())
                })
            }
        },
        methods: {
            loadAuthors: function() {

                this.loading = true;

                axios.get(this.endpoint)
                    .then( response => {
                        this.authors = response.data;
                        this.authorsList = this.authors.slice()
                        this.loading = false;
                })
                .catch( e => {
                    this.loading = false;
                    console.log(e)
                })
            },
            selectAuthor: function(id) {
                this.selectedAuthor = id;
            }
        }
    }
</script>