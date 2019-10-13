<template>
  <div id="app">
    <Intro />
    <About />
  </div>
</template>

<script>
  import Intro from './components/Intro.vue'
  import About from './components/About.vue'

  export default {
    name: 'app',

    components: {
      Intro,
      About
    }
  }
</script>

<style>
  html, body, #app {
    width: 100%;
    margin: 0px;
  }

  html {
    scroll-behavior: smooth;
  }
</style>
