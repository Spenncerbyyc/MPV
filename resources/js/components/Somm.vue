<template>
    <div id="Somm">
      <h1>{{ ProteinSelection }} - {{ WineSelection }}</h1>
    </div>
</template>

<script>
export default {
  data: function() {
    return {
      ProteinSelection: "",
      WineSelection: "",
    };
    },
    mounted: function() {
    this.$root.$on("ProteinSelection", this.ProteinSelection);
    this.$root.$on("WinePairing", this.WinePairing);
        },
    methods: {
        getWine() {
      if (this.ProteinSelection === this.WineSelection) {
        console.log("Here is your wine!");
      }
        }
    }
}
</script>

//Set name, description, 

//Reccomendation response text

//Presents selection with some info with logic, this wine will match because this

//Red Meat - Bold Red Cab Sauv, IPA

// Chicken - Rich White Viognier, Wheat Beer

// Pork - Medium Red Grenache, Amber Ale

// Fish - Dry White Sauv Blanc, Brown Ale

// Veggies - Pinot Noir, Saison

//Front end asks API, API is Sommelier, API returns Axios call, API returns JSON object JSON location, API will have key value pair, keys are proteins,
//values are more key value pairs, image title/title, use API as mule,
