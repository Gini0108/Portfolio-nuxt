<template>
  <div class="container">
    <color-background />

    <snow-background :count="100" />
    
    <image-background :source="random" />

    <div class="background content">
      <h1>
        <b>Hi</b>
        there!
      </h1>

      <h2>
        This is akward..
      </h2>

      <span>
        I'm currently working on my portfolio, so there really isn't much here <b>:(</b>
      </span>

      <span>
        So I'll give you the short version:
        I'm a web-developer with experience in
        <b>JavaScript</b>,
        <b>TypeScript</b>,
        <b>PHP</b>,
        <b>Vue</b>,
        <b>C#</b>,
        <b>MySQL</b>
        and a lot
        <b>more</b>!
        You'll definitely want to hire me
        <b>:)</b>
      </span>

      <span>
        If you're somehow not convinced yet, I invite you to come back in a while!
      </span>
    </div>
  </div>
</template>

<script lang="ts">
import { Options, Vue } from 'vue-class-component';

import SnowBackground from './components/SnowBackground.vue';
import ColorBackground from './components/ColorBackground.vue';
import ImageBackground from './components/ImageBackground.vue';

@Options({
  components: {
    SnowBackground,
    ColorBackground,
    ImageBackground,
  },
})
export default class App extends Vue {
  private images = [
    '1.jpeg',
    '3.jpeg',
  ]

  get random() {
    const random = Math.random();
    const { length } = this.images;
    return this.images[Math.floor(random * length)];
  }
}
</script>

<style lang="scss">
:root {
  --text: #5362F6;
  --middle: #9572F7;
  --shadow: #E485F8;
}

body,
html,
#app,
.container  {
  width: 100%;
  height: 100%;
  margin: 0px;
  position: relative;
  overflow: hidden;
  font-family: Avenir, Helvetica, Arial, sans-serif;
}

.background {
  width: 100%;
  height: 100%;

  top: 0px;
  left: 0px;
  position: absolute;
}

.content {
  padding: 2.5%;
  text-align: left;

  h1, h2, span {
    color: var(--text);
    margin: 0px;
  }

  h2, span {
    font-weight: 500;

    text-shadow: 2px 2px var(--middle),
                  4px 4px var(--shadow);
  }

  h1 {
    font-size: 102px;
    font-weight: 600;
    letter-spacing: 5px;

    text-shadow: 3px 3px var(--middle),
                  6px 6px var(--shadow);
  }

  h2 {
    font-size: 62px;
    margin-bottom: 20px;
    letter-spacing: 4px;
  }

  span {
    display: block;
    font-size: 42px;
    margin-bottom: 15px;
    letter-spacing: 3px;
  }

  b {
    font-weight: 600;
  }
}
</style>
