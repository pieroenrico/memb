<script>
    export default {
        template: require('./templates/paragraph-selector.html'),
        mounted() {

            this.selectedText = this.text;
            this.selectedAuthor = this.author;
            this.loadParagraphs()

        },
        data: function(){
            return {
                loading: false,
                story: null,
                paragraphs: [],
                paragraphsList: [],
                selectedParagraph: null,
                selectedText: null,
                selectedAuthor: null,
                search: ''
            }
        },
        props: ['endpoint', 'text', 'author'],
        computed: {
            filteredList() {
                return this.paragraphsList.filter(paragraph => {
                    return paragraph.paragraph.toLowerCase().includes(this.search.toLowerCase())
                })
            }
        },
        methods: {
            loadParagraphs: function() {

                this.loading = true;
                axios.get(this.makeURL(this.endpoint, this.text))
                    .then( response => {
                        this.story = response.data.story;
                        this.paragraphs = response.data.paragraphs;
                        this.paragraphsList = this.paragraphs.slice()
                        this.loading = false;
                })
                .catch( e => {
                    this.loading = false;
                    console.log(e)
                })
            },
            highlightSearch(text) {
                if(this.search == '') {
                    return text;
                } else {
                    return text.replace(new RegExp(this.search, "gi"), match => {
                        return '<span class="highlightText">' + match + '</span>';
                    });
                }
            },
            selectParagraph: function(id) {
                this.selectedParagraph = this.selectedParagraph == null ?  id : null;
            },
            changeStep: function() {
                this.$emit('changeStep', 1);
            },
            makeURL: function(base, id) {
                return base.replace('{id}', id)
            }
        }
    }
</script>