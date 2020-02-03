<template>
  <section id="intro">
    <div class="background"></div>

    <img alt="Vue logo" class="title" src="./../assets/Intro/Sjors van Holst title.png">
    <img alt="Vue logo" class="self" src="./../assets/Intro/Sjors van Holst image.png">

    <a href="#about">
    <img alt="Vue logo" class="arrow" src="./../assets/Intro/Arrow.png">
  </a>
</section>
</template>

<script>
  export default {
    name: 'Intro'
  }
</script>

<style scoped>
  #intro {
    position: relative;
    height: 100vh;
    width: 100vw;

    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    animation: background 15s ease infinite;
    background-size: 400% 400%;
  }

  .background {
    width: 100%;
    height: 100%;
    opacity: 0.65;

    background-image: url(https://media.giphy.com/media/l4hLyOGRJWNSR8QQ8/giphy.gif);
    background-size: cover;
  }

  .title {
    width: 84vw;
    position: absolute;
    animation: spin 18s linear infinite;

    top: calc(45% - 42vw);
    left: calc(50% - 42vw);
  }

  .self {
    width: 36vw;
    position: absolute;

    top: calc(45% - 18vw);
    left: calc(50% - 18vw);
  }

  .arrow {
    width: 84vw;
    transition: width 0.5s;
    position: absolute;

    top: calc(85%);
    left: calc(50% - 42vw);
    animation: bounce 0.5s infinite alternate;
  }

  @media (orientation: landscape) {
    .title {
      width: 58vh;
      top: calc(45% - 29vh);
      left: calc(50% - 29vh);
    }

    .arrow {
      width: 58vh;
      left: calc(50% - 28vh);
    }

    .self {
      width: 25vh;
      top: calc(45% - 12.5vh);
      left: calc(50% - 12.5vh);
    }
  }

  @media (prefers-color-scheme: dark) {
    .background {
      background-image: url(https://i.pinimg.com/originals/76/f8/e7/76f8e75b3056e7b1fe8e73c598eb1d36.gif);
    }

    #intro {
      background: linear-gradient(-45deg, #2E3047, #43455C, #3C3F58, #707793);
      animation: background 5s ease infinite;
    }
  }

  @keyframes spin {
    100% {
      transform: rotate(360deg);
    }
  }

  @keyframes background {
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

  @keyframes bounce {
    0% {
      margin-top: 15;
    }

    100% {
      margin-top: -15px;
    }
  }
</style>
