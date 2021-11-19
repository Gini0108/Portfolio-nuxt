<template>
  <!--
  <div id="nav">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
  </div>
  -->

  <router-view />
</template>

<style lang="scss">
body, html, #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  text-align: left;
  font-size: 3vw;

  margin: 0;

  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
}

@media only screen and (min-width: 600px) {
  html {
    font-size: 2.5vw;
  }
}

@media only screen and (min-width: 768px) {
  html {
    font-size: 2vw;
  }
}

@media only screen and (min-width: 992px) {
  html {
    font-size: 1.5vw;
  }
}

@media only screen and (min-width: 1366px) {
  html {
    font-size: 1.25vw;
  }
}

@media only screen and (min-width: 1920px) {
  html {
    font-size: 1vw;
  }
}

@media only screen and (min-width: 2560px) {
  html {
    font-size: 0.75vw;
  }
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
}
</style>
