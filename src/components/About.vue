<template>
  <section id="about">
    <u-animate-container class="u-animate-container" style="width: 39%; margin: 1%; margin-right: 0.5%;">
      <u-animate class="u-animate" name="fadeInLeft" duration="1s" animateClass="fadeInUp">
        <img alt="Vue logo" src="./../assets/About/Wouter de Bruijn & Sjors van Holst.png">
      </u-animate>
    </u-animate-container>
    
    <div style="width: 59%; margin: 1%; margin-left: 0.5%;">
      <h1>About me</h1>
      <p>I’m Sjors van Holst, a passionate programmer with a focus on web design and experience with PHP, JS, HTML, CSS, C#, Vue, WordPress and AJAX. I’ve got a calm and friendly attitude with a positive approach, I grew up and live in the Netherlands. I finished primary school and continued to high school, where I was introduced to my first programming language: Processing!</p>
      <p>After spending about a year learning al the ins and outs of processing I was ready to move on in a different direction. I fast tracked my study "Applicatie- en Mediaontwikkelaar" since I already had experience programmin. I continued on to study "Informatica" at InHolland Haarlem. I was born on March 22, which makes me 19 years old. If your interested you can download a copy of my CV by clicking here.</p>
    </div>
  </section>
</template>

<script>
import { UAnimateContainer, UAnimate } from 'vue-wow';

export default {
  name: 'About',

  components: {
    UAnimateContainer,
    UAnimate
  }
}
</script>

<style scoped>
  #about {
    height: 100vh;
    width: 100vw;

    box-sizing: border-box;
    display: flex;
  }

  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .u-animate {
    width: 100%;
    height: 100%;
  }

  @keyframes fadeInUp {
    0% {
      transform: translate3d(-30%, 0, 0);
      opacity: 0;
    }

    100% {
      transform: none;
      opacity: 1;
    }
  }

  .fadeInUp {
    opacity: 0;
    animation-name: fadeInUp;
    animation-timing-function: ease-out;
  }
</style>
