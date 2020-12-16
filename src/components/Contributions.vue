<template>
  <section id="contributions">
    <div class="yeet" style="width: 59vw; padding: 1%; padding-right: 0.5%;">
      <div v-for="(rowData, rowIndex) in colorMatrix" :key="rowIndex" style="display: flex; flex-wrap: wrap;">
        <div class="rect" :style="{ 'backgroundColor': colorMatrix[rowIndex][cellIndex] }" v-for="(cellData, cellIndex) in rowData" :key="cellIndex"></div>
      </div>
    </div>

    <u-animate-container class="u-animate-container" style="width: 39vw; padding: 1%; padding-left: 0.5%;">
      <u-animate class="u-animate" name="fadeInRight" duration="1s" animateClass="fadeInUp">
        <img alt="Vue logo" src="./../assets/About/Wouter de Bruijn & Sjors van Holst.png">
      </u-animate>
    </u-animate-container>
  </section>
</template>

<script>
  export default {
    name: 'Contributions',

    data: function () {
      return {
        colorMatrix: [],
        contributionMatrix: [],

        jumpValue: 0,
        offsetValue: 0,
        highestValue: 0
      }
    },

    methods: {
      generateColors: function() {
        this.colorMatrix = [];

        this.offsetValue += 1;

        for (let i = 0; i < this.contributionMatrix.length; i ++) {
          this.colorMatrix.push([])
          
          for (let j = 0; j < this.contributionMatrix[i].length; j ++) {
            this.colorMatrix[i].push(`rgba(255, 0, 0, ${this.jumpValue * this.contributionMatrix[i][j] + 0.25 * Math.random()})`);
          }
        }
      },
      generateMatrix: function() {
        let arrayData = [3,2,4,3,4,2,3,5,3,3,5,0,0,1,3,2,0,2,1,3,2,2,1,5,0,3,2,2,5,2,3,1,4,3,5,1,4,4,1,2,5,3,2,0,5,3,3,1,3,1,5,5,4,1,1,5,0,3,2,4,0,4,2,4,1,2,1,2,4,1,2,4,0,2,2,2,0,4,0,5,3,0,1,3,2,3,5,1,1,3,5,1,1,4,1,5,0,1,5,4,2,4,5,1,2,4,1,2,4,1,4,1,3,1,5,1,5,1,1,5,2,3,1,1,4,5,4,1,5,4,0,4,2,4,3,4,1,4,3,4,1,1,4,4,1,2,4,2,0,5,2,5,5,2,1,4,4,1,4,2,0,3,3,1,4,2,1,5,1,5,4,2,5,1,2,5,0,2,1,1,1,4,4,1,1,5,4,1,0,3,0,1,5,2,5,0,1,4,2,1,0,5,1,2,2,5,4,3,4,4,0,2,0,4,5,4,2,0,4,5,4,1,2,0,1,1,1,2,3,3,5,1,4,2,1,1,1,2,3,0,3,3,1,0,3,5,3,4,3,0,1,1,3,1,2,3,3,4,1,3,4,4,0,1,3,3,2,3,2,3,4,2,4,5,0,4,3,0,3,1,2,4,4,2,2,3,2,2,3,0,1,4,3,2,2,2,1,3,4,1,5,4,3,5,3,3,0,3,1,1,0,4,2,4,4,3,3,2,3,2,4,2,1,4,1,5,1,4,3,0,1,0,0,1,2,3,2,2,3,5,2,3,3,1,1,3,5,1,4,2,4,4,3,3,1,0,5,1,5,1,1,3,1,1,0];
      
        this.highestValue = Math.max(...arrayData);
        this.jumpValue = 0.75 / this.highestValue;

        let roundedRows = Math.floor(arrayData.length / 25);
        let roundedIndex = roundedRows * 25;

        for (let i = 0; i < roundedRows; i ++) this.contributionMatrix.push(arrayData.slice(i * 25, (i + 1) * 25));
        this.contributionMatrix.push(arrayData.slice(roundedIndex, arrayData.length));
      }
    },

    mounted: function() {
      let that = this;

      this.generateMatrix();
      this.generateColors();
      setInterval(that.generateColors, 332);
    }
  }
</script>

<style scoped>
  #contributions {
    height: 100vh;
    width: 100vw;
    
    box-sizing: border-box;
    display: flex;
  }

  .yeet {
     margin-right: -0.125%; margin-left: -0.125%
  }

  .rect {
    height: calc(59vw / 25);
    width: 3.25%;
    
    margin: calc(0.75%/2); 
  /* margin */
    /* transition: background-color 0.5s linear; */
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
      transform: translate3d(30%, 0, 0);
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
