<template>
    <div id="Somm">
      <h1>{{ ProteinSelection }} - {{ WineSelection }}</h1>
    </div>
</template>

<script>
export default {
name: "Somm",
data: function() {
return {
     quote: "Wine Pairing"
};
},
mounted: function() {
this.$root.$on("WineSelection", this.getWinePairing);
},
  methods: {
    getPairing: function(selection) {
    console.log("We have your wine pairing!");
      axios
      .post("/drink-quote",{"UserSelection":selection})
        .then(response=> {
          console.log(response);
          this.$root.$emit("WinePairing", response.data.pairing);
          //add picture component to show data from call,
        })
        .catch(error => {
          console.log(error);
          this.quote = WinePairing;
        });
    },
    WinePairing: function(selection) {
    this.$root.$emit("WinePairing", "This Wine Matches");
    }
  }
};
</script>


//mounted: function() {
 //   this.$root.$on("WineSelection", this.getWinePairing);
 // },

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

// methods: {
    getWinePairing: function(selection) {
    console.log("We have your wine pairing!");