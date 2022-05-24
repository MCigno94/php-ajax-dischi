<template>
    <main>
        <div class="container">

            <section class="discs" v-if="!loading">
                <div class="row row-cols-2 row-cols-md-3 row-cols-xxl-5">
                    <DiscItem 
                    :disc="disc" 
                    v-for="(disc, index) in filteredDisc" 
                    :key="index" />
                </div>
                <!-- /.row -->
                <div></div>
            </section>
            <!-- /.discs -->
            <div class="loading d-flex h-100 align-items-center justify-content-center" v-else>
                <img src="https://images.squarespace-cdn.com/content/v1/58d008c65016e1f1078cc00a/1590864426214-BA0KVV3CN35BFZFR380R/Spotify-Loading-Animation_3.gif" alt="">
            </div> 

        </div>
        <!-- /.container-md -->
    </main>
</template>

<script>
import axios from "axios";
import DiscItem from '@/components/DiscItemComponent.vue';
import state from '@/state.js';

export default {
    name: 'MainComponent',
    components: {
        DiscItem
    },

    data() {
        return {
        API_URL: 'http://localhost/PHP/php-ajax-dischi/php/db.php',
        discs: null,
        loading: true,
        error: null
        }
    },
    methods: {
        callApi(){
            axios
            .get(this.API_URL)
            .then(response => {
                console.log(response);
                this.discs = response.data;
                this.loading = false;
            })
            .catch(error => {
                console.log(error);
                this.error = `Sorry There is a problem! ${error.message}`
            });
        }   
    },
    computed: {
        filteredDisc(){

            return this.discs.filter(disc => {
                if(state.selectOptionArtist){
                    return disc.author.toLowerCase().includes(state.selectOptionArtist.toLowerCase())
                } else if (state.selectOptionGenre) {
                    return disc.genre.toLowerCase().includes(state.selectOptionGenre.toLowerCase())
                } else if (state.selectOptionArtist === '' || state.selectOptionGenre === '') {
                    return disc
                }
                })
        }

    },
    mounted(){
        this.callApi()
  },
}
</script>

<style lang="scss" scoped>
    .loading {

        img {
            padding: 2rem;
            width: calc((100vh - 60px) - 4rem);
            aspect-ratio: 1/1;
            border-radius: 50%;
        }
    }
</style>