<template>
    <div class="artist cols h-100">
        <select class="artist_form h-100 text-white rounded-3" id="floatingSelectGrid" aria-label="Floating label select example"
        :value= "selectOptionArtist"
        @input="$emit('input', $event.target.value)"
        @click="$emit('seleziona', selectOptionArtist)"
        >
            <option selected value="">Tutti gli artisti</option>
            <option value="metallica">Metallica</option>
            <option value="dave Weckl">Dave Weckl</option>
            <option value="michael Jacjson">Michael Jacjson</option>
            <option value="bon Jovi">Bon Jovi</option>
            <option value="queen">Queen</option>
            <option value="sting">Sting</option>
            <option value="steve Gadd Band">Steve Gadd Band</option>
            <option value="eric Clapton">Eric Clapton</option>
            <option value="deep Purple">Deep Purple</option>
            <option value="iron Maiden">Iron Maiden</option>
        </select>
    </div>
    <!-- /.artist -->
</template>

<script>
export default {
    name: "SelectBoxArtist",
    props: {
        selectOptionArtist: String
    }
}
</script>

<style lang="scss" scoped>
  select {
    background-color: #1E2D3B;
    padding: 0.25rem 0;
  }
</style>