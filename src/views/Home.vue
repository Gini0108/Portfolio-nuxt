<template>
  <div class="home">
    <Background />

    <div class="center">
      <span class="title">This site is under construction</span>
      <span class="subtitle">So many projects, so little time...</span>
    </div>
  </div>
</template>

<script lang="ts">
import { Options, Vue } from "vue-class-component";

import Background from "@/components/Background.vue";

@Options({
  components: {
    Background,
  },
})
export default class Home extends Vue { }
</script>

<style lang="scss" scoped>
.home {
  width: 100vw;
  height: 100vh;

  display: flex;
  align-items: center;
  justify-content: center;

  .center {
    display: flex;
    text-align: center;
    flex-direction: column;

    .title {
      color: white;
      font-size: 2em;
      font-weight: 600;
    }

    .subtitle {
      color: white;
      font-size: 1em;
    }
  }
}
</style>
