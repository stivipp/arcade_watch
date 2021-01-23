<template>

    <transition name="fade">
        <div class="flex items-center p-3 text-white text-xl bg-green-600 rounded-md shadow-md fixed right-5 bottom-5 " v-show="visible">

                    {{ text }}

                <button
                    class="text-white p-2"
                    @click="hide">

                    <svg class="h-6 w-6 bold text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.185 1.417A8.582 8.582 0 001.602 10c0 4.74 3.842 8.582 8.583 8.582S18.768 14.74 18.768 10a8.582 8.582 0 00-8.583-8.583m0 16.263c-4.235 0-7.679-3.445-7.679-7.68 0-4.235 3.444-7.679 7.679-7.679S17.864 5.765 17.864 10c0 4.234-3.444 7.68-7.679 7.68m.639-7.68l2.842-2.844a.447.447 0 000-.637.447.447 0 00-.637 0L10.185 9.36 7.341 6.52a.447.447 0 00-.637 0 .447.447 0 000 .637L9.546 10l-2.841 2.844a.447.447 0 000 .637.447.447 0 00.637 0l2.844-2.841 2.844 2.841a.447.447 0 00.637 0 .447.447 0 000-.637L10.824 10z"/>
                    </svg>

                </button>

        </div>

    </transition>
    
</template>



<script>
    export default {
        props: ['text'],

        data() {
            return {
                visible: false
            }
        },
 
        created() {
            if(this.text) {
                this.show();
            }
        },

        methods: {
            show() {
                this.visible = true;
                setTimeout(() => this.hide(), 3000);
            },

            hide() {
                this.visible = false;
            }
        }
        
    };


</script>




<style lang="scss" scoped>

    .fade-enter-active, .fade-leave-active {
    transition: opacity .35s;
    }
    .fade-enter, .fade-leave-to {
    opacity: 0;
    }

</style>