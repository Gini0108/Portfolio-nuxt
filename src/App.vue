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
    
    font-weight: 300;
    font-family: 'Open Sans', sans-serif;
  }

  h1, h2, h3, h4, h5 {
    font-weight: 300;
    margin: 0.27em 0;
  }

  html {
    scroll-behavior: smooth;
  }
</style>
