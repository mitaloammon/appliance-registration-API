<template>
    <div>
        <h1>Lista de Eletrodomésticos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Marca</th>
                    <th>Voltagem</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="appliance in appliances" :key="appliance.id">
                    <td>{{ appliance.id }}</td>
                    <td>{{ appliance.name }}</td>
                    <td>{{ appliance.description }}</td>
                    <td>{{ appliance.brand_product }}</td>
                    <td>{{ appliance.voltage }}</td>
                    <td>
                        <button
                            @click="editAppliance(appliance)"
                            class="btn btn-primary"
                        >
                            Editar
                        </button>
                        <button
                            @click="deleteAppliance(appliance.id)"
                            class="btn btn-danger"
                        >
                            Deletar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <button @click="goToAddAppliance" class="btn btn-success">
            Adicionar Eletrodoméstico
        </button>
    </div>
</template>

<script>

export default {
    data() {
        return {
            appliances: [],
        };
    },
    methods: {
        fetchAppliance() {
            this.axios
                .get("/api/appliance")
                .then((response) => {
                    this.appliances = response.data;
                })
                .catch((error) => {
                    console.error('Erro ao buscaros eletrodomésticos:', error);
                });
        },
        deleteAppliance(applianceId) {
            this.axios
                .delete(`/api/appliance/${applianceId}`)
                .then((response) => {
                    this.appliances = this.appliances.filter(
                        (appliance) => appliance.id !== applianceId
                    );
                })
                .catch((error) => {
                    console.error('Erro ao remover o eletrodoméstico:', error);
                });
        },
        editAppliance(appliance) {
            this.$router.push(`/api/update/${appliance.id}`);
        },
    },
    created() {
        this.fetchAppliance();
    },
};
</script>
