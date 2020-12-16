<template>
  <section id="quote">
    <blockquote class="groucho">
      <vue-typer :text=getQuote erase-style="backspace" :erase-delay=45 :pre-type-delay=2000 @erased='updateQuote' @typed='onTyped'></vue-typer>
      <span class="nue-typer">{{ getQuote }}</span>

      <transition name="fade">
        <footer v-if="show">{{ getAuthor }}</footer>
      </transition>
    </blockquote>
  </section>
</template>

<script>
  export default {
    name: 'Quote',

    data: function () {
      return {
        index: 0,
        show: false
      }
    },

    props: {
      quotes: Array
    },

    methods: {
      updateQuote: function() {
        this.index ++;

        if (this.index >= this.quotes.length) {
          this.index = 0;
        }

        this.show = true;
      },

      onTyped: function() {
        this.show = false;
      }
    },

    computed: {
      getAuthor: function() {
        return this.quotes[this.index].author; 
      },

      getQuote: function() {
        return this.quotes[this.index].quote; 
      }
    },

    mounted: function() {
      this.updateQuote();
    }
  }
</script>

<style>
  blockquote {
    margin: 15px 20px;
  }

  .nue-typer, .vue-typer {
    width: 90%;
    color: e4e4e4c5;

    display: block;
    position: absolute;
  }

  .nue-typer {
    position: relative;
    opacity: 0;
  }

  .custom.char {
    color: #e4e4e4c5 !important;
    font-family: 'Open Sans', sans-serif;
  }

  .custom.caret { 
    background-color:e4e4e4c5 !important;
  }

  .vue-typer::before, .nue-typer::before {
    font-family: 'Open Sans', sans-serif;
    content: open-quote;
  }

  .vue-typer:after, .nue-typer:after  {
    font-family: 'Open Sans', sans-serif;
    content: close-quote;
  }

  .fade-leave-active {
    transition: opacity 2s;
  }

  .fade-enter-active {
    transition: opacity 1.5s;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0;
  }

  q::before, q::after {
    content: none;
  }

  .groucho {
    position: relative;
    font-family: 'Sanchez', serif;
    font-size: 28px;
    line-height: 1.5em;
  }

  footer {
    /* font-family: 'Noto Sans', sans-serif; */
    font-family: 'Open Sans', sans-serif;
    font-size: 24px;
    font-weight: 700;
    color: #e4e4e4c5;
    float: right;
  }

  footer::before {
    content: '\2015';  
  }

  footer::after {
    content: '\201D';
    
    right: 0;
    top: 0.28em;
    position: absolute;

    font-size: 2em;
    font-style: italic;
    color: #e4e4e4c5;
  }
</style>
