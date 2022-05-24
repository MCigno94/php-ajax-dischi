<template>
  <header>
    <div class="container-fluid h-100">
      <div class="row row-cols-2 justify-content-between align-items-center h-100">
        <div class="logo cols">
          <img src="@/assets/img/Spotify.png" alt="">
        </div>
        <!-- /.logo -->
        <div class="cols h-100">
          <div class="row row-cols-2 align-items-center text-end h-100 p-1 pe-3">
            <SelectBoxArtist v-model="selectOptionArtist" @seleziona="selectArtist"/>
            <SelectBoxGenre v-model="selectOptionGenre" @seleziona="selectGenre"/>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.cols -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </header>
</template>

<script>
import SelectBoxGenre from '@/components/SelectBoxGenre.vue';
import SelectBoxArtist from '@/components/SelectBoxArtist.vue';
import state from '@/state.js';

export default {
  name: 'HeaderComponent',
    components: {
    SelectBoxGenre,
    SelectBoxArtist
  },
    data(){
    return {
      selectOptionGenre: '',
      selectOptionArtist: ''
    }
  },
  methods: {
    selectGenre() {
      console.log('SearchingGenre...');
      console.log(this.selectOptionGenre);
      state.selectOptionGenre = this.selectOptionGenre;
      console.log(state);
    },
    selectArtist() {
      console.log('SearchingArtist...');
      console.log(this.selectOptionArtist);
      state.selectOptionArtist = this.selectOptionArtist;
      console.log(state);
    }
  }
}
</script>

<style lang="scss" scoped>
  select {
    background-color: #1E2D3B;
    padding: 0.25rem 0;
  }
</style>