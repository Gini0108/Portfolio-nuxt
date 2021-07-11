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
body {
  margin: 0px;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  text-align: left;
  font-size: 3vw;

  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
}

@media only screen and (min-width: 600px) {
  #app {
    font-size: 2.5vw;
  }
}

@media only screen and (min-width: 768px) {
  #app {
    font-size: 2vw;
  }
}

@media only screen and (min-width: 992px) {
  #app {
    font-size: 1.5vw;
  }
}

@media only screen and (min-width: 1366px) {
  #app {
    font-size: 1.25vw;
  }
}

@media only screen and (min-width: 1920px) {
  #app {
    font-size: 1vw;
  }
}

@media only screen and (min-width: 2560px) {
  #app {
    font-size: 0.75vw;
  }
}
</style>
