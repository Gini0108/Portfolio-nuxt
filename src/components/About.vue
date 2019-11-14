<template>
<section id="about">
  <img alt="Vue logo" class="self" src="./../assets/About/Sjors van Holst image.png">

  <div>
    <h1>About me</h1>
    <p>
      I’m Sjors van Holst, a passionate programmer with a focus on web design and experience with PHP, JS, HTML, CSS, C#, Vue, WordPress and AJAX. I’ve got a calm and friendly attitude with a positive approach, I grew up and live in the Netherlands. I finished primary school and continued to high school, where I was introduced to my first programming language: Processing!
    </p>

    <p>
      After spending about a year learning al the ins and outs of processing I was ready to move on in a different direction. I fast tracked my study "Applicatie- en Mediaontwikkelaar" since I already had experience programmin. I continued on to study "Informatica" at InHolland Haarlem. I was born on March 22, which makes me 19 years old. If your interested you can download a copy of my CV by clicking here.
    </p>

    <h2>Education</h2>
    <h3>Kajmunk College (2013 - 2017):</h3>
    <ul>
      <li>Physics</li>
      <li>English</li>
      <li>Math</li>
      <li>Art</li>
    </ul>
    <h3>ROC van Amsterdam (2017 - current):</h3>
    <ul>
      <li>JavaScript</li>
      <li>HTML/CSS</li>
      <li>Ajax</li>
      <li>PHP</li>
      <li>C#</li>
    </ul>

    <h2>Work</h2>
    <h3>Student aan Huis (8 months):</h3>
    <ul>
      <li>IT Support at home</li>
    </ul>
    <h3>Get Interactive (5 months):</h3>
    <ul>
      <li>Internship as a web developer</li>
    </ul>
    <h3>Get Interactive (4 months):</h3>
    <ul>
      <li>Part time software developer</li>
    </ul>

    <h2>Courses</h2>
    <h3>Secured by design:</h3>
    <ul>
      <li>Ethical hacking</li>
    </ul>
    <h3>ROC Light license:</h3>
    <ul>
      <li>Aviation rules &amp; laws</li>
    </ul>

    <h2>Competitions</h2>
    <h3>Skills heroes (National championship):</h3>
    <ul>
      <li>Application developer</li>
    </ul>
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

    display: flex;
    box-sizing: border-box;
  }

  img {
    height: 100%;
  }

  div {
    margin-left: 1%;
  }

  ul {
    list-style-type: none;
}
</style>
