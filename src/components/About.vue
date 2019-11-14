<template>
<section id="about">
  <img alt="Vue logo" src="./../assets/About/Sjors van Holst image.png">

  <div>
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
  export default {
    name: 'About'
  }
</script>

<style scoped>
  #about {
    height: 100vh;
    width: 100vw;

    padding: 1%;

    box-sizing: border-box;
    display: flex;
  }

  img {
    object-fit: cover;
    height: 100%;
    width: 30%;
  }

  div {
    margin-left: 1%;
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
</style>
