<template>
    <div class="cols gy-3 text-white text-center">
        <div class="card rounded-0 border-0 h-100">
            <img :src="disc.poster" class="card-img-top" :alt="disc.title">
            <div class="card-body pt-0">
                <h6 class="card-title text-uppercase">{{disc.title}}</h6>
                <div class="card-text">
                    <div class="author">{{disc.author}}</div>
                    <!-- /.author -->
                    <div class="year">{{disc.year}}</div>
                    <!-- /.year -->
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.cols -->
</template>

<script>
export default {
    name: 'DiscItemComponent',
    props: {
        disc: Object
    },
}
</script>

<style>

</style>