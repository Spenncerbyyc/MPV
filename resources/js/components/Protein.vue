<template>
  <div class="Protein">
    <h2>Dinner and Drink Pairing Generator</h2>
    <p>Let us know what you're having for dinner.</p>
    <div class="dropdown">
      <button class="dropbtn">1. Please Pick Your Protein</button>
      <div class="dropdown-content" style="left:0;">
      <a @click="requestRedMeat" href="#">Red Meat</a>
        <a @click="requestPoultry" href="#">Poultry</a>
        <a @click="requestCuredMeat" href="#">Cured Meat</a>
        <a @click="requestFish" href="#">Fish</a>
        <a @click="requestVegetarian" href="#">Vegetarian</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Protein",
  methods: {
    requestRedMeat: function(click) {
      this.$root.$emit("Protein", "Red Meat");
    },
    requestPoultry: function(click) {
      this.$root.$emit("Protein", "Poultry");
    },
    requestCuredMeat: function(click) {
      this.$root.$emit("Protein", "CuredMeat");
    },
    requestFish: function(click) {
      this.$root.$emit("Protein", "Fish");
    },
    requestVegetarian: function(click) {
      this.$root.$emit("Protein", "Vegetarian");
    }
  }
};
</script>

<style>
.dropbtn {
  background-color: #001e96;
  color: white;
  padding: 16px;
  font-size: 20px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #001E96;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #001E96;
}
</style>


