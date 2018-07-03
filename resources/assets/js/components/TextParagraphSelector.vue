<script>
    import TextSelectorComponent from './TextSelectorComponent.vue'
    import ParagraphSelectorComponent from './ParagraphSelectorComponent.vue'
    export default {
        template: require('./templates/text-paragraph-selector.html'),
        components: {
            'memb-text-selector': TextSelectorComponent,
            'memb-paragraph-selector': ParagraphSelectorComponent,
        },
        mounted() {
            this.step = this.startIn
            console.log(this.step)
        },
        data: function(){
            return {
                loading: false,
                step: 0,
                selectedAuthor: null,
                selectedText: null,
                selectedParagraph: null,
            }
        },
        props: ['start-in'],
        computed: {

        },
        methods: {
            onTextSelected: function(textSelected, authorSelected) {
                console.log('onTextSelected')
                this.step = 2
                this.selectedText = textSelected
                this.selectedAuthor = authorSelected
            },
            onParagraphSelected: function(paragraphSelected) {
                console.log('onParagraphSelected')
                this.selectedParagraph = paragraphSelected
            },
            onChangeStep: function(step) {
                if(step == 1) {
                    this.step = 1
                    this.selectedText = null
                    this.selectedAuthor = null
                }
            }
        }
    }
</script>