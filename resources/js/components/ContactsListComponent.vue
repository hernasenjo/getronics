<template>
  <div class="container">
    <div class="row" v-if="contacts.length > 0">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Email</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(contact, index) in contacts" :key="contact.id">
            <th>{{ index + 1 }}</th>
            <td>{{ contact.name }}</td>
            <td>{{ contact.surname }}</td>
            <td>{{ contact.email }}</td>
            <td>{{ contact.phone }}</td>
            <td>{{ contact.address }}</td>
            <td>
              <button class="btn btn-primary" v-on:click="deleteContact(contact.id)">
                Eliminar
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div v-else><h3>No hay conactos</h3></div>
  </div>
</template>

<script>
export default {
  name: "Test",
  created() {},
  props: ["contacts"],
  data() {
    return {};
  },
  methods: {
    deleteContact(id) {
      axios
        .delete("/contacts/" + id)
        .then((response) => {
          console.log(rersponse);
        })
        .catch((error) => {
          console.log(error);
        })
        .finally(() => this.$emit("new"));
    },
  },
};
</script>

<style lang="scss" scoped></style>
