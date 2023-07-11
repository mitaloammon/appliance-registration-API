<template>
    <div>
      <h1>Editar Eletrodoméstico</h1>
      <form @submit.prevent="updateAppliance">
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
        <button type="submit" class="btn btn-primary">Atualizar</button>
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
      fetchAppliance() {
        const applianceId = this.$route.params.id;
        axios.get(`api/appliance/${applianceId}`)
          .then(response => {
            this.appliance = response.data;
          })
          .catch(error => {
            console.error(error);
          });
      },
      updateAppliance() {
        axios.put(`api/appliance/${this.appliance.id}`, this.appliance)
          .then(response => {
            this.$router.push('/get-appliance');
          })
          .catch(error => {
            console.error(error);
          });
      }
    },
    created() {
      this.fetchAppliance();
    }
  };
  </script>
