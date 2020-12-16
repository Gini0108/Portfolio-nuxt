<template>
  <section id="about">
    <u-animate-container class="u-animate-container" style="width: 39%; margin: 1%; margin-right: 0.5%;">
      <u-animate class="u-animate" name="fadeInLeft" duration="1s" animateClass="fadeInUp">
        <img alt="Vue logo" src="./../assets/About/Wouter de Bruijn & Sjors van Holst.png">
      </u-animate>
    </u-animate-container>
    
    <div style="width: 59%; margin: 1%; margin-left: 0.5%; display: flex; flex-direction: column; justify-content: space-between;">
      <div style="margin: 15px 20px">
      <h1>About me</h1>
      <p>I’m Sjors van Holst, a passionate programmer with a focus on web design and experience with PHP, JS, HTML, CSS, C#, Vue, WordPress and AJAX. I’ve got a calm and friendly attitude with a positive approach, I grew up and live in the Netherlands. I finished primary school and continued to high school, where I was introduced to my first programming language: Processing!</p>
      <p>After spending about a year learning al the ins and outs of processing I was ready to move on in a different direction. I fast tracked my study "Applicatie- en Mediaontwikkelaar" since I already had experience programmin. I continued on to study "Informatica" at InHolland Haarlem. I was born on March 22, which makes me 19 years old. If your interested you can download a copy of my CV by clicking here.</p>
      </div>

      <Quote :quotes=quotes></Quote>
    </div>
  </section>
</template>

<script>
import { UAnimateContainer, UAnimate } from 'vue-wow';

import Quote from './Quote.vue'

export default {
  name: 'About',

  data: function () {
    return {
      quotes: [
        {
          author: "Ianthe Vlems",
          quote: "It has been, and will be like that sometimes."
        },
        {
          author: "Laurens van Coeverden",
          quote: "Somebody once told me the world is gonna roll me! Bruh you really gonna play me like this"
        }
      ],
    }
  },

  components: {
    UAnimateContainer,
    UAnimate,
    Quote
  }
}
</script>

<style scoped>
  #about {
    height: 100vh;
    width: 100vw;

    box-sizing: border-box;
    display: flex;

    background: linear-gradient(270deg, #4c5f7a, #393e6f, #3d2e4f, #321d2f);
    background-size: 800% 800%;

    animation: gradient 15s ease infinite;
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

  img {
    width: 100%;
    height: 100%;
    opacity: 0.65;
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
