<script>
    export default {
        template: require('./templates/text-selector.html'),
        mounted() {
            this.loadTexts()
        },
        data: function(){
            return {
                loading: false,
                texts: [],
                textsList: [],
                selectedText: null,
                selectedAuthor: null,
                search: '',
            }
        },
        props: ['endpoint', 'author', 'mode'],
        computed: {
            filteredList() {
                return this.textsList.filter(text => {
                    return text.search.toLowerCase().includes(this.search.toLowerCase())
                })
            }
        },
        methods: {
            loadTexts: function() {

                this.loading = true;

                axios.get(this.endpoint + (this.author ? '?author_id=' + this.author : '' ))
                    .then( response => {
                        this.texts = response.data;
                        this.textsList = this.texts.slice()
                        this.loading = false;
                })
                .catch( e => {
                    this.loading = false;
                    console.log(e)
                })
            },
            selectText: function(id, author_id) {

                if(this.mode == 'selector') {
                    this.selectedText = id;
                    this.selectedAuthor = id;
                    this.$emit('textSelected', this.selectedText, this.selectedAuthor);
                } else if(this.mode == 'url') {
                    alert('b')
                }

            }
        }
    }
</script>