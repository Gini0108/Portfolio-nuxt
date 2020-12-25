<template>
  <div class="background color">

  </div>
</template>

<script lang="ts">
import { Vue } from 'vue-class-component';

export default class SnowBackground extends Vue { }
</script>

<style scoped lang="scss">
.background {
  animation: gradient 25s ease infinite;
  background: linear-gradient(270deg, #e5308b, #89216B);
  background-size: 350% 3500%;

}

@keyframes gradient {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0% 50%;
    }
}
</style>
