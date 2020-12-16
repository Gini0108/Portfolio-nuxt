<template>
  <div id="app">
    <Intro />
    <About />
    <Contributions />
  </div>
</template>

<script>
  import Intro from './components/Intro.vue'
  import About from './components/About.vue'
  import Contributions from './components/Contributions.vue'

  export default {
    name: 'app',

    components: {
      Intro,
      About,
      Contributions
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
    /* font-weight: 300; */
    margin: 0.27em 0;
  }

  html {
    scroll-behavior: smooth;
  }

    @media (prefers-color-scheme: dark) {
      body {
        color: #e4e4e4;
        font-size: 18px;
        background-color: #222222;
      }

      p {
        color: #e4e4e4c5;
      }
    }
</style>
