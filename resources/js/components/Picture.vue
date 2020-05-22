<template>
  <div><p>{{WineName}} - {{WineDescription}}</p>
  <img :src="'/images/'+ WineImage" id='drinkimage'>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      WineName:"",
      WineDescription:"",
      WineImage:"",
      ProteinSelection: "",
      WineSelection: "",
    };
  },
  mounted: function() {
    this.$root.$on("WinePairing", this.showPairing);
  },
  methods: {
    showPairing(foodandwine) {this.WineName = foodandwine.name; this.WineDescription = foodandwine.description; this.WineImage = foodandwine.image;},
    proteinSelection: function(selection) {
      this.proteinSelection = selection;
      this.getProtein();
    },
    wineSelection: function(selection) {
      this.wineSelection = selection;
      this.getWine();
    },
    getWine() {
      if (this.proteinSelection === "Red Meat") {
        then(this.wineSelection === "Bold Red");
      }
      if (this.proteinSelection === "Poultry") {
        then(this.wineSelection === "Rich White");
      }
      if (this.proteinSelection === "Cured Meat") {
        then(this.wineSelection === "Medium Red");
      }
      if (this.proteinSelection === "Fish") {
        then(this.wineSelection === "Dry White");
      }
      if (this.proteinSelection === "Vegetarian") {
        then(this.wineSelection === "Light Red");
      }
    }
  }
};
</script>

<style>
#drinkimage{width: 100px; height:100px}
</style>


//export default {
 //name: "Picture",
  //data: function() {
   // return {
   //   quote: "Wine Pairing"
  //  };
 // },
 // mounted: function() {
 //   this.$root.$on("WineSelection", this.getWinePairing);
 // },
 // methods: {
 //   getWinePairing: function(selection) {
 //   console.log("We have your wine pairing!");
 //     axios
 //     .post("/drink-quote",{"UserSelection":selection})
 //       .then(response=> {
 //         console.log(response);
 //         this.$root.$emit("WinePairing", response.data.pairing);
 //         this.$root.$emit("WinPairing", response.data.pi
 //         //add picture component to show data from call,
 //       })
 //       .catch(error => {
 //         console.log(error);
 //         this.quote = WinePairing;
 //       });
 //   },
 //   WinePairing: function(selection) {
 //   this.$root.$emit("WinePairing", "This Wine Matches");
 //   }
 // }
//};
