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

    <h3>Education</h3>

    <section class="sub">
      <h4>Kajmunk College (2013 - 2017):</h4>
      <ul>
        <li>Physics</li>
        <li>English</li>
        <li>Math</li>
        <li>Art</li>
      </ul>
    </section>

    <section class="sub">
      <h4>ROC van Amsterdam (2017 - current):</h4>
      <ul>
        <li>JavaScript</li>
        <li>HTML/CSS</li>
        <li>Ajax</li>
        <li>PHP</li>
        <li>C#</li>
      </ul>
    </section>

    <h3>Work</h3>

    <section class="sub">
      <h4>Student aan Huis:</h4>
      <ul>
        <li>Part time IT Support at home (8 months)</li>
      </ul>
    </section>

    <section class="sub">
    <h4>Get Interactive:</h4>
      <ul>
        <li>Full time Internship as a web developer <b>(8 months)</b></li>
        <li>Part time software developer <b>(5 months)</b></li>
      </ul>
    </section>

    <h3>Courses</h3>

    <section class="sub">
      <h4>Secured by design:</h4>
      <ul>
        <li>Ethical hacking</li>
      </ul>
    </section>

    <section class="sub">
      <h4>ROC Light license:</h4>
      <ul>
        <li>Aviation rules &amp; laws</li>
      </ul>
    </section>

    <h3>Competitions</h3>

    <section class="sub">
      <h4>Skills heroes (National championship):</h4>
      <ul>
        <li>Application developer</li>
      </ul>
    </section>
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

  .sub {
    margin: 0.27em 1em;
  }

  ul {
    padding: 0;
    margin: 0 1em;
    list-style-type: none;
  }

  h3 {
    border-top: 1px solid rgba(0, 0, 0, 0.25);

    padding-top: 0.25em;
    margin-top: 0.75em;
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
