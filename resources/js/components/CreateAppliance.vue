<template>
    <div>
      <h1>Adicionar Eletrodoméstico</h1>
      <form @submit.prevent="addAppliance">
        <div class="form-group">
          <label for="name">Nome:</label>
          <input v-model="appliance.name" type="text" id="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="description">Descrição:</label>
          <textarea v-model="appliance.description" id="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Marca:</label>
            <select class="form-select" v-model="appliance.brand_product">
                <option selected>Selecione a Marca do Eletrodoméstico</option>
                <option value="Electrolux">Electrolux</option>
                <option value="Brastemp">Brastemp</option>
                <option value="Fischer">Fischer</option>
                <option value="Samsung">Samsung</option>
                <option value="LG">LG</option>
            </select>
        </div>
        <div class="form-group">
            <label>Voltagem:</label>
            <select class="form-select" v-model="appliance.voltage">
                <option selected>Selecione a voltagem do Eletrodoméstico</option>
                <option value="220v">220v</option>
                <option value="110v">110v</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        appliance: {}
      };
    },
    methods: {
        addAppliance() {
        this.axios.post('/api/appliance', this.appliance)
          .then(response => {
            this.$router.push('/get-appliance');
          })
          .catch(error => {
            console.error(error);
          });
      }
    }
  };
  </script>
