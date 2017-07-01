<template>
  <div class="col-xs-6 col-md-3" data-toggle="modal" data-target="#myModal">
      <a href="#" class="text-center bg-white">
            <img src="{{Storage::url($good->pic)}}" alt="{{ $good->name }}">
                  <h3>{{ $good->name }}</h3>
      </a>
  </div>
</template>

<script>
    export default {
        props: ['post', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(get) {
                axios.get('/goods/'+post)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(post) {
                axios.post('/goods/'+post)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>
