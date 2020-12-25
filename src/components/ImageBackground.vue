<template>
  <div class="background image" :style="{ backgroundImage: url }">
    <img :src="source">
  </div>
</template>

<script lang="ts">
import { Options, Vue } from 'vue-class-component';

@Options({
  props: {
    source: String,
  },
})
export default class SnowBackground extends Vue {
  source!: string

  get url() {
    return `url(${this.source})`;
  }
}
</script>

<style scoped lang="scss">
.background {
  opacity: 0.35;

  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;

  img {
    display: none;
  }
}
</style>
